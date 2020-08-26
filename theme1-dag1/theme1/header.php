<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet" >
    <link href="style.css" rel="stylesheet" >
    <?php wp_head(); ?>
</head>
<body>

<div class="container">

        <div class="row">

          <div class="col-lg-12">
            <header>
              <div class="website-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
              <span class="tagline"><?php bloginfo('description'); ?></span>
            </header>
