<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyEditType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login', TextType::class, array(
                    'label' => 'Pseudo',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control inputLogin',
                        'placeholder' => 'Pseudo',
                    ),
                )
            )
            ->add('password', PasswordType::class, array(
                    'label' => 'Mot de passe',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control inputPassword',
                        'placeholder' => '********',
//                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('name', TextType::class, array(
                    'label' => 'Nom de la société',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control inputName',
                        'placeholder' => 'Nom de la société',
                    ),
                )
            )
            ->add('lastNameRepresentative', TextType::class, array(
                    'label' => 'Nom du représentant',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Dupont',
                    ),
                )
            )->add('firstNameRepresentative', TextType::class, array(
                    'label' => 'Prénom du représentant',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Jean',
                    ),
                )
            )
            ->add('email', EmailType::class, array(
                    'label' => 'Mail du représentant',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control inputEmail',
                        'placeholder' => 'jean.dupont@company.com',
                    ),
                )
            )
            ->add('siret', TextType::class, array(
                    'label' => 'SIRET',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control inputSiret',
                        'placeholder' => '000-00-000-00000',
                    ),
                )
            )
            ->add('tva', TextType::class, array(
                    'label' => 'N° TVA intracommunautaire',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control inputTva',
                        'placeholder' => 'FR-000-00-000-00000',
                    ),
                )
            )->add('address', TextType::class, array(
                    'label' => 'Address',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '17 Rue Charles de Gaulle',
                    ),
                )
            )->add('additionalAddress', TextType::class, array(
                    'label' => 'Complément d’adresse',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '10ème étage, Porte 12',
                    ),
                )
            )->add('country', CountryType::class, array(
                    'label' => 'Pays',
                    'data'=> 'FR',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'France',
                    ),
                )
            )
            ->add('postalCode', TextType::class, array(
                    'label' => 'Code postal',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '75001',
                    ),
                )
            )->add('city', TextType::class, array(
                    'label' => 'Ville',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Paris',
                    ),
                )
            )
            ->add('phone', TextType::class, array(
                    'label' => 'Téléphone Fixe',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control inputPhone',
                        'placeholder' => '01 02 03 04 05',
                    ),
                )
            )
            ->add('mobile', TextType::class, array(
                    'label' => 'Tél Mobile',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control inputMobile',
                        'placeholder' => '06 02 03 04 05',
                    ),
                )
            )  ->add('image_upload', FileType::class, array(
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
            'data_class' => 'BackBundle\Entity\Company'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backbundle_company';
    }


}
