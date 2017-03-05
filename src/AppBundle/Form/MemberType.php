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

class MemberType extends AbstractType
{
//    private $avatarDirectory;
//
//    /**
//     * MemberType constructor.
//     * @param $avatarDirectory
//     */
//    public function __construct($avatarDirectory)
//    {
//        $this->avatarDirectory = $avatarDirectory;
//    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', TextType::class, array('label' => 'Prénom', 'required'=> true))
            ->add('lastName', TextType::class, array('label' => 'Nom de famille', 'required'=> true))
            ->add('birthday', BirthdayType::class, array('widget' => 'single_text', 'label' => 'Date de naissance', 'required'=> true))
            ->add('sex', EntityType::class, array('label'=> 'Sexe', 'class' => 'AppBundle\Entity\Sex', 'multiple' => false, 'expanded' => true, 'choice_label' => 'lib' ))
            ->add('avatar', FileType::class, array('required'=> false))
            ->add('save', SubmitType::class);

        $builder->get('firstName')->addModelTransformer(new NameTransformer());
        $builder->get('lastName')->addModelTransformer(new NameTransformer());
        $builder->get('avatar')->addModelTransformer(new FileTransformer($this->avatarDirectory));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'AppBundle\Entity\Member',
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_member';
    }


}
