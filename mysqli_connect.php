  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

<!--IN DEZE FILE KAN JE GEEN WP FUNCTIONALITEIT AANROEPEN JE KAN ALLEEN SPELEN MET NORMAAL SQL-->
      

  
  <?php 
  
  
  

  # Script 9.2 - mysqli_connect.php
// This file contains the database access information.
  // This file also establishes a connection to MySQL,
   // selects the database, and sets the encoding.

  // Set the database access information as constants:
  // ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */


define( 'DB_NAME', 'hayesvalley' );


define( 'DB_USER', 'root' );


define( 'DB_PASSWORD', 'root' );


define( 'DB_HOST', 'localhost' );


define( 'DB_CHARSET', 'utf8mb4' );

define( 'DB_COLLATE', '' );







// Make the connection:
    $dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to
    MySQL: ' . mysqli_connect_error( ) );

  // Set the encoding...
  mysqli_set_charset($dbc, 'utf8');



 $query = 'SELECT * FROM wp_posts WHERE post_type = "attachment"';

if ($r = mysqli_query($dbc, $query)) { // Run the query.


 //Retrieve and print every record:

  while ($row = mysqli_fetch_array($r)) {

   print "<p>
            <h3>{$row['post_title']}</h3>
            <h3>{$row['ID']}</h3>
            <h3>{$row['guid']}</h3>
      </p><hr>\n";
  

  }
}



  mysqli_close($dbc); // Close the connection.




  ?>
   </body>
   </html>
<!--
   print "<p>
            <h3><span>post_author  </span>{$row['post_author']}</h3>
            <h3><span>post_date'  </span>{$row['post_date']}</h3>
            <h3><span>post_date_gmt </span>{$row['post_date_gmt']}</h3>
            <h3><span>post_content  </span>{$row['post_content']}</h3>
            <h3><span>post_title  </span>{$row['post_title']}</h3>
            <h3><span>post_excerpt  </span>{$row['post_excerpt']}</h3>
            <h3><span>post_status  </span>{$row['post_status']}</h3>
            <h3><span>omment_status  </span>{$row['comment_status']}</h3>
            <h3><span>ping_status  </span>{$row['ping_status']}</h3>
            <h3><span>post_password  </span>{$row['post_password']}</h3>
            <h3><span>post_name  </span>{$row['post_name']}</h3>
            <h3><span>to_ping  </span>{$row['to_ping']}</h3>
            <h3><span>pinged  </span>{$row['pinged']}</h3>
            <h3><span>ost_modified'  </span>{$row['post_modified']}</h3>
            <h3><span>post_modified_gmt  </span>{$row['post_modified_gmt']}</h3>
            <h3><span>post_content_filtered  </span>{$row['post_content_filtered']}</h3>
            <h3><span>post_parent  </span>{$row['post_parent']}</h3>
            <h3><span>guid  </span>{$row['guid']}</h3>
            <h3><span>menu_order  </span>{$row['menu_order']}</h3>
            <h3><span>post_type  </span>{$row['post_type']}</h3>
            <h3><span>post_mime_type  </span>{$row['post_mime_type']}</h3>
            <h3><span>comment_count  </span>{$row['comment_count']}</h3>
      </p><hr>\n";


      post_type:

      nav_menu_item
      page
      attachment
      revision (heeft de images)
      post
      post_grid
      post_grid_layout
      rttpg

