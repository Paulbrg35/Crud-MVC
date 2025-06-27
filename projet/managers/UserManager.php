<?php

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(): array
    {
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_CLASS, User::class);
    }

    public function findOneById(int $id): ?User
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $query->execute([$id]);
        $query->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $query->fetch() ?: null;
    }

    public function findOneByEmail(string $email): ?User
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $query->execute([$email]);
        $query->setFetchMode(PDO::FETCH_CLASS, User::class);
        return $query->fetch() ?: null;
    }

    public function insert(User $user): void
    {
        $query = $this->db->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)");
        $query->execute([
            $user->getFirstname(),
            $user->getLast_name(),
            $user->getEmail()
        ]);
        $user->setId((int)$this->db->lastInsertId());
    }

    public function update(User $user): void
    {
        if (!$user->getId()) {
           }

        $query = $this->db->prepare("UPDATE users SET first_name = ?, last_name = ?, email = ? WHERE id = ?");
        $query->execute([
            $user->getFirstname(),
            $user->getLast_name(),
            $user->getEmail(),
            $user->getId()
        ]);
    }

    public function delete(User $user): void
    {
        if (!$user->getId()) {
        }

        $query = $this->db->prepare("DELETE FROM users WHERE id = ?");
        $query->execute([$user->getId()]);
    }
}