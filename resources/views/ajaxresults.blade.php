<label for="nmcity">City</label>	
<select name="nmcity" id="nmcity">
	@foreach ($matchCity as $dt_matchCity)
		<option value="{{$dt_matchCity->city}}">{{$dt_matchCity->city}}</option>
	@endforeach
</select>