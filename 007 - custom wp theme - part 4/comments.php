<div id = "comments">

<?php if( have_comments()): ?>
<h3>Comments</h3>
<ul>
	<?php wp_list_comments('avatar_size=0&max_depth=1&format=html5'); ?>
</ul>
<?php endif; ?>

<?php comment_form( 'format=html5' ) ?>
</div>