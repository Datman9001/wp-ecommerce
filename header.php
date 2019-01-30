<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url');?>">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>

<body class="blue-grey lighten-5">
    <header>
        <nav class="white ">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="#" class="brand-logo">
                        <?php 
                            if(function_exists('the_custom_logo')){ 
                                the_custom_logo();

                            }
                            ?>

                        <!-- <img src="./img/logo.jpg" class="reponsive-img" alt=""> -->
                    
                    
                    </a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down nav-menu-links">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary',
                         
                        )); 
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="section">
        <div class="row center">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h2>Discount clothing</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni dicta nobis perspiciatis
                            dolorem vero, labore beatae suscipit maxime ut sit molestiae magnam?</p>
                    </div>
                    <div class="card-action">
                        <a class="red btn-large"><i class="material-icons left">cloud</i> Start Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </section>