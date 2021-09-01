<?php

namespace App\Controller\Admin;

use App\Entity\Heros;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HerosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Heros::class;
    }

   
    public function configureFields(string $pageName): iterable
    {
        return [
            
            TextField::new('titre'),
            TextField::new('soustitre'),
            ImageField::new('image')
               ->setBasePath('heros/')
               ->setUploadDir('public/heros')
               ->setUploadedFileNamePattern('[randomhash].[extension]')
        ];
    }
   
}
