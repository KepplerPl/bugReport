<?php

namespace App\Form;

use App\Entity\EntityOne;
use App\Entity\EntityThree;
use App\Entity\EntityTwo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\ChoiceList;
use Symfony\Component\Form\FormBuilderInterface;

class BugReportFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('entity_one', EntityType::class, [
                'mapped' => false,
                'class' => EntityOne::class,
                'choice_label' => 'rand1_2',
                'choice_filter'=> ChoiceList::filter(
                    $this,
                    function ($entityOne) {
                        if($entityOne instanceof EntityOne) {
                            return $entityOne->getRand12() == 1;
                        }

                        return false;
                    }
                )
            ])
            ->add('entity_two', EntityType::class, [
                'mapped' => false,
                'class' => EntityTwo::class,
                'choice_label' => 'rand3_4',
                'choice_filter'=> ChoiceList::filter(
                    $this,
                    function ($entityTwo) {
                        die('not gonna enter here');
                    }
                )
            ])
            ->add('entity_three', EntityType::class, [
                'mapped' => false,
                'class' => EntityThree::class,
                'choice_label' => 'random_string',
                'choice_filter'=> ChoiceList::filter(
                    $this,
                    function ($entityThree) {
                        die('not gonna enter here');
                    }
                )
            ])
        ;
    }
}
