<?php
/*
Template Name: modal
*/
?>
<div class="modal-header">

	<a class="close" data-dismiss="modal">&times;</a>

	<h3>Modal header 2</h3>

</div>

<div class="modal-body">



<?php

$post_id = $_GET['ID'];

$queried_post = get_post($post_id);

$title = $queried_post->post_title;

echo $title;

echo $queried_post->post_content;

?>

</div>

<div class="modal-footer">

	<a class="btn" data-dismiss="modal">Close</a>

</div>