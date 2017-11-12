<?php

namespace EntityBundle\Entity;

/**
 * Municipio
 */
class Municipio
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $municipio;


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
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
    /**
     * @var \EntityBundle\Entity\Provincia
     */
    private $provincia;


    /**
     * Set provincia
     *
     * @param \EntityBundle\Entity\Provincia $provincia
     *
     * @return Municipio
     */
    public function setProvincia(\EntityBundle\Entity\Provincia $provincia = null)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return \EntityBundle\Entity\Provincia
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dato;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dato = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add dato
     *
     * @param \EntityBundle\Entity\Dato $dato
     *
     * @return Municipio
     */
    public function addDato(\EntityBundle\Entity\Dato $dato)
    {
        $this->dato[] = $dato;

        return $this;
    }

    /**
     * Remove dato
     *
     * @param \EntityBundle\Entity\Dato $dato
     */
    public function removeDato(\EntityBundle\Entity\Dato $dato)
    {
        $this->dato->removeElement($dato);
    }

    /**
     * Get dato
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDato()
    {
        return $this->dato;
    }
}
