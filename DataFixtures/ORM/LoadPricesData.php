<?php
namespace Studia\XerksesBundlee\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Studia\XerksesBundle\Entity\Prices;

class LoadPriceData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {


      for($i=0; $i<80; $i++)
      {
          $data = new Prices();
          $data->setPricevalue(2.5);
          $data->setTypofservice($em->merge($this->getReference("ServiceTyp-".$i++)));
          $data->setXero($em->merge($this->getReference("Xero-".$i++)));

          $data2 = new Prices();
          $data2->setPricevalue(5);
          $data2->setTypofservice($em->merge($this->getReference("ServiceTyp-".$i++)));
          $data2->setXero($em->merge($this->getReference("Xero-".$i)));
            $em->persist($data);
            $em->persist($data2);
            $em->flush();
            $this->addReference('Price-'.($i++), $data);
            $this->addReference('Price-'.$i,$data2);
    }
  }

  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}

