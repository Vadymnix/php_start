<?php
class User {
    private string $username;
    private string $email;
    private string $sex;
    private bool $isActive = false;
    private ?int $age;


    public function __construct(string $username, string $email, string $sex)
    {
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
    }

    /**
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int|null $age
     */
    public function setAge(?int $age): void
    {
        if($age  < 15) {
            throw new InvalidArgumentException("too younger");
        }

        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        if (strlen($username) < 3) {
            throw new InvalidArgumentException("Name too short");
        }
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        if (strlen($email) < 3) {
            throw new InvalidArgumentException("email is not valid");
        }
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }
}