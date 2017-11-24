<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace swdt\UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class ChangePasswordFormType_karjoo extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', null, array(
                'label' => 'form.username',
                'translation_domain' => 'FOSUserBundle',
                    'disabled' => true,
                    'required' => false,
                )
            )
        ;
        /*$builder->add('current_password', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
            array(
            'label' => 'form.current_password',
            'translation_domain' => 'FOSUserBundle',
            'mapped' => false,
            'constraints' => new UserPassword(),
                'attr' => array(
                    'placeholder' => '')
        ));*/
        $builder->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
            'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'form.new_password',
                'attr' => array(
                    'placeholder' => ''),),
            'second_options' => array('label' => 'form.new_password_confirmation',
                'attr' => array(
                    'placeholder' => '')),
            'invalid_message' => 'fos_user.password.mismatch',
            'required' => false,
        ));

        $builder
            ->add('fName','text',array(
                'label' =>'نام',
                'max_length' => 50,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('lName','text',array(
                'label' =>'نام خانوادگی',
                'max_length' => 50,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('gender','choice',array(
                'label' =>'جنسیت',
                'choices' => array(1=> 'آقا' , 2 => 'خانم'),
                'multiple' => false
            ))
            ->add('mobile','text',array(
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('birth_year','text',array(
                'label' => 'سال تولد',
                'max_length'=>4,
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                    'min' => 1300,
                    'max' => date('Y') - 621,
                )
            ))
            ->add('email','text',array(
                'label' => 'پست الکترونیکی',
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('karjoo',new ChangePasswordExtraFormType_karjoo())
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'swdt\UserBundle\Entity\User',
            'csrf_token_id' => 'change_password',
            // BC for SF < 2.8
            'intention'  => 'change_password',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
        $resolver->setDefaults(array('cascade_validation' => true,));

    }

    // BC for SF < 3.0
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'mz_user_change_password';
    }
}
