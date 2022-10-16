<?php

require_once './controller.php';

$page = $_GET['page'] ?? 'login';

switch ($page) {
    case 'login':
        do_login();
        break;

    case 'register':
        do_register();
        break;

    case 'not_found':
        do_not_found();
        break;
}