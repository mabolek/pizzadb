<?php

declare(strict_types=1);

namespace Benni\Pizzadb\Controller;

use Benni\Pizzadb\Domain\Repository\PizzaRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Attribute\AsController;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

#[AsController]
class PizzaController extends ActionController
{
    public function __construct(
        private readonly PizzaRepository $pizzaRepository,
    ) {}

    public function listAction(): ResponseInterface
    {
        $this->view->assign('pizzas', $this->pizzaRepository->findAll());
        return $this->htmlResponse();
    }
}
