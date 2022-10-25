<?php
require_once ("User.php");

class UserProvider {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function registerUser(User $user, string $plainPassword):?User {
        $statement = $this->pdo->prepare(
            'INSERT INTO users(name, username, password) VALUES(:name, :username, :password)'
        );

        $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUsername(),
            'password' => md5($plainPassword)
        ]);

        return $this->getByUsernameAndPassword($user->getUsername(), $user->getName(), $plainPassword);
    }

    public function getByUsernameAndPassword(string $username, string $name, string $password): ?User
    {
        //ЗАЧЕМ ЛИМИТ 1 ? !!!!
        $statement = $this->pdo->prepare(
            'SELECT name, username 
                   FROM users
                   WHERE username = :username AND password = :password LIMIT 1'
        );
        $statement->execute([
           'username' => $username,
           'password' => md5($password),
        ]);

        return $statement->fetchObject(User::class, [$username, $name])?:null;
    }
}
