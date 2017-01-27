<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommercialEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', TextType::class, array(
                    'label' => 'Pseudo',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Pseudo',
                    ),
                )
            )
            ->add('password', PasswordType::class, array(
                    'label' => 'Mot de passe',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '********',
//                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('lastName', TextType::class, array(
                    'label' => 'Nom',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Dupont',
//                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('firstName', TextType::class, array(
                    'label' => 'Prénom',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Jean',
                    ),
                )
            )
            ->add('email', EmailType::class, array(
                    'label' => 'Mail',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'jean.dupont@mail.com',
                    ),
                )
            )
            ->add('phone', TextType::class, array(
                    'label' => 'Téléphone',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '01 02 03 04 05',
                    ),
                )
            )
            ->add('image_upload', FileType::class, array(
                    'mapped' => false,
                    'label' => 'Profile client',
                    'required' => false
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Commercial'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backbundle_commercial';
    }


}
