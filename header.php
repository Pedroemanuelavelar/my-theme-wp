<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"> <!-- Function nativa do wp, que verifica se na raiz do projeto existe um arquivo .css, se existir ele pega e coloca-->

    <!-- Function que carrega todos os scripts necessários do wp, jquery etc... -->
    <?php wp_head(); ?>
</head>
<body>

<h2>Teste</h2>
    
