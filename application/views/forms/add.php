<h2>Add A New Post</h2>

<?php echo form_open('post/do_add'); ?>

Title: <br>
<input type="text" name="title"/> <br><br>

Text: <br>
<textarea name="text" id="" cols="30" rows="10"></textarea> <br> <br> <br>

<input type="submit" value="Add Post" />

<?php form_close(); ?>