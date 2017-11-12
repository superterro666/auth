<?php

namespace EntityBundle\Entity;

/**
 * Relacion
 */
class Relacion
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
    private $user_a;

    /**
     * @var \EntityBundle\Entity\User
     */
    private $user_b;


    /**
     * Set userA
     *
     * @param \EntityBundle\Entity\User $userA
     *
     * @return Relacion
     */
    public function setUserA(\EntityBundle\Entity\User $userA = null)
    {
        $this->user_a = $userA;

        return $this;
    }

    /**
     * Get userA
     *
     * @return \EntityBundle\Entity\User
     */
    public function getUserA()
    {
        return $this->user_a;
    }

    /**
     * Set userB
     *
     * @param \EntityBundle\Entity\User $userB
     *
     * @return Relacion
     */
    public function setUserB(\EntityBundle\Entity\User $userB = null)
    {
        $this->user_b = $userB;

        return $this;
    }

    /**
     * Get userB
     *
     * @return \EntityBundle\Entity\User
     */
    public function getUserB()
    {
        return $this->user_b;
    }
    /**
     * @var \EntityBundle\Entity\TipoRelacion
     */
    private $tipo_relacion;


    /**
     * Set tipoRelacion
     *
     * @param \EntityBundle\Entity\TipoRelacion $tipoRelacion
     *
     * @return Relacion
     */
    public function setTipoRelacion(\EntityBundle\Entity\TipoRelacion $tipoRelacion = null)
    {
        $this->tipo_relacion = $tipoRelacion;

        return $this;
    }

    /**
     * Get tipoRelacion
     *
     * @return \EntityBundle\Entity\TipoRelacion
     */
    public function getTipoRelacion()
    {
        return $this->tipo_relacion;
    }
}
