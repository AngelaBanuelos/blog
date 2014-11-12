<?php
//require the config file to get to the $path variable
require_once(__DIR__ . "/../model/config.php");
?>
<h1>Create Blog Post</h1>
<!-- form takes in info and sends it to the table -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?> ">
	<div>
		<!-- it labels the title -->
		<label for="title">Title: </label>
		<!-- makes a text box where you can insert only one line text -->
		<input type="text" name="title" />
	</div>
	<div>
		<!-- it labels the Post -->
		<label for="post">Post: </label>
		<!-- makes a text box where you can insert multiple lines of text -->
		<textarea name=""post></textarea>
	</div>
	<div>
		<!-- creates a button to submit the text -->
		<button type="submit">Submit</button>
	</div>
</form>