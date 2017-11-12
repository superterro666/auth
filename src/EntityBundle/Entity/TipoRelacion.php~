<?php

namespace EntityBundle\Entity;

/**
 * TipoRelacion
 */
class TipoRelacion
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
     * @return TipoRelacion
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
    private $relacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->relacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add relacion
     *
     * @param \EntityBundle\Entity\Relacion $relacion
     *
     * @return TipoRelacion
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
}
