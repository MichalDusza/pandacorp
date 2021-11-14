<!DOCTYPE html>
<html
    <?php if (defined('ICL_LANGUAGE_CODE') && strlen(ICL_LANGUAGE_CODE) == "2") {
        echo ' lang="' . strtolower(ICL_LANGUAGE_CODE) . '"';
    } else {
        echo ' lang="pl"';
    } ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo TMPL_FOLDER_URI; ?>/style.css?v=<?php echo THEME_VERSION; ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo TMPL_FOLDER_URI; ?>/media.css?v=<?php echo THEME_VERSION; ?>"/>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo TMPL_FOLDER_URI; ?>/css/add.css?v=<?php echo THEME_VERSION; ?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php
global $add_body_class;
$add_classess = '';
if (!empty($add_body_class)) {
    $add_classess .= $add_body_class;
}



?>
<body data-home="<?php echo HOME_LINK; ?>" <?php body_class($add_classess); ?>>

<!--<div class="body-cont">-->

<div id="nav">
    <div class="container">
        <div class="nav__container">
            <a href="<?php echo HOME_LINK; ?>" class="nav__logo">
                <img src="<?php the_field('navbar_logo') ?>" alt="navbar logo">
            </a>
            <div class="nav__menu-wrapper">
                <?php
                $menu_args = array(
                    'menu_class'  => 'nav__main-menu',
                    'container' => false,
                    'theme_location' => 'header',
                    'container_class' => 'main-menu',
                    'echo'        => false,
                );
                echo wp_nav_menu($menu_args);
                ?>
                <div class="nav__burger-menu">
                    <div class="nav__burger">
                        <div class="nav__burger--line"></div>
                        <div class="nav__burger--line"></div>
                        <div class="nav__burger--line"></div>
                        <div class="nav__burger--line"></div>
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">-->
<!--                            <rect width="24" height="1" fill="#363942"/>-->
<!--                            <rect y="5" width="24" height="1" fill="#363942"/>-->
<!--                            <rect y="10" width="24" height="1" fill="#363942"/>-->
<!--                            <rect y="15" width="12" height="1" fill="#363942"/>-->
<!--                        </svg>-->
                    </div>
                    <div class="nav__dropdown dropdown">
                        <?php
                        $menu_args_dropdown = array(
                            'menu_class'  => 'dropdown__menu',
                            'container' => false,
                            'menu' => 'Dropdown Menu',
                            'theme_location' => 'header',
                            'container_class' => 'dropdown-menu',
                            'echo'        => false,
                        );
                        echo wp_nav_menu($menu_args_dropdown);
                        ?>
                        <?php
                        $menu_args_dropdown_mobile = array(
                            'menu_class'  => 'dropdown__menu--mobile',
                            'container' => false,
                            'menu' => 'mobile menu',
                            'theme_location' => 'header',
                            'container_class' => 'dropdown-menu--mobile',
                            'echo'        => false,
                        );
                        echo wp_nav_menu($menu_args_dropdown_mobile);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<main>
