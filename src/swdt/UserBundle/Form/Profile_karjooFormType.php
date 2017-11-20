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
use swdt\KaryabBundle\Form\userSkillsFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class Profile_karjooFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('skills','Symfony\Component\Form\Extension\Core\Type\CollectionType',array(
                'label' => ' ',
                'entry_type' => new userSkillsFormType(),
                'allow_add' => true,
                'allow_delete' => true,
            ))
            ->add('karjoo',new Profile_karjooExtraFormType())
        ;
    }

//    public function getParent()
//    {
//        return 'swdt\UserBundle\Form\FOS\ProfileFormType';
//
//    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'swdt\UserBundle\Entity\User',
            'csrf_token_id' => 'profile',
            // BC for SF < 2.8
            'intention'  => 'profile',
            'validation_groups' => array(0 => 'Profile', 1 => 'Default',2=> 'karjooSkill'),
        ));
    }


    // BC for SF < 3.0
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'user_profile_karjoo';
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);

        $resolver->setDefaults(array('cascade_validation' => true,));
    }

}
