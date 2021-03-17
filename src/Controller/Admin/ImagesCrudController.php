<?php

namespace App\Controller\Admin;

use App\Entity\Images;
use App\Controller\Admin\Field\VichImageField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ImagesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Images::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $image = ImageField::new('image')->setBasePath('/images/gallerie');
        $imageField = VichImageField::new('imageFile');

        $fields = [
            TextField::new('title'),
            TextEditorField::new('description'),
            
        ];

        if ($pageName == Crud::PAGE_INDEX || $pageName == Crud::PAGE_DETAIL) {
            $fields[] = $image;
        } else {
            $fields[] = $imageField;
        }
        return $fields;
    }
}
