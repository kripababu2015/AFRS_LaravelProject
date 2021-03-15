@extends('userdashboard')
@section('content')
  
<h3 class="bg-primary text-white text-center">FLIGHT SEARCH</h3>
<form style="margin-left: 450px" method="get" action="searchflight">
@csrf
<fieldset style="width:430px;height:400px;background-color:rgba(0,0,0,0.3); margin-left: 20px; margin-top: 50px;">
<legend><strong></strong></legend>
<table>
<tr>
<td>
Departure:</td>
<td><input list="dep" name="departure" class="form-control">
<datalist id="dep">
<option value="KANNUR">
	<option value="KOCHI">
<option value="TVM">
<option value="KOZHIKODE">
<option value="CHENNAI">
<option value="BANGALORE">
  <option value="MUMBAI">
</datalist></td>
</tr>
<tr>
<td>
Arrival:</td>
<td><input list="arri" name="arrival" class="form-control">
<datalist id="arri">
<option value="KANNUR">
	<option value="KOCHI">
<option value="TVM">
<option value="KOZHIKODE">
<option value="CHENNAI">
<option value="BANGALORE">
  <option value="MUMBAI">
</datalist></td>
</tr>
<tr>
<td>
Date:</td>
<td><input type="date" name="depdate" class="form-control"></td>
</tr>
<tr><td><input type="submit" name="submit" value="Search"></td></tr>

</table>

</fieldset>

</form>

@endsection