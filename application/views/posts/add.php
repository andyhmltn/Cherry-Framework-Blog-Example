<?php
if(isset($errors)) {
	foreach($errors as $error) {?>

<div class="alert">
  <strong>Warning!</strong> <?php echo $error; ?>
</div>

<?php } }?>

<h2>Add a new post</h2><br />
<?php $form = new Form(array('posts', 'add'), 'post', array('class' => 'form-horizontal')); ?>
<div class="control-group">
            <label class="control-label">Title</label>
            <div class="controls">
              <?php $form->input('text', 'title', '', TRUE, array('style' => 'height: 28px;')); ?>
            </div>
</div>
<div class="control-group">
			<label class="control-label">Content</label>
            <div class="controls">
            <textarea name="content" style="height: 108px"></textarea>
            
            </div>
</div>
<div class="form-actions">
<?php $form->submit('Add post', array('class' => 'btn')); ?>
</div>