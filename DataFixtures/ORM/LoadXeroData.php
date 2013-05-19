<?php
namespace Studia\XerksesBundlee\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Studia\XerksesBundle\Entity\Xero;

class LoadXeroData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {


      for($i=0; $i<80; $i++)
      {
          $data = new Xero();
          $data->setName("Xerkses");
          $data->setCoordinate("32.45|55.22");
          $data->setState("open");
          $data->setAddress($em->merge($this->getReference("Address-".$i)));


            $em->persist($data);
            $em->flush();
            $this->addReference('Xero-'.($i), $data);
  }
  }

  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}

