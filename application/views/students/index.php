<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<table class="table table-bordered">
	<thead>
	<th>ID</th>
	<th>Name</th>
	<th>Email</th>
	<th>Action</th>
	</thead>
	<tbody>
	<?php foreach ($students as $student) : ?>
		<tr>
			<td><?= $student->id ?></td>
			<td><?= $student->name ?></td>
			<td><?= $student->email ?></td>
			<td>
				<a href="<?= base_url('Student/show/'.$student->id) ?>" class="btn btn-info">show</a>
				<a href="" class="btn btn-warning">Edit</a>
				<a href="" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<div>
	<?php echo $links;?>
</div>

