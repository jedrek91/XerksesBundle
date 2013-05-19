XerksesBundle
=============

XerksesBundle

namespace Studia\XerksesBundle

app/AppKernel.php

 $bundles = array(
    
    new Studia\XerksesBundle\XerksesBundle(),

    new Sonata\BlockBundle\SonataBlockBundle(),

    new Sonata\jQueryBundle\SonatajQueryBundle(),

    new Sonata\AdminBundle\SonataAdminBundle(),

    new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
    
    new Knp\Bundle\MenuBundle\KnpMenuBundle(),
    
    new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
    
    new FOS\UserBundle\FOSUserBundle(),
    
    new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
    
    new JMS\SerializerBundle\JMSSerializerBundle(),
    
    new FOS\RestBundle\FOSRestBundle(),
    
    new Bc\Bundle\BootstrapBundle\BcBootstrapBundle(),
    
    new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),

Jakby coś nie działało to pisać. 
