<?php

get_header();

?>
<style>
  section{
    padding: 60px 0;
  }
</style>
  <div class="w-layout-grid home-hero-section" style="z-index:-1;">
    <div id="w-node-fc5e767b-2d91-d756-d23b-2f68ba7d7c6a-638b4836" class="home-hero-image">
      <div class="div-block-2"></div>
    </div>
    <div id="w-node-_0c12017f-7f27-7ca8-f29c-c4018ace159d-638b4836" class="home-hero-content">
      <h1 class="major-heading mobile">Make Coding Great Again</h1>
      <p class="home-section-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
      <a href="#" class="button w-button">See our work</a>
    </div>
  </div>

  <!--  voorbeelden projecten onder de hero section   
modules operator: For example, the expression "5 mod 2" would evaluate to 1, because 5 divided by 2 has a quotient of 2 and a remainder of 1, while "9 mod 3" would evaluate to 0, because the division of 9 by 3 has a quotient of 3 and a remainder of 0; there is nothing to subtract from 9 after multiplying 3 times 3.


-->
<div class="container-xxl d-grid gap-3">
<div class="row">
<?php


  $index = 0;
  $no_of_columns = 2;
  //start the loop
    while (have_posts() && $index < 4) : the_post();
      if ( 0 === $index % $no_of_columns) {
        ?>
        <div class="col-lg-6 col-sm-12">
        <?php
      }
    ?>

    <?php 
    if (has_post_thumbnail()) {
      echo '<div class="post-thumb">';
        the_post_thumbnail('blog-post-hard-v3');
      echo '</div>';
    }
    ?>


    <p class="testimonial mt-2"><?php the_title();?></p>
    <?php
      $index++;
       if ( 0 !== $index && 0 === $index % $no_of_columns) {
        ?>
       </div>
      <?php
       }
      ?>
      <?php
      endwhile;

      ?>



</div>

<div>

<?php

/*
global $wpdb;

$thepost = $wpdb->get_row( $wpdb->prepare( "SELECT *
    FROM $wpdb->posts WHERE ID = %d", 27 ) );
echo $thepost->post_content;

global $wpdb;

$liveposts = $wpdb->get_results( $wpdb->prepare( "SELECT post_type
    FROM $wpdb->posts WHERE post_status = %d ", 'publish') );
foreach ( $liveposts as $livepost ) {
    echo '<p>' .$livepost->post_title. '</p>';
}

/*
$liveposts = $wpdb->get_results( $wpdb->prepare( "SELECT post_content
    FROM $wpdb->posts WHERE post_type = %d ", 'publish' ) );
foreach ( $liveposts as $livepost ) {
    echo '<p>' .$livepost->post_title. '</p>';
}

//Voorbeeld waarin je via global $wpdb post data laat zien

global $wpdb;

$liveposts = $wpdb->get_results( $wpdb->prepare( "SELECT ID, post_title
    FROM $wpdb->posts WHERE post_type = %s ", 'post' ) );
foreach ( $liveposts as $livepost ) {
    echo '<p>' .$livepost->ID . '<br>'. $livepost->post_title. '</p>';
}
/* voorbeeld boek waarin je alle producten laat zien 
$args =  array(
  'posts_per_page' => '-1',

  'post_type'      => 'cars',
);

$myProducts = new WP_Query( $args );

// The Loop
while ( $myProducts->have_posts() ) : $myProducts->the_post();
    ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br /><h1><?php the_content();?></h1><?php
endwhile;

// Reset Post Data
wp_reset_postdata();

*/

// voorbeeld waarin je product weapons laat zien

//global $wpdb;
/*
$args = array(
  'post_type' => 'cars',
  'tax_query' => array(
      'taxonomy' => 'brands',
      'field'    => 'slug',
      'terms'    => 'brands',
      )
  );

$cars = new WP_Query( $args );

while ( $cars->have_posts() ) : $cars->the_post();

?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br /><?php
endwhile;

wp_reset_postdata();

?>



    </div>

<!--
  <div class="container-xxl d-grid gap-3">
    
      <div class="row">
        <div class="col-md-6 mb-3 mb-md-0">
          <div class="p-5 bg-primary text-light">col 1</div>
        </div>
        <div class="col-md-6">
          <div class="p-5 bg-primary text-light">col 2</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-3 mb-md-3">
          <div class="p-5 bg-primary text-light">col 3</div>
        </div>
        <div class="col-md-6 mb-3 mb-md-3">
          <div class="p-5 bg-primary text-light">col 4</div>
        </div>
      </div>
  </div>

-->

  <!--  main image and intro text    -->




  <?php //echo do_shortcode( '[the-post-grid id="99" title="Hays Valley front page"]' ); ?>
<?php
  /*
  <div class="collection w-dyn-list">
    <div role="list" class="collection-list-2 w-dyn-items">
      <div role="listitem" class="testimonial-preview w-dyn-item">
        <div class="maarten"></div>
        <div class="testimonial"></div>
        <div class="date-of-completion"></div>
      </div>
    </div>
    <div class="w-dyn-empty">
      <div>No items found.</div>
    </div>

    */
?>
  </div>
  <div class="section-stepplan explore-process wf-section">
    <div id="w-node-d115f405-1640-fbf9-f40f-95487bb2f1f0-638b4836" class="page-preview">
      <h3 class="secondary-heading">Our process</h3>
      <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. </p>
      <a href="process.html" class="button process w-button">Explore our process</a>
    </div>
  </div>

  <?php
  /*
  <div class="section-stepplan meet-our-team wf-section">
    <div id="w-node-_7969e923-ee67-dbe9-5847-55a82910ab36-638b4836" class="page-preview">
      <h3 class="secondary-heading team">Meet our team</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. </p>
      <a href="process.html" class="button process w-button">Meet our team</a>
    </div>
    <div class="w-dyn-list">
      <div role="list" class="team-member-preview w-dyn-items">
        <div role="listitem" class="w-dyn-item"><img src="" loading="lazy" alt=""></div>
      </div>
      <div class="w-dyn-empty">
        <div>No items found.</div>
      </div>
    </div>
  </div>
  */
  ?>
  <div class="section-3 wf-section">
    <h1 class="major-heading darker">Contact our team</h1>
    <p class="hero-paragraph-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.</p>
    <div class="w-form">
      <form id="email-form" name="email-form" data-name="Email Form"><label for="name-3" class="field-label">Name</label><input type="text" class="text-field w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Maarten Feldmann" id="name-2" required=""><label for="email-3" class="field-label">Email Address</label><input type="email" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="maarten.feldmann@gmail.com" id="email-2" required=""><label for="email-3" class="field-label">message (optinal)</label><textarea placeholder="Example Text" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea>
        <div data-sitekey="6LdSoqccAAAAAEtQfPlwAE_vitvZAtAlfhShwE_F" class="w-form-formrecaptcha recaptcha g-recaptcha g-recaptcha-error g-recaptcha-disabled"></div><input type="submit" value="Submit" data-wait="Please wait..." class="button form-button w-button">
      </form>
      <div class="w-form-done">
        <div>Thank you! Your submission has been received!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Something went wrong while submitting the form.</div>
      </div>
    </div>
  </div>
  <?php
get_footer();

?>