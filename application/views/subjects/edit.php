<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<form class="my-3" method="POST">
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Department Name</label>
		<input type="text" name="name" value="<?= $subject->name ?>" class="form-control" id="exampleInputEmail1"
			   aria-describedby="emailHelp">
		<?= form_error('name', '<small class="form-text text-danger">', '</small>') ?>
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Description</label>
		<input type="text" name="description" value="<?= $subject->description ?>" class="form-control"
			   id="exampleInputPassword1">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>

