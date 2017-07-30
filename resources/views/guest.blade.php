@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Laramap v1</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="map">
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{URL('assets/js/laramap.js')}}"></script>
@endpush