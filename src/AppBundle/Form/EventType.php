<?php

namespace AppBundle\Form;

use AppBundle\Form\DataTransformer\FileTransformer;
use AppBundle\Form\DataTransformer\MemberTransformer;
use AppBundle\Form\DataTransformer\NameTransformer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class EventType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('label' => 'Nom de l\'événement', 'required' => true))
            ->add('city', TextType::class, array('label' => 'Ville', 'required' => false))
            ->add(
                'date',
                BirthdayType::class,
                array('widget' => 'single_text', 'label' => "Date de l'événement", 'required' => true)
            )
            ->add(
                'eventType',
                EntityType::class,
                array(
                    'label' => 'Type d\'événement',
                    'class' => 'AppBundle\Entity\EventType',
                    'multiple' => false,
                    'expanded' => false,
                    'choice_label' => 'lib',
                    'placeholder' => 'Sélectionnez une valeur'
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Event',
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_event';
    }


}
