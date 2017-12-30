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
                    'placeholder' => '',
                )
            ))
            ->add('telephone','text',array(
                'label' => '*شماره تماس کارفرما',
                'max_length' => 11,
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('company_email','text',array(
                'label' => '*پست الکترونیکی کارفرما',
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('company_field','text',array(
                'label' => '*زمینه کاری',
                'max_length' => 100,
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
                )
            ))
            ->add('address','text',array(
                'label' => 'آدرس کارفرما',
                'attr' => array(
                    'placeholder' => '',
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
                    'placeholder' => '',
                    'rows' => '3'
                )
            ))
            ->add('website','text',array(
                'label' => 'وبسایت',
                'required' => false,
                'attr' => array(
                    'placeholder' => '',
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
            'data_class'=> 'am\UserBundle\Entity\Karfarma',
            'error_bubbling' => true,

        ));
    }
}
