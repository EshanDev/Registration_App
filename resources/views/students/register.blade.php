@extends('layouts.register')

@section('title')
{{ __('Registation Page') }}
@endsection

@section('stylesheet')
<link rel="stylesheet" href="{{ mix('css/registration.css') }}">
@endsection



@section('main-content')

{{ Request::segment(3) }}

<div id="regiser_from_container" class="register-form-container">
	<div class="container">
		<div class="register-container">
			<div class="register-box">
				<div class="text-header">
					<h3>ระบบลงทะเบียน</h3>
				</div>
				<div class="form-container">
					<form class="form-content " action="{{ route('submit.register') }}" method="POST">
						@csrf
						<fieldset class="border rounded shadow-sm"
							style="padding-bottom: 15px; background-color: #f3f3f33d !important; border: 1px solid #00000021 !important;">
							<legend class="w-auto" style="font-size: 16px; margin-left: 10px">กรอกข้อมูลนักศึกษา
							</legend>
							<div class="grid-group">
								<div class="form-group">
									<label for="st_name">ชื่อ / สกุล : </label>
									<input type="text" class="form-control @error('st_name') is-invalid @enderror" name="st_name" value="{{ old('st_name') }}">
									@error('st_name')
										<span class="invalid-feeback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="st_code">รหัสนักศึกษา : </label>
									<input type="text" class="form-control" name="st_code">
								</div>
							</div>
							<div class="grid-group">
								<div class="form-group">
									<label for="st_faculty">คณะที่ศึกษา : </label>
									<input type="text" class="form-control" name="st_faculty">
								</div>
								<div class="form-group">
									<label for="st_branch">สาขาวิชาเอก : </label>
									<input type="text" class="form-control" name="st_brancg">
								</div>
							</div>
						</fieldset>
						<fieldset class="border rounded shadow-sm"
							style="padding-bottom: 15px; background-color: #f3f3f33d !important; border: 1px solid #00000021 !important;">
							<legend class="w-auto" style="font-size: 16px; margin-left: 10px">
								กำหนดชื่อผู้ใช้งานและรหัสผาน</legend>
							<div class="grid-group">
								<div class="form-group">
									<label for="st_username">ชื่อผู้ใช้งาน: </label>
									<input type="text" class="form-control" name="st_username" value="{{ Session::get('user') }}">
								</div>
								<div class="form-group">
									<label for="st_email">อีเมล์ : </label>
									<input type="text" class="form-control" name="st_email">
								</div>
							</div>
							<div class="grid-group">
								<div class="form-group">
									<label for="st_password">กำหนดรหัสผ่าน: </label>
									<input type="text" class="form-control" name="password">
								</div>
								<div class="form-group">
									<label for="st_password_confirmation">ยืนยันรหัสผ่านอีกครั้ง : </label>
									<input type="text" class="form-control" name="password_confirmation">
								</div>
							</div>
						</fieldset>

						<div class="agreement">
							<label><input type="checkbox"><span>ยืนยันข้อมูลถูกต้อง</span></label>
							<div class="menuitem">
								<button type="submit" class="btn btn-success">ลงทะเบียน</button>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection



@section('script')
<script src="{{ mix('js/registration.js') }}"></script>
<script>
	$('input').change(function(){
  var $this = $(this), $div = $('div.menuitem');
  if( $this.is(':checked') )
  {
    $div.addClass('show');
  }
  else
  {
    $div.removeClass('show');
  }
}).change();
</script>
@endsection