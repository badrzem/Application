<?php

namespace TS\ContactBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('telephone','text')
            ->add('sexe','choice',array(
                'label' => false,
                'multiple' => false,
                'expanded' => true,
                'choices' => array(
                    'Homme' => 'Homme',
                    'Femme' => 'Femme'
                )
            ))
            ->add('email','email')
            ->add('adresse','text')
            ->add('siteweb','text')
            ->add('enregistrer','submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TS\ContactBundle\Entity\Contact'
        ));
    }
    
    /** 
     * 
     *  
     * @return string 
     */ 
    public function getName() 
    { 
        return 'ts_contactbundle_contact'; 
        
    }
}
