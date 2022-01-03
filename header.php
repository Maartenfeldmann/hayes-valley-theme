<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Oct 07 2021 04:46:41 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="613e05dbe34aaf84638b4836" data-wf-site="613e05dae34aaf84158b4835">
<head>
  <meta charset="utf-8">
  
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">

<?php
 wp_head();
/* Hier wordt styling geinjecteerd vanuit functions.php
 //<title>Maarten&#x27;s Stunning Project2</title>
*/
?>

<!-- hieronder google styling -->

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Playfair Display:regular,italic","Source Sans Pro:regular,italic,700,700italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>

  
  <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script>
</head>
<body>
  <!--
  <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-out" data-easing2="ease-out" role="banner" class="navbar w-nav">
    <div class="container w-container">
      <?php/*
      if (function_exists('the_custom_logo')) {
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id);
      }*/
      ?>

  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="80"></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end align-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Process</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our design team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Links</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
/*
      <a href="#" class="brand w-nav-brand"><img width="140" loading="lazy" src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="" class="image-2"></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
      
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="" class="nav-menu w-nav-menu">%3$s</ul>'
            )
          );
      ?>
        </nav>
      <?php
      /*
            <nav role="navigation" class="nav-menu w-nav-menu">
              <a href="index.html" aria-current="page" class="nav_link w-nav-link w--current">Homepage</a>
              <a href="/website1/portfolio" class="nav_link w-nav-link">Portfolio</a>
              <a href="process.html" class="nav_link w-nav-link">Our process</a>
              <a href="our-design-team.html" class="nav_link w-nav-link">Our design team</a>
              <a href="contact-us.html" class="nav_link w-nav-link">Contact us</a>
              <a href="#" class="w-nav-link">Link</a>
            </nav>
      */
      ?>
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
        </div>
        -->
<!-- navbar volgens NetNinja in bootstrap 
<nav class="navbar navbar-expand-md fixed-top navbar-light w-nav-menu">
  <div class="container-xxl">
    <a class="navbar-brand ps-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="45">
    </a>
    toggle button for mobile nav 
    <button class="navbar-toggler" type="button" style="-webkit-user-select: text;" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
      <ul class="navbar-nav w-nav-menu">
        <li class="nav-item">
          <a class="nav-link w-nav-link" style="max-width: 728px" aria-current="page" href="#">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link w-nav-link" style="max-width: 728px" aria-current="page" href="#" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link w-nav-link" style="max-width: 728px" aria-current="page" href="#" href="#">Our Process</a>
        </li>
        <li class="nav-item">
          <a class="nav-link w-nav-link" style="max-width: 728px" aria-current="page" href="#" href="#">Our design team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link w-nav-link" style="max-width: 728px" aria-current="page" href="#" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Links</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        -->

<!--Navbar volgens NetNinja in flexbox -->
<!--
<div id="div1bakels">
  <nav id="nav1bakels">
    <ul id="ul1bakels">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Store</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul id="ul2bakels">
      <li><a href="#" class="fb">Facebook</a></li>
      <li><a href="#" class="tw">Twitter</a></li>
    </ul>
  </nav>
</div>
        -->
<!-- de HTML hieronder werkt goed 

<div class="wrapperbakels">
  <nav class="bakels">
    <ul class="ul1">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Store</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="socialbakels">
      <li><a href="#" class="fb">Facebook</a></li>
      <li><a href="#" class="tw">Twitter</a></li>
    </ul>
  </nav>
</div>

        -->
<!-- REAL SHIT BELOW

<div class="wrapperbakels">
  <nav class="bakels">
    <ul class="ul1">
        <a class="navbar-brand ps-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="45">
        </a>
    </ul>

    <ul class="socialbakels">
          <a href="#">Homepage</a>
          <a href="#" href="#">Portfolio</a>
          <a href="#">Our Process</a>
          <a href="#">Our design team</a>
          <a href="#">Contact us</a>
          <a href="#">Links</a>
    </ul>
  </nav>
</div>

  REAL SHIT ABOVE      -->

  <div class="hayes-wrapper">
    <nav class="hayes-menu navbar navbar-expand-lg navbar-light">
    
        <ul class="ul1">
            <a class="navbar-brand ps-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="45">
            </a>
        </ul>

        <!-- toggle button for mobile nav-->

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav-hayes" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav-hayes">

          <?php
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '',
                'theme-location' => 'primary',
                'theme-wrap' => '<ul id="" class="ul2">%3$s</ul>'
              )
            );
          ?>

          <!--

            <ul class="ul2">
                <a href="#">Homepage</a>
                <a href="#">Portfolio</a>
                <a href="#">Our Process</a>
                <a href="#">Our design team</a>
                <a href="#">Contact us</a>
                <a href="#">Links</a>
            </ul>
        </div>

          -->

    </nav>
    </div>
<!--
<div class="wrapperbakels">
  <nav class="bakels">
    <ul class="ul1">
        <a class="navbar-brand ps-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="45">
        </a>
    </ul>

    <ul class="socialbakels">
          <a href="#">Homepage</a>
          <a href="#" href="#">Portfolio</a>
          <a href="#">Our Process</a>
          <a href="#">Our design team</a>
          <a href="#">Contact us</a>
          <a href="#">Links</a>
    </ul>
  </nav>
</div>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="80"></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-end align-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our Process</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Our design team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Links</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
/*
      <a href="#" class="brand w-nav-brand"><img width="140" loading="lazy" src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="" class="image-2"></a>
      <nav role="navigation" class="nav-menu w-nav-menu">
      
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="" class="nav-menu w-nav-menu">%3$s</ul>'
            )
          );
      ?>
        </nav>
      <?php
      /*
            <nav role="navigation" class="nav-menu w-nav-menu">
              <a href="index.html" aria-current="page" class="nav_link w-nav-link w--current">Homepage</a>
              <a href="/website1/portfolio" class="nav_link w-nav-link">Portfolio</a>
              <a href="process.html" class="nav_link w-nav-link">Our process</a>
              <a href="our-design-team.html" class="nav_link w-nav-link">Our design team</a>
              <a href="contact-us.html" class="nav_link w-nav-link">Contact us</a>
              <a href="#" class="w-nav-link">Link</a>
            </nav>
      */
      ?>
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
        </div>
<!--
<div class="wrapperbakels">
  <nav class="bakels">
    <ul class="ul1">
    <a class="navbar-brand ps-1" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/Hayes-Valley-Interior-Design.svg" alt="brand" width="140" height="45">
    </a><!--
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Store</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <ul class="socialbakels">
        <li>
          <a href="#">Homepage</a>
        </li>
        <li>
          <a href="#" href="#">Portfolio</a>
        </li>
        <li>
          <a href="#">Our Process</a>
        </li>
        <li class="nav-item">
          <a class="nav-link w-nav-link" style="max-width: 728px" aria-current="page" href="#" href="#">Our design team</a>
        </li>
        <li>
          <a href="#">Contact us</a>
        </li>
        <li>
          <a href="#">Links</a>
        </li>
    </ul>
  </nav>
</div>

        -->


