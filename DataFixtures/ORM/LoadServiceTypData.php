<?php
namespace Studia\XerksesBundlee\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Studia\XerksesBundle\Entity\ServiceTyp;

class LoadServiceTypData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {


      for($i=0; $i<80; $i++)
      {
            $data = new ServiceTyp();
            $data->setName("kser");
            $data2 = new ServiceTyp();
            $data2->setName("bindowanie");

            $em->persist($data);
            $em->persist($data2);
            $em->flush();
            $this->addReference('ServiceTyp-'.($i++), $data);
            $this->addReference('ServiceTyp-'.$i,$data2);
    }
  }

  public function getOrder()
  {
    return 3; // the order in which fixtures will be loaded
  }
}

