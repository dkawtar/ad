<?php

namespace BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
                        'placeholder' => '(01-02-03-04-05',
                    ),
                )
            )
            ->add('percentage', NumberType::class, array(
                    'label' => 'Reduction',
                    'data' => 0,
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => '0',
                    ),
                )
            )
            ->add('image', FileType::class, array(
                    'mapped' => false,
                    'label' => 'Profile client',
                    'required' => false
                )
            )

//            ->add('company')
//            ->add('commercial')
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
