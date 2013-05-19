<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favourites
 */
class Favourites
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Studia\XerksesBundle\Entity\User
     */
    private $users;

    /**
     * @var \Studia\XerksesBundle\Entity\Xero
     */
    private $xeros;


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
     * Set users
     *
     * @param \Studia\XerksesBundle\Entity\User $users
     * @return Favourites
     */
    public function setUsers(\Studia\XerksesBundle\Entity\User $users = null)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return \Studia\XerksesBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set xeros
     *
     * @param \Studia\XerksesBundle\Entity\Xero $xeros
     * @return Favourites
     */
    public function setXeros(\Studia\XerksesBundle\Entity\Xero $xeros = null)
    {
        $this->xeros = $xeros;
    
        return $this;
    }

    /**
     * Get xeros
     *
     * @return \Studia\XerksesBundle\Entity\Xero 
     */
    public function getXeros()
    {
        return $this->xeros;
    }
}