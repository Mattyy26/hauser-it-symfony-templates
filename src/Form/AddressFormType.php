<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\Cities;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class AddressFormType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('street', TextareaType::class, ['required' => true,
                'row_attr' => [
                    'class' => 'form-group is-invalid'],

                'attr' => ['maxlength' => 4, 'novalidate' => 'novalidate']])
            ->add('zip', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Name'
                ],
                'row_attr' => [
                    'class' => 'form-group is-invalid',
                ],
                'constraints' => new Length(['min' => 3])],
            )
            ->add('cities', EntityType::class, [
                'placeholder' => '--- Vyber mesto ---',
                'class' => Cities::class,
                'choice_label' => 'name',
                'required' => true,
                'label' => 'Mesto',
                'row_attr' => [
                    'class' => 'form-group is-invalid',
                ],
                'attr' => ['maxlength' => 4]])


            ->add('save', SubmitType::class);//->setDataMapper($this);


    }


    /**
     * @param OptionsResolver $resolver
     * @return void
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
            // enable/disable CSRF protection for this form
            'csrf_protection' => true,
            // the name of the hidden HTML field that stores the token
            'csrf_field_name' => '_token',
            // an arbitrary string used to generate the value of the token
            // using a different string for each form improves its security
            'csrf_token_id' => 'task_item',
        ]);
    }

}

