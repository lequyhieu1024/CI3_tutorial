<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<form class="my-3" method="POST">
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Subject Name</label>
		<input type="text" name="name" class="form-control">
		<?php echo form_error('name', '<small class="text-danger form-text">','</small>'); ?>
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Description</label>
		<input type="text" name="description" class="form-control" id="exampleInputPassword1">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

