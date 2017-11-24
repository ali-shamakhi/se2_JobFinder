<?php


namespace swdt\KaryabBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use swdt\KaryabBundle\Entity\Advertise;
use swdt\KaryabBundle\Form\userSkillsFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;

class advertisesFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
	     ->add('title','text',array(
                'label' => '*عنوان آگهی',
             'attr' => array(
                 'placeholder' => '')
            ))
	    ->add('description','textarea',array(
	        'label' => 'شرح آگهی',
            'attr' => array(
                'placeholder' => '',
                'rows' => '3')
            ))
            ->add('gender','choice',array(
                'label' =>'جنسیت',
                'placeholder' => '',
                'choices' => array(1=> 'مرد' , 2 => 'زن' ,0 => 'مهم نیست'),
                'multiple' => false
            ))
            ->add('grade','choice',array(
                'label' => 'حداقل میزان تحصیلات',
                'placeholder' => '',
                'choices' => array(
                    1=> 'دکترا' , 2 => 'فوق لیسانس' ,3 => 'لیسانس', 4 => 'فوق دیپلم', 5 => 'دیپلم', 6=> 'زیر دیپلم'),
                'multiple' => false
            ))
            ->add('soldiery','choice',array(
                'label' => 'وضعیت سربازی',
                'placeholder' => '',

                'choices' => array(1=> 'معافیت دائم' , 2 => 'پایان خدمت' ,3 => 'معافیت تحصیلی',0=>'مهم نیست'),
                'multiple' => false
            ))
            ->add('coOperation','choice',array(
                'label' => 'وضعیت استخدامی',
                'choices' => Advertise::getCoOperationChoices(),
                'multiple' => true,
//                'expanded'=>true,
            ))
            ->add('skillTags','Symfony\Component\Form\Extension\Core\Type\CollectionType',array(
                'label' => ' ',
                'entry_type' => 'entity',
                'entry_options'=>array(
                    'class' => 'swdt\KaryabBundle\Entity\SkillTag',
                    'choice_label'=> 'name',
                    'label'=>'تگ مهارت'
                ),
                'allow_add' => true,
                'allow_delete' => true,
            ))
            ->add('otherSkills','textarea',array(
                'label' => 'سایرمهارت ها',
                'attr' => array(
                    'placeholder' => '',
                    'rows' => '3'
                )
            ))
            ->add('brochure_file','file',array(
                'label' => 'توضیحات آگهی(عکس یا پی دی اف)',
                'required'=>false,
            ))
            ->add('expireDate',new mzDatePickerType(),array(
                'label'=>"معتبر تا",
                'attr'=>array(
                    'placeholder'=>"01/01/1395",
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=> 'swdt\KaryabBundle\Entity\Advertise'
        ));
    }	

    public function getName()
    {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix()
    {
        return 'mz_new_advertize';
    }

}
