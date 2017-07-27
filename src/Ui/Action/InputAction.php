<?php

/*
 * This file is part of the Wheeliz project.
 *
 * Copyright (C) 2017 Wheeliz
 *
 * @author Elao <contact@elao.com>
 */

namespace Ui\Action;

use Application\Command\InputCommand;
use League\Tactician\CommandBus;
use Ui\Form\Type\InputType;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;

class InputAction
{
    /**
     * @var EngineInterface
     */
    private $engine;

    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * FoobarAction constructor.
     *
     * @param EngineInterface      $engine
     * @param FormFactoryInterface $formFactory
     * @param CommandBus           $commandBus
     * @param RouterInterface      $router
     */
    public function __construct(
        EngineInterface $engine,
        FormFactoryInterface $formFactory,
        CommandBus $commandBus,
        RouterInterface $router
    ) {
        $this->engine      = $engine;
        $this->formFactory = $formFactory;
        $this->commandBus  = $commandBus;
        $this->router      = $router;
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $command = new InputCommand();
        $form = $this->formFactory->create(InputType::class, $command);
        $price = null;

        if ($form->handleRequest($request)->isSubmitted() && $form->isValid()) {
            $price = $this->commandBus->handle($command);
        }

        return $this->engine->renderResponse('form.html.twig', [
            'form' => $form->createView(),
            'price' => $price
        ]);
    }
}
