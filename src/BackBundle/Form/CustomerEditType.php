<?php

namespace BackBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerEditType extends AbstractType
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
            ->add('percentage', NumberType::class, array(
                    'label' => 'Réduction',
                    'data' => 0,
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '0',
                    ),
                )
            )
            ->add('image_upload', FileType::class, array(
                    'mapped' => false,
                    'label' => 'Profile client',
                    'required' => false
                )
            )
            ->add('company', EntityType::class, array(
                    'class' => 'BackBundle:Company',
                    'required' => true,
                    'label' => 'Société',
                     'attr' => array(
                        'class' => 'form-control select2' ,
                    ),
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.name', 'ASC');
                    },
                    'choice_label' => 'name',
                )
            )
            ->add('commercial', EntityType::class, array(
                    'class' => 'BackBundle:Commercial',
                    'required' => true,
                    'label' => 'Commerçant',
                    'attr' => array(
                        'class' => 'form-control select2',
                    ),
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.lastName', 'ASC');
                    },
                )
            )     
            ->add('group', EntityType::class, array(
                    'class' => 'BackBundle:GroupCustomer',
                    'required' => false,
                    'label' => 'Groupe',
                    'attr' => array(
                        'class' => 'form-control',
                    ),
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('g')
                            ->orderBy('g.name', 'ASC');
                    },
                )
            )
//            ->add('group')        
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\Customer'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backbundle_customer';
    }


}
