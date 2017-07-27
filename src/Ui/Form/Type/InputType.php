<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 * @author Elao <contact@elao.com>
 */

namespace Ui\Form\Type;

use Application\Command\InputCommand;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InputType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'size', IntegerType::class, [
                'required' => true,
            ])
            ->add(
                'cars', IntegerType::class, [
                'required' => true,
            ])
            ->add(
                'date_start', DateType::class, [
                'required' => true,
            ])
            ->add(
                'date_end', DateType::class, [
                'required' => true,
            ])
            ->add('submit', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InputCommand::class
        ]);
    }
}
