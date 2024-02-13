<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/wp-content/themes/enzo/style.css">
    <?php 
    wp_head();
    ?>
</head>
<body>
    <header>
      
     <?php 

       wp_nav_menu(
        array(
            'menu' => 'primary' , 
            'container' => '' , 
            'theme_location' => 'primary'
        )
       );

     ?>


     <section class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><?php echo get_blogInfo('name'); ?></h3>
                <h4><?php the_title(); ?></h4>
                <?php 
                   if(function_exists('the_custom_logo')) { 
                      $custom_logo_id = get_theme_mod('custom_logo');
                      $logo = wp_get_attachment_image_src($custom_logo_id);
                   };
                ?>
                <img src="<?php echo $logo[0] ?>" alt="">
                </div>
                <div class="col">
                    <nav>
                        <ul>
                            <li>Test1</li>
                            <li>Test2</li>
                            <li>Test3</li>
                            <li>Test4</li>
                        </ul>
                    </nav>
                </div>
                <?php 
                dynamic_sidebar('sidebar-1');
                ?>
            </div>
        </div>
     </section>
     <style>
        header { 
            width:100%;
            background-color:#f3f3fa;
        }
        header .header { 
            display:block;
        }
        header .header .row { 
            display: flex;
            justify-content: space-between;
            align-items: center;
            column-gap: 30px;
            padding: 20px;
        }
        header .header .row .col { 
            flex-basis:50%;
        }
        header .header .row .col ul { 
            display:flex;
            align-items:center;
            column-gap:20px;
        }
        header .header .row .col ul li { 
            list-style-type:none;
        }
     </style>
</header>