<?php

namespace swdt\KaryabBundle\Form;

use swdt\KaryabBundle\Entity\UserSkill;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class userSkillsFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tag','entity',array(
                'class' => 'swdt\KaryabBundle\Entity\SkillTag',
                'choice_label'=> 'name',
                'label'=>'تگ مهارت'
            ))
            ->add('level','integer',array(
                'label' => 'میزان مهارت',
                'max_length' => 5,
                'attr' => array(
                    'min' => 1,
                    'max' => 5,
                )
            ))
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'swdt\KaryabBundle\Entity\UserSkill'
        ));
    }

    public function getName()
    {
        return 'swdt_karyab_bundleuser_skills_form_type';
    }
}
