<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<a href="<?= base_url('subject/create') ?>"><button class="btn btn-primary mb-2">Create Subject</button></a>
<table class="table table-bordered">
	<thead>
	<th>ID</th>
	<th>Name</th>
	<th>Desciption</th>
	<th>Action</th>
	</thead>
	<tbody>
	<?php foreach ($subjects as $subject): ?>
		<tr>
			<td><?= $subject->id ?></td>
			<td><?= $subject->name ?></td>
			<td><?= $subject->description ?></td>
			<td>
				<a href="<?= base_url('Subject/edit/'. $subject->id ) ?>" class="btn btn-warning">Edit</a>
				<a href="<?= base_url('Subject/delete/'. $subject->id ) ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php endforeach ?>
	</tbody>
</table>

<div>
	<?php echo $links;?>
</div>

