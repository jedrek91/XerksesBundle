<?php
namespace Studia\XerksesBundlee\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Studia\XerksesBundle\Entity\Address;

class LoadAddressData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {


      for($i=0; $i<80; $i++)
      {
          $address = new Address();
          $address->setPlace("Krakow");
          $address->setStreet("Podchorazych".$i);
          $address->setPostcode("30440");

        $em->persist($address);
        $em->flush();
        $this->addReference('Address-'.($i), $address);
  }
  }

  public function getOrder()
  {
    return 1; // the order in which fixtures will be loaded
  }
}

