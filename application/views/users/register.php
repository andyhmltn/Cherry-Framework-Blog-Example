<?php
if(isset($errors)) {
	foreach($errors as $error) {?>

<div class="alert">
  <strong>Warning!</strong> <?php echo $error; ?>
</div>

<?php } }?>

<h2>Register</h2><br />
<?php $form = new Form(array('users', 'add'), 'post', array('class' => 'form-horizontal')); ?>
<div class="control-group">
            <label class="control-label">Username</label>
            <div class="controls">
              <?php $form->input('text', 'username', '', TRUE, array('style' => 'height: 28px;')); ?>
            </div>
</div>
<div class="control-group">
			<label class="control-label">Password</label>
            <div class="controls">
              <?php $form->input('password', 'password', '', FALSE, array('style' => 'height: 28px;')); ?>
            </div>
</div>
<div class="form-actions">
<?php $form->submit('Register', array('class' => 'btn')); ?>
</div>