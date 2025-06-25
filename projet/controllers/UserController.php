<?php

class UserController
{
    public function list()
    {
        $pageTitle = 'Liste des utilisateurs';
        $template = 'user_list';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function show()
    {
        $pageTitle = 'Détail d\'un utilisateur';
        $template = 'user_show';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function create()
    {
        $pageTitle = 'Créer un utilisateur';
        $template = 'user_create';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function checkCreate()
    {
        $pageTitle = 'Validation de création';
        $template = 'user_check_create';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function update()
    {
        $pageTitle = 'Modifier un utilisateur';
        $template = 'user_update';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function checkUpdate()
    {
        $pageTitle = 'Validation de modification';
        $template = 'user_check_update';
        require __DIR__ . '/../templates/layout.phtml';
    }

    public function delete()
    {
        $pageTitle = 'Supprimer un utilisateur';
        $template = 'user_delete';
        require __DIR__ . '/../templates/layout.phtml';
    }
}