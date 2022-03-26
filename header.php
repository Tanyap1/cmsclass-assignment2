<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--call in bootstrap-->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/875fa8d6ec.js" crossorigin="anonymous"></script>
    <title></title>

    <?php wp_head();?>

</head>

<body <?php body_class('');?>>
    
<header>
<div class="container d-flex align-items-center justify-content-between">
    <a href="<?php bloginfo('url');?>">
    <img src="<?php bloginfo('template_directory');?>/images/book.jpg" class="img-fluid logo">
</a>
<?php
wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-menu d-flex'
    )
    );?>


</div>

</header>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:80px"><b>Welcome </b></h1>
    <h3>This is our Book Store </h3>
  <a href="http://localhost/assignment2/wordpress/shop/">  <button class="btn1">Shop Now</button></a>
  </div>
</div>

