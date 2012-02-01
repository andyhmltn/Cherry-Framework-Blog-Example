<?php

	if(isset($error)) {
		die($error);
	}
?>


	<div class="row">
		<div class="span-two-thirds">
			<a href="<?php echo $html->mvcURL('view', $post->id); ?>"><h1><?php echo $post->title; ?></h1></a>
			<p>Posted by: <?php echo $userObject->find($post->user_id)->username; ?> on <?php echo $post->date;?></p>
			<p class="lead"><?php echo nl2br($post->content); ?></p>
		</div>
		<div class="span-one-thirds">
		</div>
	</div>

<ul class="nav nav-pills">
<?php if(!empty($tags)) { foreach($tags as $tag): ?>
	<?php if(isset($tag->name)) {?>
		<li><a class="" href="<?php echo $html->mvcURL('tags', $tag->id); ?>"><?php echo "#$tag->name"; ?></a></li>
	<?php } ?>
<?php endforeach; }?>
</ul>

<br /><br />
<?php $form = new Form(array('tags', 'add'), 'post', array('class' => 'well form-search input-prepend')); ?>
<span class="add-on">#</span>
<?php $form->input('text', 'name', 'Tag name', TRUE, array('class' => 'input-medium', 'style' => 'height: 28px;', 'id' => 'prependedInput')); ?>    
<?php $form->input('hidden', 'post_id', $post->id); ?>
<?php $form->submit('add a tag', array('class' => 'btn')); ?>
