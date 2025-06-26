<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = 'db.3wa.io';
        $dbname = 'paulbourgeon_crud_mvc';
        $username = 'paulbourgeon';
        $password = '1e737408cf748bbd6ec9667085ab9238';

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}