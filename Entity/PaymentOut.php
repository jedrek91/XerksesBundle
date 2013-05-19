<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentOut
 */
class PaymentOut
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var float
     */
    private $value;

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
     * Set date
     *
     * @param \DateTime $date
     * @return PaymentOut
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set value
     *
     * @param float $value
     * @return PaymentOut
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set users
     *
     * @param \Studia\XerksesBundle\Entity\User $users
     * @return PaymentOut
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
     * @return PaymentOut
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
    /**
     * @ORM\PrePersist
     */
    public function setDateAtValue()
    {
        // Add your code here
    }
}