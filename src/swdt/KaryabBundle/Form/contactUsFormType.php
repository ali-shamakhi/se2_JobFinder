<?php


namespace swdt\KaryabBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use swdt\KaryabBundle\Form\userSkillsFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class contactUsFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text',array(
                'label' => 'نام کامل',
                'attr' => array(
                    'placeholder' => '')
            ))

            ->add('email','email',array(
                'label' => 'پست الکترونیک',
                'attr' =>array(
                    'placeholder' => '')
            ))
            ->add('subject','text',array(
                'label' => 'موضوع',
                'required' => false,
                'attr' => array(
                    'placeholder' => '')
            ))
            ->add('message','textarea',array(
                'label' => 'متن پیام',
                'attr' => array(
                    'placeholder' => '')
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'swdt\KaryabBundle\Entity\Contacts'
        ));
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'mz_new_contactUs';
    }

}