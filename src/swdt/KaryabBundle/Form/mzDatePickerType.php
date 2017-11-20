<?php

namespace swdt\KaryabBundle\Form;

use swdt\KaryabBundle\Form\Transformer\mzDateTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class mzDatePickerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new mzDateTransformer());
    }
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'attr'=>
            array(
                'widget-type'=>'mz-persian-datePicker',
            )
        ));
    }
    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'mz_persian_dateTime';
    }
}
