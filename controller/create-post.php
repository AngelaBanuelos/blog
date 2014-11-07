<?php
//the variable filters the input and gets the post from title and filters it to make sure its a string
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
//the post means to get the data and filter it
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
//to print out the title 
echo "<p>Title: $title</p>";
//tp print out the post
echo "<p>Post: $post</p>";