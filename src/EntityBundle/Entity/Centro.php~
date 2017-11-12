<?php

namespace EntityBundle\Entity;

/**
 * Centro
 */
class Centro
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $direccion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Centro
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Centro
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuario_centro;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuario_centro = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuarioCentro
     *
     * @param \EntityBundle\Entity\UsuarioCentro $usuarioCentro
     *
     * @return Centro
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
}
