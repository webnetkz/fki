<?php 

$description = 'Фабрика кованых изделий – это предприятие, которое специализируется на изготовлении кованых изделий. В ассортименте такие изделия, как: Кованые ворота: элегантное и практичное решение для оформления входа в дом или участок.Кованые ограждения: отличное решение для ограждения территорий, парковок, садов и т.д.Кованые заборы: эффективная защита от сторонних глаз и шума.Кованые мебельные изделия: стулья, столы, кресла и т.д.';

if(!isset($title) || empty($title)) {
    $title = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./public/img/logo.png" type="image/x-icon">
    <meta name="description" content="<?=$description;?>">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/mobile.css">

    <meta name="google-site-verification" content="oRitUmPWEBGI1ZY97iPo2KbM81HDQXSmR1aReTmjPlo" />
</head>
<body>
    <header>
        <a href="index" class="logo">
            <img src="./public/img/logo.png" alt="logotype of fki">
        </a>
        <menu>
            <a href="index#" class="active">Главная</a>
            <a href="гибка-металла-в-алматы">Гибка</a>
            <a href="кованые-ворота">Ворота</a>
            <a href="кованые-изделия-в-алматы">Изделия</a>
            <a href="кованая-кровать-купить">Кровати</a>
            <a href="кованые-перила-в-алматы">Перила</a>
            <!-- <a href="кованые-элементы-в-алматы">Элементы</a> -->
            <a href="index#portfolio">Галерея работ</a>
            <!-- <a href="price_2024.xls" download>Скачать прайс</a> -->
            <a href="index#feedback">Контакты</a>
        </menu>
        <span class="menu-icon" onclick="showCloseMenu(this)">
            <img src="./public/img/icons/menu.png" alt="menu image">
        </span>
    </header>

<script src="./public/js/menu.js"></script>