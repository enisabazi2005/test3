  <div class="container">
     <header class="content-header">
        <div class="row">
            <div class="col"><?php the_date(); ?></div>
            <div class="col"><?php comments_number(); ?></div>
        </div>
     </header>



<?php 
the_content();
?>

<?php 
comments_template();
?>

</div>