<?php

namespace EntityBundle\Entity;

/**
 * Provincia
 */
class Provincia
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $provincia;


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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $municipio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->municipio = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add municipio
     *
     * @param \EntityBundle\Entity\Municipio $municipio
     *
     * @return Provincia
     */
    public function addMunicipio(\EntityBundle\Entity\Municipio $municipio)
    {
        $this->municipio[] = $municipio;

        return $this;
    }

    /**
     * Remove municipio
     *
     * @param \EntityBundle\Entity\Municipio $municipio
     */
    public function removeMunicipio(\EntityBundle\Entity\Municipio $municipio)
    {
        $this->municipio->removeElement($municipio);
    }

    /**
     * Get municipio
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
}
