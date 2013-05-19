<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 */
class Order
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
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \Studia\XerksesBundle\Entity\Xero
     */
    private $xeros;

    /**
     * @var \Studia\XerksesBundle\Entity\ServiceTyp
     */
    private $typofservice;

    /**
     * @var \Studia\XerksesBundle\Entity\User
     */
    private $users;


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
     * @return Order
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
     * Set comment
     *
     * @param string $comment
     * @return Order
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return Order
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set xeros
     *
     * @param \Studia\XerksesBundle\Entity\Xero $xeros
     * @return Order
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
     * Set typofservice
     *
     * @param \Studia\XerksesBundle\Entity\ServiceTyp $typofservice
     * @return Order
     */
    public function setTypofservice(\Studia\XerksesBundle\Entity\ServiceTyp $typofservice = null)
    {
        $this->typofservice = $typofservice;
    
        return $this;
    }

    /**
     * Get typofservice
     *
     * @return \Studia\XerksesBundle\Entity\ServiceTyp 
     */
    public function getTypofservice()
    {
        return $this->typofservice;
    }

    /**
     * Set users
     *
     * @param \Studia\XerksesBundle\Entity\User $users
     * @return Order
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
     * @ORM\PrePersist
     */
    public function setDateAtValue()
    {
        // Add your code here
    }
}