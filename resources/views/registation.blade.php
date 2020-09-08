@extends('layouts.register')

@section('title')
{{ __('Registation Control Panel') }}
@endsection
@section('stylesheet')
<link rel="stylesheet" href="{{ mix('css/registration.css') }}">
@endsection
@section('main-content')
<div id="registration_container">
	<div class="container">
		<div class="box">
			<h2 class="text-header text-center">
				<div>เงื่อนไขและคุณสมบัติ</div>
				<div>ผู้มีสิทธิ์ลงทะเบียน</div>
				<span>{{ $user }}</span>
			</h2>
			<div class="condition-content">
				<div class="condition-info">
					<p class="text-indent-30">เว็บฝึกอบรม www.self-training.in.th
						พัฒนาขึ้นเพื่อเป็นเครื่องมือในการศึกษาวิจัย และเพื่อให้การใช้งานเว็บฝึกอบรมเป็นไปตามวัตถุประสงค์
						สอดคล้องต่อกระบวนการศึกษาวิจัย
						ผู้วิจัยจึงขอจำกัดสิทธิ์ในการลงทะเบียน คุณสมบัติของผู้มีสิทธิ์ลงทะเบียน
						และเงื่อนไขการใช้งานเว็บฝึกอบรม ดังนี้
					</p>
					<div class="condition-requirement">
						<h5>คุณสมบัติ / สิทธิ์และเงื่อนไข</h5>
						<ul class="condition-nav">
							<li class="condition-list">ผู้มีสิทธิ์ลงทะเบียนต้องเป็นนักศึกษามหาวิทยาลัยรามคำแหง
								ที่กำลังศึกษาหรือสอบผ่านกระบวนวิชา ECT1301
								คอมพิวเตอร์เพื่อการเรียนการสอน สามารถเข้าร่วมการกิจกรรมต่าง ๆ
								ที่จัดขึ้นในเว็บฝึกอบรม จนเสร็จสิ้นตามเงื่อนไขการใช้งาน มีคอมพิวเตอร์
								หรืออุปกรณ์ที่สามารถเชื่อมต่ออินเทอร์เน็ตและเข้าใช้งานเว็บฝีกอบรมได้
							</li>
							<li class="condition-list">ระบบลงทะเบียนมีการกำหนดและจำกัดโควต้าสิทธิ์การใช้งานไว้ที 30
								สิทธิ์
								และจะปิดระบบลงทะเบียนหลังจากมีผู้ลงทะเบียนและได้รับสิทธิ์ครบ</li>
							<li class="condition-list">ผู้ที่ได้สิทธิ์ใช้งานเว็บฝึกอบรม
								จะต้องให้ความร่วมมือในการจัดการศึกษาวิจัย
								และดำเนินกิจกรรมตามขั้นตอนกระบวนการที่เว็บฝึกอบรมจัดเตรียมไว้ให้ จนครบระยะเวลาที่กำหนด
								หรือ จบคอร์สฝึกอบรม</li>
							<li class="condition-list">ผู้ที่ได้สิทธิ์ใช้งานเว็บฝึกอบรม
								จะได้สิทธิ์การใช้ศึกษาคอร์สอบรมที่จัดให้ทั้งหมด และเมื่อครบระยะเวลาในการศึกษาวิจัย
								จะถูกปรับสิทธิ์เป็นผู้ใช้งานทั่วไป</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="agreement">
				<label><input type="checkbox"><span>ยอมรับเงื่อนไขและข้อตกลง</span></label>

				<div class="menuitem">
					<form action="{{ route('register.code.sent') }}" method="POST">
						@csrf
						<input type="hidden" id="code" name="code" value="{{ $var }}">
						<button type="submit" class="btn btn-success">ลงทะเบียน</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


@section('script')

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

function RegisterPage() {
	window.location = "{{ route('students.register')}}?user={{$var}}";
}
</script>
@endsection