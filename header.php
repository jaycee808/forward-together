<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div class="image-overlay">
    <nav class="navbar">
        
        <!-- logo with image -->
        <!-- <div class="logo">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-big.png" alt="Logo">
            </a>
        </div> -->

        <div class="logo">
            <a href="<?php echo site_url(); ?>">
                4WARD 2GETHER
            </a>
        </div>

        <div class="nav-menu">
            <ul>
                <li <?php if (is_page('about')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
                <li <?php if (is_page('news')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/news'); ?>">News</a></li>
                <li <?php if (is_page('team')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/team'); ?>">The Team</a></li>
                <li <?php if (is_page('contact')) echo 'class="current-page"'; ?>><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
            </ul>
        </div>
    </nav>
