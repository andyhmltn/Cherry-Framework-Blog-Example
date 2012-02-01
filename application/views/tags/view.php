<h2>Posts with tag: <?php echo $tag; ?></h2>
<?php foreach($posts as $post): ?>
	<?php if(isset($post->title)) {?>
		<a href="<?php echo $html->mvcURL('view', $post->id); ?>"><?php echo $post->title; ?></a>
	<?php } ?>
<?php endforeach; ?>