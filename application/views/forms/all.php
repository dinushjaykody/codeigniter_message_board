<?php  foreach($posts as $post){

?>

    <div class="post">
       <a href="<?php echo site_url("post/view/{$post['id']}"); ?>"> <h2 class="post-title"> <?php echo $post['title']; ?></h2> </a>

            <div class="post-date"> <?php echo date("Y:M:d", $post['date']);?>
            </div>
                <div class="post-content">
                    <?php echo nl2br($post['text']); ?>
                </div>

    </div>

<?php } ?>