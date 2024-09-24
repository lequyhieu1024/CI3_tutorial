<form class="my-3" method="POST" action="">
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Họ và tên</label>
		<input type="text" class="form-control">
	</div>
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
		<input type="password" class="form-control" id="exampleInputPassword1">
	</div>
	<button type="submit" class="btn btn-primary">Đăng ký</button>
	<p>Bạn đã có tài khoản ? Mời <a href="<?php echo base_url('auth/login_view'); ?>" class="text-decoration-none">Đăng nhập</a> </p>
</form>
