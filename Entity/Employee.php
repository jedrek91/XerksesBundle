<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * Employee
 */
class Employee extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Studia\XerksesBundle\Entity\Xero
     */
    private $xero;


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
     * Set xero
     *
     * @param \Studia\XerksesBundle\Entity\Xero $xero
     * @return Employee
     */
    public function setXero(\Studia\XerksesBundle\Entity\Xero $xero = null)
    {
        $this->xero = $xero;

        return $this;
    }

    /**
     * Get xero
     *
     * @return \Studia\XerksesBundle\Entity\Xero
     */
    public function getXero()
    {
        return $this->xero;
    }
}