<?php

namespace Studia\XerksesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * User
 */
 
 /**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email already taken")
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $opinions;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orders;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $paymentin;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $paymentout;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $favourites;
	
	/**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    protected $plainPassword;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->opinions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paymentin = new \Doctrine\Common\Collections\ArrayCollection();
        $this->paymentout = new \Doctrine\Common\Collections\ArrayCollection();
        $this->favourites = new \Doctrine\Common\Collections\ArrayCollection();
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
	
	public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }

    /**
     * Add opinions
     *
     * @param \Studia\XerksesBundle\Entity\Opinion $opinions
     * @return User
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

    /**
     * Add orders
     *
     * @param \Studia\XerksesBundle\Entity\Order $orders
     * @return User
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
     * Add paymentin
     *
     * @param \Studia\XerksesBundle\Entity\PaymentIn $paymentin
     * @return User
     */
    public function addPaymentin(\Studia\XerksesBundle\Entity\PaymentIn $paymentin)
    {
        $this->paymentin[] = $paymentin;

        return $this;
    }

    /**
     * Remove paymentin
     *
     * @param \Studia\XerksesBundle\Entity\PaymentIn $paymentin
     */
    public function removePaymentin(\Studia\XerksesBundle\Entity\PaymentIn $paymentin)
    {
        $this->paymentin->removeElement($paymentin);
    }

    /**
     * Get paymentin
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaymentin()
    {
        return $this->paymentin;
    }

    /**
     * Add paymentout
     *
     * @param \Studia\XerksesBundle\Entity\PaymentOut $paymentout
     * @return User
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
     * @return User
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
}
