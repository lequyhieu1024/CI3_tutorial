<form class="my-3" method="POST" action="<?=base_url('auth/login_process') ?>">
	<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text">Chúng tôi sẽ không tiết lộ địa chỉ email của bạn cho bất kì ai.</div>
	</div>
	<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1">
	</div>
	<div class="mb-3 form-check">
		<input type="checkbox" class="form-check-input" id="exampleCheck1">
		<label class="form-check-label" for="exampleCheck1">Lưu tài khoản</label>
	</div>
	<button type="submit" class="btn btn-primary">Đăng nhập</button>
	<p>Bạn chưa có tài khoản ? Mời <a href="<?=base_url('auth/register_view') ?>" class="text-decoration-none">Đăng ký thành viên</a> </p>
</form>
