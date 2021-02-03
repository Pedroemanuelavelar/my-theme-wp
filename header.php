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
<header>
    <div class="header">
        <i class="fal fa-badge-check"></i><span class="bg-content-badge">#1 Editiors Choice App of 2020</span>
        <h1 class="principal-title">Best app for your</br>
modern lifestyle</h1>
    </div>
</header>

    
