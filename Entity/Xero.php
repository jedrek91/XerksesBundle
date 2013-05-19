<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xero
 */
class Xero
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
     * @var string
     */
    private $coordinate;

    /**
     * @var string
     */
    private $state;

    /**
     * @var \Studia\XerksesBundle\Entity\Address
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $paymentout;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $favourites;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $employees;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $prices;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opinions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paymentout = new \Doctrine\Common\Collections\ArrayCollection();
        $this->favourites = new \Doctrine\Common\Collections\ArrayCollection();
        $this->employees = new \Doctrine\Common\Collections\ArrayCollection();
        $this->prices = new \Doctrine\Common\Collections\ArrayCollection();
        $this->opinions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Xero
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
     * Set coordinate
     *
     * @param string $coordinate
     * @return Xero
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;
    
        return $this;
    }

    /**
     * Get coordinate
     *
     * @return string 
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Xero
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set address
     *
     * @param \Studia\XerksesBundle\Entity\Address $address
     * @return Xero
     */
    public function setAddress(\Studia\XerksesBundle\Entity\Address $address = null)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return \Studia\XerksesBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add orders
     *
     * @param \Studia\XerksesBundle\Entity\Order $orders
     * @return Xero
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

    /**
     * Add paymentout
     *
     * @param \Studia\XerksesBundle\Entity\PaymentOut $paymentout
     * @return Xero
     */
    public function addPaymentout(\Studia\XerksesBundle\Entity\PaymentOut $paymentout)
    {
        $this->paymentout[] = $paymentout;
    
        return $this;
    }

    /**
     * Remove paymentout
     *
     * @param \Studia\XerksesBundle\Entity\PaymentOut $paymentout
     */
    public function removePaymentout(\Studia\XerksesBundle\Entity\PaymentOut $paymentout)
    {
        $this->paymentout->removeElement($paymentout);
    }

    /**
     * Get paymentout
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaymentout()
    {
        return $this->paymentout;
    }

    /**
     * Add favourites
     *
     * @param \Studia\XerksesBundle\Entity\Favourites $favourites
     * @return Xero
     */
    public function addFavourite(\Studia\XerksesBundle\Entity\Favourites $favourites)
    {
        $this->favourites[] = $favourites;
    
        return $this;
    }

    /**
     * Remove favourites
     *
     * @param \Studia\XerksesBundle\Entity\Favourites $favourites
     */
    public function removeFavourite(\Studia\XerksesBundle\Entity\Favourites $favourites)
    {
        $this->favourites->removeElement($favourites);
    }

    /**
     * Get favourites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFavourites()
    {
        return $this->favourites;
    }

    /**
     * Add employees
     *
     * @param \Studia\XerksesBundle\Entity\Employee $employees
     * @return Xero
     */
    public function addEmployee(\Studia\XerksesBundle\Entity\Employee $employees)
    {
        $this->employees[] = $employees;
    
        return $this;
    }

    /**
     * Remove employees
     *
     * @param \Studia\XerksesBundle\Entity\Employee $employees
     */
    public function removeEmployee(\Studia\XerksesBundle\Entity\Employee $employees)
    {
        $this->employees->removeElement($employees);
    }

    /**
     * Get employees
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Add prices
     *
     * @param \Studia\XerksesBundle\Entity\Prices $prices
     * @return Xero
     */
    public function addPrice(\Studia\XerksesBundle\Entity\Prices $prices)
    {
        $this->prices[] = $prices;
    
        return $this;
    }

    /**
     * Remove prices
     *
     * @param \Studia\XerksesBundle\Entity\Prices $prices
     */
    public function removePrice(\Studia\XerksesBundle\Entity\Prices $prices)
    {
        $this->prices->removeElement($prices);
    }

    /**
     * Get prices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Add opinions
     *
     * @param \Studia\XerksesBundle\Entity\Opinion $opinions
     * @return Xero
     */
    public function addOpinion(\Studia\XerksesBundle\Entity\Opinion $opinions)
    {
        $this->opinions[] = $opinions;
    
        return $this;
    }

    /**
     * Remove opinions
     *
     * @param \Studia\XerksesBundle\Entity\Opinion $opinions
     */
    public function removeOpinion(\Studia\XerksesBundle\Entity\Opinion $opinions)
    {
        $this->opinions->removeElement($opinions);
    }

    /**
     * Get opinions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOpinions()
    {
        return $this->opinions;
    }
}