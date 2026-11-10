<?php

declare(strict_types=1);

namespace Benni\Pizzadb\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Pizza extends AbstractEntity
{
    protected string $name = '';
    protected string $ingredients = '';
    protected string $description = '';
    protected float $priceTakeaway = 0.0;
    protected float $priceEatIn = 0.0;

    protected ?FileReference $image = null;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getIngredients(): string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return string[]
     */
    public function getIngredientList(): array
    {
        $lines = preg_split('/\R/', $this->ingredients) ?: [];
        return array_values(array_filter(array_map('trim', $lines), static fn(string $line): bool => $line !== ''));
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPriceTakeaway(): float
    {
        return $this->priceTakeaway;
    }

    public function setPriceTakeaway(float $priceTakeaway): void
    {
        $this->priceTakeaway = $priceTakeaway;
    }

    public function getPriceEatIn(): float
    {
        return $this->priceEatIn;
    }

    public function setPriceEatIn(float $priceEatIn): void
    {
        $this->priceEatIn = $priceEatIn;
    }

    public function getImage(): ?FileReference
    {
        return $this->image;
    }

    public function setImage(?FileReference $image): void
    {
        $this->image = $image;
    }
}
