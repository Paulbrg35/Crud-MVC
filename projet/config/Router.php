<?php

$route = $_GET['route'] ?? 'default';

switch($route){
    case 'show_user':
        $template = 'users/show';
        break;
        
    case 'create_user':
        $template = 'users/create';
        break;
        
    case 'check_create_user':
        $template = '';
        break;
        
    case 'update_user':
        $template = 'users/update';
        break;
        
    case 'check_update_user':
        $template = '';
        break;
        
    default:
        $template = 'users/list';
        break;
}

require '../templates/layout.phtml';