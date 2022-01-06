<div class="container">

<?php
    
    the_content();
    the_post_thumbnail('blog-post');
    ?>
                <a href="<?php echo the_permalink();?>">Single post</a>
                <?php


?>

</div>