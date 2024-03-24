<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::admin'], null, null, null, false, false, null]],
        '/admin/sendNewsletter' => [[['_route' => 'app_admin_send_newsletter', '_controller' => 'App\\Controller\\AdminController::sendNewsletter'], null, null, null, false, false, null]],
        '/admin/refait' => [[['_route' => 'refait', '_controller' => 'App\\Controller\\AdminController::refait'], null, null, null, false, false, null]],
        '/admin/groswin' => [[['_route' => 'gros_win', '_controller' => 'App\\Controller\\AdminController::groswinAction'], null, null, null, false, false, null]],
        '/admin/groslot' => [[['_route' => 'gros_lot', '_controller' => 'App\\Controller\\AdminController::groslotAction'], null, null, null, false, false, null]],
        '/admin/dowloadMails' => [[['_route' => 'Mails', '_controller' => 'App\\Controller\\AdminController::dowloadletter'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\AdminController::usersAction'], null, null, null, false, false, null]],
        '/admin/employes' => [[['_route' => 'employes', '_controller' => 'App\\Controller\\AdminController::employesAction'], null, null, null, false, false, null]],
        '/newgame' => [[['_route' => 'newgame', '_controller' => 'App\\Controller\\AdminController::newgameAction'], null, null, null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe', '_controller' => 'App\\Controller\\EmployeController::employe'], null, null, null, false, false, null]],
        '/gains' => [[['_route' => 'gains', '_controller' => 'App\\Controller\\EmployeController::gains'], null, null, null, false, false, null]],
        '/employe/codeSend' => [[['_route' => 'app_code_send', '_controller' => 'App\\Controller\\EmployeController::codeSend'], null, null, null, false, false, null]],
        '/employe/checkuser/checkcode' => [[['_route' => 'app_check_customer', '_controller' => 'App\\Controller\\EmployeController::employeCheckuser'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/mail' => [[['_route' => 'mail', '_controller' => 'App\\Controller\\HomeController::sendmailAction'], null, null, null, false, false, null]],
        '/histoire' => [[['_route' => 'histoire', '_controller' => 'App\\Controller\\HomeController::histoireAction'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contactAction'], null, null, null, false, false, null]],
        '/mentions' => [[['_route' => 'mentions', '_controller' => 'App\\Controller\\HomeController::mentionsAction'], null, null, null, false, false, null]],
        '/bienvenu' => [[['_route' => 'app_bienvenu', '_controller' => 'App\\Controller\\HomeController::bienvenu'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\HomeController::profilAction'], null, null, null, false, false, null]],
        '/cgv' => [[['_route' => 'cgv', '_controller' => 'App\\Controller\\HomeController::cgvAction'], null, null, null, false, false, null]],
        '/codecadeau/check' => [[['_route' => 'app_code_cadeau_check', '_controller' => 'App\\Controller\\HomeController::codecadeauCheck'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/admin/addemploye' => [[['_route' => 'addemploye', '_controller' => 'App\\Controller\\RegistrationController::addemploye'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/delete/([^/]++)(*:29)'
                .'|/participanttouser/([^/]++)(*:63)'
                .'|/employetouser/([^/]++)(*:93)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'deleteparticipant', '_controller' => 'App\\Controller\\AdminController::deleteparticipantAction'], ['id'], null, null, false, true, null]],
        63 => [[['_route' => 'participanttouser', '_controller' => 'App\\Controller\\AdminController::participanttouserAction'], ['id'], null, null, false, true, null]],
        93 => [
            [['_route' => 'employetouser', '_controller' => 'App\\Controller\\AdminController::employetouserAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
