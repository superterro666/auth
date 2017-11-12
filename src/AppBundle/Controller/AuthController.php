<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Services\JwtAuthService;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\ErrorsService;

class AuthController extends Controller {

    public function AuthAction(Request $request) {
       $jwt = $this->get(JwtAuthService::class);
       $error = $this->get(ErrorsService::class);
        $user = $request->get('user') ?? false;
        $password = $request->get('password') ?? false;
    

        if ($user || $password) {
            $em = $this->getDoctrine()->getManager();
            try {
                $user = $em->getRepository('EntityBundle:User')->findOneBy(array('username' => $user));

                if ($user) {
   
                    //  $password_hash = password_hash('12345', PASSWORD_BCRYPT, array('cost' => 4));

                    $iguales = password_verify($password, $user->getPassword());
                    
                   
                    var_dump($user->getRole());

                    if ($iguales) {
                        
                           $response =   $jwt->signup($user);
                            return new JsonResponse($user->getRole()->getRole()->getId());
                       
                    } else {
                        
                        return new JsonResponse($error->dataError($iguales));
                    }
                }
            } catch (\Doctrine\DBAL\Exception $e) {
                return new JsonResponse($error->dbError($e));
            }

            return new JsonResponse($error->dataError(2));
        }



         return new JsonResponse($error->dataError(2));
    }

}
