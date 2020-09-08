@extends('layouts.register')

@section('title')
	{{ __('Registation Page') }}
@endsection

@section('stylesheet')
	<link rel="stylesheet" href="{{ mix('css/registration.css') }}">
@endsection
@section('script')
	<script src="{{ mix('js/registration.js') }}"></script>
@endsection
