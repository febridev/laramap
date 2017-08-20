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
				<form id="searchGirls" action="/getLocationCoords" role="form" method="post" enctype="">
					<div class="form-group">
						<label for="district">District</label>
						<select name="district" id="district">
							@foreach ($nn as $dt_district)
								<option value="{{$dt_district->district}}">{{$dt_district->district}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<div id="city">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Find</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
	<script src="{{URL('assets/js/laramap.js')}}"></script>
	<script src="{{URL('assets/js/AjaxSearch.js')}}"></script>
@endpush