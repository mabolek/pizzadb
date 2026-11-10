<?php

declare(strict_types=1);

namespace Benni\Pizzadb\Domain\Repository;

use Benni\Pizzadb\Domain\Model\Pizza;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

/**
 * @extends Repository<Pizza>
 */
class PizzaRepository extends Repository
{
    protected $defaultOrderings = [
        'sorting' => QueryInterface::ORDER_ASCENDING,
    ];
}
