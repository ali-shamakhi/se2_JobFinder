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
use Gregwar\CaptchaBundle\Type\CaptchaType;
use swdt\KaryabBundle\Form\userSkillsFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Registration_karjooExtraFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('student_id','text',array(
                'label' => 'شماره دانشجویی',
                'max_length' => 12,
                'required' => false,
                'attr' => array(
                    'placeholder' => 'شماره دانشجویی خود را وارد کنید',
                )
            ))

            ->add('grade','choice',array(
                'label' => 'مقطع تحصیلی',
                'placeholder' => 'مقطع تحصیلی خود را انتخاب کنید',
                'choices' => array(
                    1=> 'دکترا' , 2 => 'فوق لیسانس' ,3 => 'لیسانس', 4 => 'فوق دیپلم', 5 => 'دیپلم', 6=> 'زیر دیپلم'),
                'multiple' => false,
            ))

            ->add('national_id','text',array(
                'label' => 'کدملی',
                'max_length' => 10,
               // 'required' => false,
                'attr' => array(
                    'placeholder' => 'کد ملی خود را وارد کنید',
                )
            ))

            ->add('soldiering','choice',array(
                'label' => 'وضعیت سربازی',
                'placeholder' => 'وصعیت سربازی خود را انتخاب کنید',
                'choices' => array(1=> 'معافیت دائم' , 2 => 'پایان خدمت' ,3 => 'معافیت تحصیلی'),
                'multiple' => false,
            ))

            ->add('is_student','choice',array(
                'label' => 'آیا دانشجو هستید؟',
                'placeholder' => 'آیا دانشجو هستید؟',
                'choices' => array(0=> 'خیر' , 1 => 'بله'),
                'multiple' => false,
            ))

            ->add('current_university','text',array(
                'label' =>'دانشگاه محل تحصیل فعلی',
                'attr' => array(
                    'placeholder' => 'دانشگاه محل تحصیل فعلی خود را وارد کنید',
                )
            ))

            ->add('current_field','text',array(
                'label' =>'رشته تحصیلی فعلی',
                'attr' => array(
                    'placeholder' => 'رشته تحصیلی فعلی خود را وارد کنید',
                )
            ))
            ->add('licanse_univesity','text',array(
                'label' =>'دانشگاه محل تحصیل لیسانس',
                'attr' => array(
                    'placeholder' => 'دانشگاه محل تحصیل لیسانس خود را وارد کنید',
                )
            ))
            ->add('licanse_field','text',array(
                'label' =>'رشته تحصیلی لیسانس',
                'attr' => array(
                    'placeholder' => 'رشته تحصیلی لیسانس خود را وارد کنید',
                )
            ))
            ->add('fogh_licanse_univesity','text',array(
                'label' =>'دانشگاه محل تحصیل فوق لیسانس',
                'attr' => array(
                    'placeholder' => 'دانشگاه محل تحصیل فوق لیسانس خود را وارد کنید',
                )
            ))
            ->add('fogh_licanse_field','text',array(
                'label' =>'رشته تحصیلی فوق لیسانس',
                'attr' => array(
                    'placeholder' => 'رشته تحصیلی فوق لیسانس خود را وارد کنید',
                )
            ))
            ->add('phd_univesity','text',array(
                'label' =>'دانشگاه محل تحصیل دکتری',
                'attr' => array(
                    'placeholder' => 'دانشگاه محل تحصیل دکتری خود را وارد کنید',
                )
            ))
            ->add('phd_field','text',array(
                'label' =>'رشته تحصیلی دکتری',
                'attr' => array(
                    'placeholder' => 'رشته تحصیلی فعلی دکتری را وارد کنید',
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'swdt\UserBundle\Entity\Karjoo',
            'validation_groups' => array(0 => 'Registration', 1 => 'Default'),
            'error_bubbling' => true,
        ));
    }

}
