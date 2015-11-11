<?php 
namespace Utilisateur\UtilisateurBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Utilisateur\UtilisateurBundle\Entity\Pays;

class LoadPaysData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $pays = new Pays();
       $pays->setNomPays("mauritanie");
       $pays2 = new Pays();
 $pays2->setNomPays("senegal");
 $pays3 = new Pays();
  $pays3->setNomPays("maroc");
  $pays4 = new Pays();
   $pays4->setNomPays("tunisie");
   $pays5 = new Pays();
    $pays5->setNomPays("gabon");
    $pays5 = new Pays();
     $pays5->setNomPays("cote d'ivoire ");
        $manager->persist($pays);
        $manager->persist($pays2);
        $manager->persist($pays3);
        $manager->persist($pays4);
        $manager->persist($pays5);
        $manager->flush();
    }
}