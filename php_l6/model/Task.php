<?php
class Task {
    private bool $isDone;
    private string $description;

    /**
     * @param string $description
     */
    public function __construct(string $description, bool $isDone)
    {
        $this->description = $description;
        $this->isDone = $isDone;
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