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
		<div class="row">
			<div class="col-md-12">
				<form action="" role="form" method="post" action="" enctype="">
					<div class="form-group">
						<label for="district">District</label>
						<select name="district" id="district">
							@foreach ($nn as $dt_district)
								<option value="{{$dt_district->district}}">{{$dt_district->district}}</option>
							@endforeach
						</select>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="city">
					
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{URL('assets/js/laramap.js')}}"></script>
	<script src="{{URL('assets/js/AjaxSearch.js')}}"></script>
@endpush