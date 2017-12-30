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
use am\KaryabBundle\Entity\Advertise;
use am\KaryabBundle\Form\userSkillsFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class Profile_karjooExtraFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grade','choice',array(
                'label' => 'مقطع تحصیلی',
                'choices' => array(
                    1=> 'دکترا' , 2 => 'فوق لیسانس' ,3 => 'لیسانس', 4 => 'فوق دیپلم', 5 => 'دیپلم', 6=> 'زیر دیپلم'),
                'multiple' => false
            ))
            ->add('soldiering','choice',array(
                'label' => 'وضعیت سربازی',
                'choices' => array(1=> 'معافیت دائم' , 2 => 'پایان خدمت' ,3 => 'معافیت تحصیلی'),
                'multiple' => false
            ))
             ->add('resumeFile','file',array(
                'label' => 'فایل رزومه',
                 'required'=>false,
            ))
            ->add('file','file',array(
                'label' => 'عکس پروفایل',
                'required'=>false
            ))
            ->add('coOperation','choice',array(
                'label' => 'وضعیت استخدامی',
                'choices' => Advertise::getCoOperationChoices(),
                'multiple' => true,
//                'expanded'=>true,
            ))
            ->add('about','textarea',array(
                'required'=>false,
                'attr' => array(
                    'placeholder' => '',
                    'rows' => '3')
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'am\UserBundle\Entity\Karjoo',
            'error_bubbling' => true,

        ));
    }

}
