<!DOCTYPE html>

<html lang="<?php get_language_attributes() ?>">

<head>

    <link rel="icon" href="<?= site_icon_url() ?>" type="image/x-icon">

    <meta charset="<?php bloginfo('charset') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>

</head>

<body <?php body_class(['d-flex', 'flex-column', 'vh-100']) ?>>

    <?php
    //for injecting scripts after body tag eg scripts for google analtyics
    wp_body_open();

    get_template_part('template-parts/header/navigation');
