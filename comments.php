<div>
    <div class="comments" id="comments">
        <div class="comment-header">
            <h2 class="comment-title">
            <?php 
                 
                 if( ! have_comments()) { 
                     echo 'Leave a Comment';
                      echo "<script> console.log('This should excecute Leave a Comment') </script>";
                 } else { 
                 echo   get_comments_number(). 'Comments';
                    echo "<script> console.log('This should excecute the function i created') </script>";
                 }
                
                ?>
            </h2>
        </div>
        <div class="comment-inner">
            <?php 
            wp_list_comments(
                array(
                    'avatar-size' => 120 , 
                    'style' => 'div'
                )
            );
            ?>
        </div>
        <hr>
        <?php 
        if( comments_open()) { 
            comment_form(
                array(
                    'class_form' => '' ,
                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">' , 
                    'title_reply_after' => '</h2>'
                )
                );
           }
        ?>

    </div>
</div>