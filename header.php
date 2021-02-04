<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"> <!-- Function nativa do wp, que verifica se na raiz do projeto existe um arquivo .css, se existir ele pega e coloca-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Function que carrega todos os scripts necessários do wp, jquery etc... -->
    <?php wp_head(); ?>
</head>
<body>
<div id="wrap-menu">
    <nav class="nav-bar">
        <a href="<?php site_url(); ?>" class="logo-menu"><span class="app">App</span>Lab</a>
        <ul class="menu-header">
            <a href="<?php site_url(); ?>">
                <li>Home</li>
            <a>
            <a href="<?php site_url(); ?>">
                <li>Key Features</li> 
            <a>
            <a href="<?php site_url(); ?>">
                <li>Princing</li> 
            <a>
            <a href="<?php site_url(); ?>">
                <li>Testiminial</li> 
            <a>
            <a href="<?php site_url(); ?>">
                <li>FAQ</li>
            <a>
        </ul>
    </nav>
</div>
<header>
    <div class="header">
        <div class="wrap">
            <div class="collum-1">
                <div class="badge-check">
                    badge-check
                </div>
                <p><span class="bg-content-badge">#1 Editiors Choice App of 2020</span></p>
                <h1 class="principal-title">Best app for your</br>
                modern lifestyle</h1>
                <p class="paragraph">Increase productivity with a simple to-do app. app for
                managing your personal budgets.</p>
                <a href="<?php site_url(); ?>" class="button">Try for free</a>
                <a href="<?php site_url(); ?>" class="button-two">Watch demo video</a>
            </div>

            <div class="collum-2">
                <div class="phone-header">
                    
                </div>
            </div>
        </div>
    </div>
</header>
    

    
