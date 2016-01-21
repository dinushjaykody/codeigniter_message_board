
<h2>Update Post</h2>

<?php  echo  form_open('post/do_update'); ?>

Title: <br>
<input type="text" name="title" value="<?php echo $posts['title'];?>"/> <br><br>

Text: <br>
<textarea name="text" id="" cols="30" rows="10"> <?php echo $posts['text'];?></textarea> <br> <br> <br>

<input type="submit" value="Update Post" />

<input type="hidden" name="id" value = "<?php echo $posts['id'] ?>"/>
<?php form_close(); ?>