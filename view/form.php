<?php
	//require the config file to get to the $path variable
	require_once(__DIR__ . "/../model/config.php");
	/*require_once(__DIR__ . "/../contorller/login-verify.php");
	if(!authenticateUser)({
		header("Location: " . $path . "index.php");
		die();
	}
	*/
?>

<h1>Create Blog Post</h1>
<!--form takes in information and send it to the table-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
      <div>
        <!--it labels the title-->
        <label for="title">Title: </label>	
        <!--creates a text box where you can input text in one line only-->
        <input type="text" name="title" />
    </div>

    <div>
        <!--it labels the post-->
        <label for="post">Post: </label>	
        <!--creates a text box where you can input text in several lines-->
        <textarea name="post"></textarea>
    </div>

    <div>
        <!--creates a button to submit the text -->
        <button type="submit" type="button"><a class="submit">Submit</a></button>

    </div>
</form>
