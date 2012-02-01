<?php
	if(isset($errors)) {
		die($errors);
	}
?>

<div class="hero-unit">
    <hgroup>
          <h1><?php echo $featured->title;?></h1>
          <p class="lead"><?php echo substr($featured->content, 0, 100) . "...";?></h2>
    </hgroup>
    <p><a class="btn primary large pull-right" href="<?php echo $html->mvcURL('view', $featured->id); ?>">Read more&raquo;</a></p>
</div>

<?php foreach($posts as $post): ?>
	<div class="row">
		<div class="span-two-thirds">
			<a href="<?php echo $html->mvcURL('view', $post->id); ?>"><h1><?php echo $post->title; ?></h1></a>
			<p>Posted by: <?php echo $userObject->find($post->user_id)->username; ?> on <?php echo $post->date;?></p>
			<p class="lead"><?php echo nl2br($post->content); ?></p>
		</div>
		<div class="span-one-thirds">
		</div>
	</div>
<?php endforeach; ?>