<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<a href="<?= base_url('department/create') ?>"><button class="btn btn-primary mb-2">Create Department</button></a>
<table class="table table-bordered">
	<thead>
	<th>ID</th>
	<th>Name</th>
	<th>Desciption</th>
	<th>Action</th>
	</thead>
	<tbody>
	<?php foreach ($departments as $department) : ?>
		<tr>
			<td><?= $department->id ?></td>
			<td><?= $department->name ?></td>
			<td><?= $department->description ?></td>
			<td>
				<a href="<?= base_url('Department/edit/'. $department->id ) ?>" class="btn btn-warning">Edit</a>
				<a href="<?= base_url('Department/delete/'. $department->id ) ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<div>
	<?php echo $links;?>
</div>

