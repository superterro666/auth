<?php

namespace EntityBundle\Entity;

/**
 * Contacto
 */
class Contacto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $dato;


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
     * Set dato
     *
     * @param string $dato
     *
     * @return Contacto
     */
    public function setDato($dato)
    {
        $this->dato = $dato;

        return $this;
    }

    /**
     * Get dato
     *
     * @return string
     */
    public function getDato()
    {
        return $this->dato;
    }
    /**
     * @var \EntityBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \EntityBundle\Entity\User $user
     *
     * @return Contacto
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
     * @var \EntityBundle\Entity\TipoContacto
     */
    private $tipo_contacto;


    /**
     * Set tipoContacto
     *
     * @param \EntityBundle\Entity\TipoContacto $tipoContacto
     *
     * @return Contacto
     */
    public function setTipoContacto(\EntityBundle\Entity\TipoContacto $tipoContacto = null)
    {
        $this->tipo_contacto = $tipoContacto;

        return $this;
    }

    /**
     * Get tipoContacto
     *
     * @return \EntityBundle\Entity\TipoContacto
     */
    public function getTipoContacto()
    {
        return $this->tipo_contacto;
    }
}
