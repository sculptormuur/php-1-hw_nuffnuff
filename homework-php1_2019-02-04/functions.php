<?php
/* 1.1. Функция getUsersList() пусть возвращает массив всех пользователей и хэшей их паролей
 * 1.2. Функция existsUser($login) проверяет - существует ли пользователь с заданным логином?
 * 1.3. Функция сheckPassword($login, $password) пусть возвращает true тогда, когда
 * существует пользователь с указанным логином и введенный им пароль прошел проверку
 * 2. Добавьте функцию getCurrentUser() которая возвращает либо имя вошедшего
 * на сайт пользователя, либо null
 * */

function getUsersList()
{
    return [
        'Демьян Варфоломеевич' => '$2y$10$xO3TRiU2JZ7xPZb2m1yq9ef1cQ.vfWd9Rs84ApWoDUGFUpds87pvO',
        'Глаша' => '$2y$10$EDSWCYKk08exosl1grlCEuqWTMnnxsFYIc7N1ZBQIYsi4R.Cj.2bm',
        'Афанасий' => '$2y$10$tYjRDQPW3nptcR1oZxIg.uzdCDp4oNdI3nTo7SUrtXK0SBJhixgBa',
        '_nightmare666_' => '$2y$10$D3hyVFoYI3hwiWfBYpLDreoX9wE8ykKR1jkbjf8Dd.hOptAc/oqzi',
        'Пантелеимон' => '$2y$10$Uc25qQdqCrVaTKpxNqA5H.vxYkvGgIGJpTFa56REMNBN3MuAR16DK',
        'Купава' => '$2y$10$YR9.M1LUCSTpRIb6d603w.jDAED9W3/HsqvXeG1WEDZTFrHIB4w6m',
        'ule4ka777' => '$2y$10$2Ayp9E1Xkb0cPZJ9Pg.RPOkZFR6wlsC02873JzdDGLyfXbCaKnzzO',
        'Кузьма' => '$2y$10$LcGV2MXrVmP4dilOx94z6eNdzfO9lW35Fh3c8IeIKnKqnwWJFRarm',
        '-=МяТнаЯ КоНфЕтКа=-' => '$2y$10$pfosfDbVmRzGEgIu05dNsufkAjW.mx1P0vIbTKj1I6gfoDokCSypi',
        'Доброжир Всеволодович' => '$2y$10$jDu63PqMkNdw9SNvic5kwOv.MiR0bsqrSXenlI9t9Ypmk7iOCOCSi',
        'John Doe' => '$2y$10$JDfec9mDicMHFrPPiMG2buRWCv9p.nGEuC3XbOxwnT9obdTmRtDP.',
        'Иннокентий Шниперсон' => '$2y$10$79rhTYPGdMiMhda7bgvhf.uL0yBRI.J1C0HykhndvSLlt3yDYYljG'
    ];
}

function existsUser($login)
{
    return array_key_exists($login, getUsersList());
}

function checkPassword($login, $password)
{
    if (true != existsUser($login)) {
        return false;
    } else {
        $usersArray = getUsersList();
        if (true != password_verify($password, $usersArray[$login])) {
            return false;
        } else {
            return true;
        }
    }
}

function getCurrentUser() {
    if(!isset($_SESSION['username'])) {
        return null;
    } else {
        return $_SESSION['username'];
    }
}