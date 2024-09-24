<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container my-2">
	<h1 class="mb-4">Profile</h1>
	<div class="row">
		<div class="col-md-4 text-center">
			<img src="<?= base_url($student->avatar) ?>" alt="Profile Picture" class="img-fluid rounded-circle mb-3">
			<h2><?= $student->name ?></h2>
			<p class="text-muted"><?= $student->student_code ?></p>
			<p><?= $student->department ?></p>
			<form action="<?= base_url('Student/change_avatar/' . $student->id) ?>" enctype="multipart/form-data"
				  method="POST">
				<input type="file" name="avatar" onchange="this.form.submit()" class="form-control hidden">
			</form>
		</div>
		<div class="col-md-8">
			<h4>Infomation</h4>
			<p><strong>Address:</strong> <?= $student->address ?></p>
			<p><strong>Birthday:</strong> <?= $student->birthday ?></p>
			<p><strong>Status:</strong> <?= $student->status ?></p>
			<p><strong>Gender:</strong> <?= $student->gender == 1 ? "Mail" : "Female" ?></p>

			<h4>Contact Information</h4>
			<ul class="list-unstyled">
				<li><strong>Email:</strong> <?= $student->email ?></li>
				<li><strong>Phone:</strong> <?= $student->phone ?></li>
			</ul>
		</div>
	</div>
</div>
