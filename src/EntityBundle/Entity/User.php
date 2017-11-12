<?php

namespace EntityBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 */
class User implements UserInterface
{
   
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $sha;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var string
     */
    private $img;

    /**
     * @var \EntityBundle\Entity\Dato
     */
    private $dato;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $relacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dato_bancario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuario_centro;

    /**
     * @var \EntityBundle\Entity\Role
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contacto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->relacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dato_bancario = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usuario_centro = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set sha
     *
     * @param string $sha
     *
     * @return User
     */
    public function setSha($sha)
    {
        $this->sha = $sha;

        return $this;
    }

    /**
     * Get sha
     *
     * @return string
     */
    public function getSha()
    {
        return $this->sha;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return User
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return User
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set dato
     *
     * @param \EntityBundle\Entity\Dato $dato
     *
     * @return User
     */
    public function setDato(\EntityBundle\Entity\Dato $dato = null)
    {
        $this->dato = $dato;

        return $this;
    }

    /**
     * Get dato
     *
     * @return \EntityBundle\Entity\Dato
     */
    public function getDato()
    {
        return $this->dato;
    }

    /**
     * Add contacto
     *
     * @param \EntityBundle\Entity\Contacto $contacto
     *
     * @return User
     */
    public function addContacto(\EntityBundle\Entity\Contacto $contacto)
    {
        $this->contacto[] = $contacto;

        return $this;
    }

    /**
     * Remove contacto
     *
     * @param \EntityBundle\Entity\Contacto $contacto
     */
    public function removeContacto(\EntityBundle\Entity\Contacto $contacto)
    {
        $this->contacto->removeElement($contacto);
    }

    /**
     * Get contacto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Add relacion
     *
     * @param \EntityBundle\Entity\Relacion $relacion
     *
     * @return User
     */
    public function addRelacion(\EntityBundle\Entity\Relacion $relacion)
    {
        $this->relacion[] = $relacion;

        return $this;
    }

    /**
     * Remove relacion
     *
     * @param \EntityBundle\Entity\Relacion $relacion
     */
    public function removeRelacion(\EntityBundle\Entity\Relacion $relacion)
    {
        $this->relacion->removeElement($relacion);
    }

    /**
     * Get relacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRelacion()
    {
        return $this->relacion;
    }

    /**
     * Add datoBancario
     *
     * @param \EntityBundle\Entity\DatoBancario $datoBancario
     *
     * @return User
     */
    public function addDatoBancario(\EntityBundle\Entity\DatoBancario $datoBancario)
    {
        $this->dato_bancario[] = $datoBancario;

        return $this;
    }

    /**
     * Remove datoBancario
     *
     * @param \EntityBundle\Entity\DatoBancario $datoBancario
     */
    public function removeDatoBancario(\EntityBundle\Entity\DatoBancario $datoBancario)
    {
        $this->dato_bancario->removeElement($datoBancario);
    }

    /**
     * Get datoBancario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDatoBancario()
    {
        return $this->dato_bancario;
    }

    /**
     * Add usuarioCentro
     *
     * @param \EntityBundle\Entity\UsuarioCentro $usuarioCentro
     *
     * @return User
     */
    public function addUsuarioCentro(\EntityBundle\Entity\UsuarioCentro $usuarioCentro)
    {
        $this->usuario_centro[] = $usuarioCentro;

        return $this;
    }

    /**
     * Remove usuarioCentro
     *
     * @param \EntityBundle\Entity\UsuarioCentro $usuarioCentro
     */
    public function removeUsuarioCentro(\EntityBundle\Entity\UsuarioCentro $usuarioCentro)
    {
        $this->usuario_centro->removeElement($usuarioCentro);
    }

    /**
     * Get usuarioCentro
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarioCentro()
    {
        return $this->usuario_centro;
    }

    /**
     * Set role
     *
     * @param \EntityBundle\Entity\Role $role
     *
     * @return User
     */
    public function setRole(\EntityBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \EntityBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->getRole();
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        
    }

    public function getSalt() {
        
    }

}
