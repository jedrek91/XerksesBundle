<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceTyp
 */
class ServiceTyp
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Studia\XerksesBundle\Entity\Prices
     */
    private $prices;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orders;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set name
     *
     * @param string $name
     * @return ServiceTyp
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set prices
     *
     * @param \Studia\XerksesBundle\Entity\Prices $prices
     * @return ServiceTyp
     */
    public function setPrices(\Studia\XerksesBundle\Entity\Prices $prices = null)
    {
        $this->prices = $prices;
    
        return $this;
    }

    /**
     * Get prices
     *
     * @return \Studia\XerksesBundle\Entity\Prices 
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Add orders
     *
     * @param \Studia\XerksesBundle\Entity\Order $orders
     * @return ServiceTyp
     */
    public function addOrder(\Studia\XerksesBundle\Entity\Order $orders)
    {
        $this->orders[] = $orders;
    
        return $this;
    }

    /**
     * Remove orders
     *
     * @param \Studia\XerksesBundle\Entity\Order $orders
     */
    public function removeOrder(\Studia\XerksesBundle\Entity\Order $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }
}