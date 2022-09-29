<?php
require_once ("User.php");

class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone;
    private int $priority = 0;
    private bool $isDone = false;
    private User $user;

    public function __construct(User $user, string $description, int $priority) {
        $this-> description = $description;
        $this->priority = $priority;
        $this->user = $user;
        $this->dateCreated = $this->dateUpdated = new DateTime();
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
        if(strlen($description) < 5) {
            throw new InvalidArgumentException("description too short");
        }

        $this->description = $description;
        $this->dateUpdated = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {

        return $this->dateUpdated;
    }

    /**
     * @param DateTime $dateUpdated
     */
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        if($dateUpdated <= $this->dateUpdated || $dateUpdated < $this->dateCreated) {
            throw new InvalidArgumentException("wrong time");
        }
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return DateTime|null
     */
    public function getDateDone(): ?DateTime
    {
        return $this->dateDone;
    }

    /**
     * @param DateTime|null $dateDone
     */
    public function setDateDone(?DateTime $dateDone): void
    {
        if($dateDone <= $this->dateUpdated || $dateDone < $this->dateCreated) {
            throw new InvalidArgumentException("wrong time");
        }
        $this->dateDone = $dateDone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        if( $priority < 0  ||  $priority > 10) {
            throw new InvalidArgumentException("must be more zero and less than 10");
        }
        $this->priority = $priority;
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
    public function markAsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
        $this->dateUpdated = $this->dateDone = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}