<?php

class Router
{
    public function run()
    {
        $route = $_GET['route'] ?? '';

        switch ($route) {
            case 'show_user':
                // Appel à UserController::show()
                break;

            case 'create_user':
                // Appel à UserController::create()
                break;

            case 'check_create_user':
                // Appel à UserController::checkCreate()
                break;

            case 'update_user':
                // Appel à UserController::update()
                break;

            case 'check_update_user':
                // Appel à UserController::update()
                break;

            case 'delete_user':
                // Appel à UserController::delete()
                break;

            default:
                // Appel à UserController::list()
                break;
        }

    }
}