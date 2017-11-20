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

class ChangePasswordExtraFormType_karjoo extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('website','text',array(
                'label' => 'وبسایت',
                'required' => false,
                'attr' => array(
                    'placeholder' => 'وبسایت خود را وارد کنید',
                )

            ))
            ->add('student_id','text',array(
                'label' => 'شماره دانشجویی',
                'max_length' => 12,
                'required' => false,
                'attr' => array(
                    'placeholder' => 'شماره دانشجویی خود را وارد کنید',
                )
            ))
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'swdt\UserBundle\Entity\Karjoo',
            'error_bubbling' => true,
        ));
    }
}
