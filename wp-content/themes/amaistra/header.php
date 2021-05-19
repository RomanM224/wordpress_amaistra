<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?> 
</head>

<body style="background-image:url(<?php echo get_template_directory_uri() . '/assets/images/background.jpg' ?>)">
    <div class="page">
        <header style="background-image:url(<?php echo get_template_directory_uri() . '/assets/images/header_img.jpg' ?>)">
            <div class="buttonBars">
                <div class="buttonBar1"></div>
                <div class="buttonBar2"></div>
                <div class="buttonBar3"></div>
            </div>
            <nav class="navbar_short_screen">
                <ul class="nav_list_short ">
                    <li> <a href="{{ route('index') }}" class="navbar_item_short">Главная</a></li>
                    <li> <a href="{{ route('orders') }}" class="navbar_item_short">Услуги</a></li>
                    <li> <a href="{{ route('showAllPosts') }}" class="navbar_item_short">Новости</a></li>
                    <li> <a href="{{ route('showAllReview') }}" class="navbar_item_short">Отзывы</a></li>
                    <li> <a href="{{ route('contacts') }}" class="navbar_item_short">Контакты</a></li>
                
                </ul>
            </nav>
            <div class="logo_block">
                <a href="<?php bloginfo('url') ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png' ?>" alt="">
                </a>
                
            </div>
            <nav class="navbar_big_screen">
                <!-- <ul class="nav_list"> -->
                <?php wp_nav_menu(array(
                'theme_location' => 'top',
                'container' => null,
                'menu_class' => 'nav_list',
                'menu_id' => 'nav',
      
            )); ?>
                    <!-- <li> <a href="{{ route('index') }}" class="navbar_item">Главная</a></li>
                    <li> <a href="{{ route('orders') }}" class="navbar_item">Услуги</a></li>
                    <li> <a href="{{ route('showAllPosts') }}" class="navbar_item">Новости</a></li>
                    <li> <a href="{{ route('showAllReview') }}" class="navbar_item">Отзывы</a></li>
                    <li> <a href="{{ route('contacts') }}" class="navbar_item">Контакты</a></li>                    
                </ul> -->
            </nav>

        </header>