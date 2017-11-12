<?php

namespace AppBundle\Services;

use Firebase\JWT\JWT;
use Doctrine\ORM\EntityManager;

class JwtAuthService {
    public $key;
    

    public function __construct() {
        
        $this->key = "clave_secreta";
    }

    public function decodeAuthService($jwt) {
        $decoder = JWT::decode($jwt, $this->key, array("HS256"));
        return $decoder;
    }

    public function signup($user) {
  
        $token = array(
            "iss" => "json",
            "sub" => "terro",
            "jti" => $user->getId(),
            "iat" => time(),
            "exp" => time() + (7 * 24 * 60 * 60),
            "id" => $user->getSha(),
            "user" => $user->getUsername()

        );
        
      
        $user = array ('id'=>$user->getSha(),'user'=>$user->getUsername());

        $jwt = JWT::encode($token, $this->key, "HS256");

        return array('code'=>200,'user' => $user, 'token' => $jwt);
    }
    
     public function checkToken($jwt) {
       
        try {
            
         $decoded = JWT::decode($jwt, $this->key, array('HS256'));
           
        } catch (\UnexpectedValueException $e) {

            $auth = false;
            
            
        } catch (\DomainException $e) {
            
            $auth = false;
            
        }

        if (isset($decoded->sub)) {

            $auth = true;
        } else {

           
            return false;
        }

        return $auth;
    }

}
