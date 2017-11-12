<?php

namespace EntityBundle\Entity;

/**
 * UsuarioCentro
 */
class UsuarioCentro
{
    /**
     * @var int
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \EntityBundle\Entity\User
     */
    private $user;

    /**
     * @var \EntityBundle\Entity\Centro
     */
    private $centro;


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     *
     * @return UsuarioCentro
     */
    public function setUser(\EntityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \EntityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set centro
     *
     * @param \EntityBundle\Entity\Centro $centro
     *
     * @return UsuarioCentro
     */
    public function setCentro(\EntityBundle\Entity\Centro $centro = null)
    {
        $this->centro = $centro;

        return $this;
    }

    /**
     * Get centro
     *
     * @return \EntityBundle\Entity\Centro
     */
    public function getCentro()
    {
        return $this->centro;
    }
}
