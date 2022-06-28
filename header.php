<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;400&family=Itim&family=Montserrat:wght@300;400;500;700;800&family=Roboto:wght@300;900&family=Ubuntu:wght@300&family=Zilla+Slab:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>

    <?php wp_body_open() ?>
    <?php get_template_part('template-parts/modules/module', 'navbar'); ?>

    <main>
