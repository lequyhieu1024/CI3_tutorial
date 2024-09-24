<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title><?= $title ?></title>
</head>
<body>
<div class="container w-50 mt-5 p-5">
	<header class="header alert alert-info text-center">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?= base_url('Home/index') ?>">Home</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?= base_url('Student/index') ?>">Student</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('Subject/index') ?>">Subject</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('Department/index') ?>">Department</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
							   aria-expanded="false">
								Settings
							</a>
							<ul class="dropdown-menu">
								<?php
								if (isset($is_logged_in) && $is_logged_in) {
									echo '<li><a class="dropdown-item" href="' . base_url('Auth/logout') . '">Logout</a>';
								}
								?>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<main class="content">
		<?php if ($this->session->flashdata('message')): ?>
			<div class="alert alert-success">
				<?php echo $this->session->flashdata('message'); ?>
			</div>
		<?php endif; ?>
		<?= $content ?>
	</main>
	<footer class="footer alert alert-danger text-center">
		<h2>Footer của trang <?= $title ?></h2>
	</footer>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</html>
