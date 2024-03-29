<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::admin'], [], [['text', '/admin']], [], [], []],
    'app_admin_send_newsletter' => [[], ['_controller' => 'App\\Controller\\AdminController::sendNewsletter'], [], [['text', '/admin/sendNewsletter']], [], [], []],
    'refait' => [[], ['_controller' => 'App\\Controller\\AdminController::refait'], [], [['text', '/admin/refait']], [], [], []],
    'gros_win' => [[], ['_controller' => 'App\\Controller\\AdminController::groswinAction'], [], [['text', '/admin/groswin']], [], [], []],
    'gros_lot' => [[], ['_controller' => 'App\\Controller\\AdminController::groslotAction'], [], [['text', '/admin/groslot']], [], [], []],
    'Mails' => [[], ['_controller' => 'App\\Controller\\AdminController::dowloadletter'], [], [['text', '/admin/dowloadMails']], [], [], []],
    'users' => [[], ['_controller' => 'App\\Controller\\AdminController::usersAction'], [], [['text', '/admin/users']], [], [], []],
    'employes' => [[], ['_controller' => 'App\\Controller\\AdminController::employesAction'], [], [['text', '/admin/employes']], [], [], []],
    'deleteparticipant' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteparticipantAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/delete']], [], [], []],
    'participanttouser' => [['id'], ['_controller' => 'App\\Controller\\AdminController::participanttouserAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/participanttouser']], [], [], []],
    'employetouser' => [['id'], ['_controller' => 'App\\Controller\\AdminController::employetouserAction'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/employetouser']], [], [], []],
    'newgame' => [[], ['_controller' => 'App\\Controller\\AdminController::newgameAction'], [], [['text', '/newgame']], [], [], []],
    'app_employe' => [[], ['_controller' => 'App\\Controller\\EmployeController::employe'], [], [['text', '/employe']], [], [], []],
    'gains' => [[], ['_controller' => 'App\\Controller\\EmployeController::gains'], [], [['text', '/gains']], [], [], []],
    'app_code_send' => [[], ['_controller' => 'App\\Controller\\EmployeController::codeSend'], [], [['text', '/employe/codeSend']], [], [], []],
    'app_check_customer' => [[], ['_controller' => 'App\\Controller\\EmployeController::employeCheckuser'], [], [['text', '/employe/checkuser/checkcode']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'mail' => [[], ['_controller' => 'App\\Controller\\HomeController::sendmailAction'], [], [['text', '/mail']], [], [], []],
    'histoire' => [[], ['_controller' => 'App\\Controller\\HomeController::histoireAction'], [], [['text', '/histoire']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contactAction'], [], [['text', '/contact']], [], [], []],
    'mentions' => [[], ['_controller' => 'App\\Controller\\HomeController::mentionsAction'], [], [['text', '/mentions']], [], [], []],
    'app_bienvenu' => [[], ['_controller' => 'App\\Controller\\HomeController::bienvenu'], [], [['text', '/bienvenu']], [], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\HomeController::profilAction'], [], [['text', '/profil']], [], [], []],
    'cgv' => [[], ['_controller' => 'App\\Controller\\HomeController::cgvAction'], [], [['text', '/cgv']], [], [], []],
    'app_code_cadeau_check' => [[], ['_controller' => 'App\\Controller\\HomeController::codecadeauCheck'], [], [['text', '/codecadeau/check']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'addemploye' => [[], ['_controller' => 'App\\Controller\\RegistrationController::addemploye'], [], [['text', '/admin/addemploye']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
