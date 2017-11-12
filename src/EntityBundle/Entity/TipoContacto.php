<?php

namespace EntityBundle\Entity;

/**
 * TipoContacto
 */
class TipoContacto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;


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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TipoContacto
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contacto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contacto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add contacto
     *
     * @param \EntityBundle\Entity\Contacto $contacto
     *
     * @return TipoContacto
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
}
