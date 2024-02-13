<?php 
get_header();
?>

    <article>
    <h1>this is only test</h1>
    <ul>
        <li>Test 1</li>
        <li>Test 2</li>
        <li>Test 3</li>
        <li>Test 4</li>
    </ul>

    <?php 
 
      if( have_posts()) { 
          while( have_posts()) { 

            the_post();
            the_content();
          }
      }
      
    ?>

    </article>



  <?php 
  get_footer();
  ?>
 