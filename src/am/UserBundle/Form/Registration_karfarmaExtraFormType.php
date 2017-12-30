<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace am\UserBundle\Form;

use EWZ\Bundle\RecaptchaBundle\Form\Type\EWZRecaptchaType;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use EWZ\Bundle\RecaptchaBundle\Validator\Constraints\IsTrue as RecaptchaTrue;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Registration_karfarmaExtraFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('telephone','text',array(
                'label' => 'شماره تماس',
                'max_length' => 12,
                'required' => false,
                    'attr' => array(
                        'placeholder' => '',
                    )

            ))
            ->add('about','textarea',array(
                'label' => 'درباره کارفرما (سال تاسیس ، اهداف ، وجه تمایز و ...)',
                'required'=>false,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('company_name','text',array(
                'label' => 'نام کارفرما',
                'max_length' => 100,
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('company_field','text',array(
                'label' => 'زمینه کاری',
                'max_length' => 100,
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('company_email','email',array(
                'label' => 'پست الکترونیکی کارفرما',
                'max_length' => 100,
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('address','text',array(
                'label' => 'آدرس کارفرما',
                'required' => false,
               'attr' => array(
                   'placeholder' => '',
               )
            ))

            ->add('website','text',array(
                'label' => 'وبسایت',
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                )

            ));
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'am\UserBundle\Entity\Karfarma',
            'validation_groups' => array(0 => 'Registration', 1 => 'Default'),
            'error_bubbling' => true,
        ));
    }


}
