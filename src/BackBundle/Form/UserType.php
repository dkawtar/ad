<?php
namespace BackBundle\Form;
use BackBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\Form\FormFactoryInterface;
class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

                $builder->add('name', TextType::class, array(
                    'label' => 'Nom',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control name input-required',
                        'placeholder' => 'Nom',
                        'autocomplete' => 'off'
                    ),
                )
            )->add('firstName', TextType::class, array(
                    'label' => 'Prenom',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control firstName input-required',
                        'placeholder' => 'Prenom',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('login', TextType::class, array(
                    'label' => 'Login',
//                    'disabled' => true,
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control login input-required',
                        'placeholder' => 'Login',
                        'autocomplete' => 'off'
                    ),
                )
            )
//               ->add('email', TextType::class, array(
//                    'label' => 'Email',
//                    'required' => true,
//                    'disabled' => true,
//                    'attr' => array(
//                        'class' => 'form-control email',
//                        'placeholder' => 'nom.prenom',
//                        'autocomplete' => 'off'
//                    ),
//
//                )
//            )
            ->add('password', PasswordType::class, array(
                    'label' => 'Mot de passe',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control password input-required',
                        'placeholder' => 'Mot de passe',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('title', TextType::class, array(
                    'label' => 'Fonction',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Fonction',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('description', TextareaType::class, array(
                    'label' => 'Description',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'Ingénieur, Développeur,...',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('address', TextType::class, array(
                    'label' => 'Adresse',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control address',
                        'placeholder' => 'Adresse',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('postalCode', NumberType::class, array(
                    'label' => 'Code postal',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control postalCode',
                        'placeholder' => '75001',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('city', TextType::class, array(
                    'label' => 'Ville',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control city',
                        'placeholder' => 'Paris',
                    ),
                )
            )->add('country', TextType::class, array(
                    'label' => 'Pays',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control country',
                        'placeholder' => 'France',
                    ),
                )
            )->add('group', HiddenType::class, array(
                    'label' => '',
                    'attr' => array(
                        'class' => 'select-groups',
                        'autocomplete' => 'off'
                    ),
                )
            )
            ->add('phone', TextType::class, array(
                    'label' => 'Fix',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control phone',
                        'placeholder' => '0105020304',
                        'autocomplete' => 'off'
                    ),
                )
            )->add('mobile', TextType::class, array(
                    'label' => 'Mobile',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control mobile',
                        'placeholder' => '0601020304',
                        'autocomplete' => 'off'
                    ),
                )
            )

//        $builder
            ->add('at', ChoiceType::class, array(
                    'label' => ' ',
                    'choices' => array(
                        "42consulting.fr" => "42consulting.fr",
                        "42consulting.lu" => "42consulting.lu",
                        "42mediatvcom.fr" => "42mediatvcom.fr",
                        "42consulting.ma" => "42consulting.ma",
                        "42consulting.nl" => "42consulting.nl",
                    ),
                    'attr' => array(
                        'class' => 'form-control',
                        'placeholder' => 'service',
                    ),
                )
            )
                    ->add('picture', 'file', array(
                        'label' => 'Photo de Profil',
                        'attr' => array(
                            'accept' => 'image/png, image/jpeg, image/gif'
                        )
                    ))

//        $formModifier = function (FormInterface $form, User $at = null) {
//            $services = null === $at ? array() : $at->getService();
//            $form
                 ->add('service', ChoiceType::class, array(
                    'label' => 'Service',
                    'choices' => array(
                        "Saint-Mandé" => "Saint-Mandé",
                        "Luxembourg" => "Luxembourg",
                        "Issy-Les-Moulineaux" => "Issy-Les-Moulineaux",
                        "Maroc" =>"Maroc"
                    ),
                    'attr' => array(
                        'class' => 'form-control service',
                        'placeholder' => 'service',
                    ),
                )
            );


//        };
//        $builder->addEventListener(
//            FormEvents::PRE_SET_DATA,
//            function (FormEvent $event) use ($formModifier) {
//                $data = $event->getData();
//
//                $formModifier($event->getForm(), $data->getAt());
//            }
//        );
//
//        $builder->get('at')->addEventListener(
//            FormEvents::POST_SUBMIT,
//            function (FormEvent $event) use ($formModifier) {
//                $at = $event->getForm()->getData();
//                $formModifier($event->getForm()->getParent(), $at);
//            }
//        );

    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackBundle\Entity\User'
        ));
    }
}