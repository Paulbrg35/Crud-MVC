<?php

class UserController
{
    public function list()
    {
        $pageTitle = 'Liste des utilisateurs';
        $template = 'list';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function show()
    {
        $pageTitle = 'Détail d\'un utilisateur';
        $template = 'show';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function create()
    {
        $pageTitle = 'Créer un utilisateur';
        $template = 'create';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function checkCreate()
    {
        $pageTitle = 'Validation de création';
        $template = 'check_create';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function update()
    {
        $pageTitle = 'Modifier un utilisateur';
        $template = 'update';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function checkUpdate()
    {
        $pageTitle = 'Validation de modification';
        $template = 'check_update';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function delete()
    {
        $pageTitle = 'Supprimer un utilisateur';
        $template = 'delete';
        require __DIR__ . '/../templates/layout.phtml';
    }
}