<?php
class Task {
    private int $id;
    private bool $isDone;
    private string $description;

    /**
     * @param string $description
     */
    public function __construct(int $id, string $description, bool $isDone)
    {
        $this->id = $id;
        $this->description = $description;
        $this->isDone = $isDone;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @param bool $isDone
     */
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}