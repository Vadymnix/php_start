<?php

/**
 * изменил несколько класс, добавил $id товара, чтобы правильно в корзине размещать
 */
class Product
{
    private int $id;
    private string $title;
    private float $price;
    private array $components = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
    * @param string $title
    * @param float $price
    */
    public function __construct(int $id, string $title, float $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    /**
    * @return string
    */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
    * @param string $title
    */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
    * @return float
    */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
    * @param float $price
    */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
    * @return Product
    */
    public function getComponents(): array
    {
        return $this->components;
    }

    /**
    * @param Product $components
    */
    public function setComponents(Product $component): void
    {
        if(count($this->components)) {
            $this->price += $component->price;
        } else {
            $this->price = $component->price;
        }

        $this->components[] = $component;
    }
}