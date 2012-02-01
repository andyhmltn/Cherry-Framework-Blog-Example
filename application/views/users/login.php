<?php if(isset($errors)) {?>

<div class="alert">
  <strong>Warning!</strong> <?php echo $errors; ?>
</div>

<?php } ?>

<h2>Login</h2><br />
<?php $form = new Form(array('users', 'verify'), 'post', array('class' => 'form-horizontal')); ?>
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
	<?php $form->submit('Login', array('class' => 'btn')); ?>
</div>