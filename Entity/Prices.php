<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prices
 */
class Prices
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $pricevalue;

    /**
     * @var \Studia\XerksesBundle\Entity\ServiceTyp
     */
    private $typofservice;

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
     * Set pricevalue
     *
     * @param float $pricevalue
     * @return Prices
     */
    public function setPricevalue($pricevalue)
    {
        $this->pricevalue = $pricevalue;

        return $this;
    }

    /**
     * Get pricevalue
     *
     * @return float
     */
    public function getPricevalue()
    {
        return $this->pricevalue;
    }

    /**
     * Set typofservice
     *
     * @param \Studia\XerksesBundle\Entity\ServiceTyp $typofservice
     * @return Prices
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
     * Set xeros
     *
     * @param \Studia\XerksesBundle\Entity\Xero $xero
     * @return Prices
     */
    public function setXero(\Studia\XerksesBundle\Entity\Xero $xero = null)
    {
        $this->xero = $xero;

        return $this;
    }

    /**
     * Get xeros
     *
     * @return \Studia\XerksesBundle\Entity\Xero
     */
    public function getXero()
    {
        return $this->xero;
    }
}
