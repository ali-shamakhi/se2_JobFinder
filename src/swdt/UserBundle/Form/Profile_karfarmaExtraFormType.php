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
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class Profile_karfarmaExtraFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('company_name','text',array(
                'label' => '*نام کارفرما',
                'attr' => array(
                    'placeholder' => 'نام کارفرما را وارد کنید',
                )
            ))
            ->add('telephone','text',array(
                'label' => '*شماره تماس کارفرما',
                'max_length' => 11,
                'required' => false,
                'attr' => array(
                    'placeholder' => 'شماره تماس خود را به همراه پیش شماره وارد کنید',
                )
            ))
            ->add('company_email','text',array(
                'label' => '*پست الکترونیکی کارفرما',
                'attr' => array(
                    'placeholder' => 'پست الکترونیکی کارفرما را وارد کنید.',
                )
            ))
            ->add('company_field','text',array(
                'label' => '*زمینه کاری',
                'max_length' => 100,
                'required' => false,
                'attr' => array(
                    'placeholder' => 'زمینه کاری کارفرما را وارد کنید',
                )
            ))
            ->add('address','text',array(
                'label' => 'آدرس کارفرما',
                'attr' => array(
                    'placeholder' => 'آدرس کامل کارفرما را وارد کنید',
                )
            ))
            ->add('file','file',array(
                'required'=>false,
                'label' => 'انتخاب عکس',
            ))
            ->add('about','textarea',array(
                'label' => 'درباره کارفرما (سال تاسیس ، اهداف و...)',
                'required'=>false,
                'attr' => array(
                    'placeholder' => 'توضیحات لازم درباره کارفرما',
                    'rows' => '3'
                )
            ))
            ->add('website','text',array(
                'label' => 'وبسایت',
                'required' => false,
                'attr' => array(
                    'placeholder' => 'وبسایت خود را وارد کنید',
                )

            ))

            ->add('aboutPicFile','file',array(
                'label' => 'توضیحات شرکت(عکس یا پی دی اف)',
                'required'=>false,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'swdt\UserBundle\Entity\Karfarma',
            'error_bubbling' => true,

        ));
    }
}
