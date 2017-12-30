<?php

namespace am\UserBundle\Form;

use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('captcha',CaptchaType::class,array(
                'label' => 'کد امنیتی',
                'reload' => true,
                'as_url' => true,
                'invalid_message' => 'کد امنیتی وارد شده اشتباه است',
            ))
        ;
    }

    public function getBlockPrefix()
    {
        return 'am_login';
    }

}
