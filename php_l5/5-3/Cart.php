<?php
class Product {
    private string $title;
    private float $price;
    private array $components = [];

    /**
     * @param string $title
     * @param float $price
     */
    public function __construct(string $title, float $price)
    {
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
    public function getComponents(): Product
    {
        return $this->components;
    }

    /**
     * @param Product $components
     */
    public function setComponents(Product $components): void
    {
        $this->components = $components;
    }
}