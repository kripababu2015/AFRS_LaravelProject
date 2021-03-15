@extends('userdashboard')
@section('content')


<!-- 
/*******************
*@function:search flight
*@Author:Kripa Babu
*@date:11/03/2021
*******************/ -->
<table  style=" " class="mt-5 bg-dark text-white">
<tr>
<th>flight no</th>
<th>flight Name</th>
<th>Departure</th>
<th>Arrival</th>
<th>Departure Date</th>
<th>Arrival Date</th>
<th>Departure Time</th>
<th>Arrival Time</th>
<th>Cost First class</th>
<th>Cost Economic class</th>
<th>Cost Buisness class</th>
<th>firstclass seatcapacity</th>
<th>economicclass seatcapacity</th>
<th>Buisnessclass seatcapacity</th>
<th>firstclass seatavailability</th>
<th>economicclass seatavailability</th>
<th>Buisnessclass seatavailability</th>
<th>Action</th>


</tr>



@foreach($flight as $value)
 
<tr>
<td>{{ $value->fno }}</td>
<td>{{ $value->flname }}</td>
<td>{{$value->departure}}</td>
<td>{{$value->arrival}}</td>
<td>{{$value->depdate}}</td>
<td>{{$value->arrdate}}</td>
<td>{{$value->deptime}}</td>
<td>{{$value->arrtime}}</td>
<td>{{$value->costfirst}}</td>
<td>{{$value->costeconomic}}</td>
<td>{{$value->costbuisness}}</td>
<td>{{$value->cfirst}}</td>
<td>{{$value->ceconomic}}</td>
<td>{{$value->cbuisness}}</td>
<td>{{$value->afirst}}</td>
<td>{{$value->aeconomic}}</td>
<td>{{$value->abuisness}}</td>

@if($value->afirst<=0 && $value->aeconomic<=0 && $value->abuisness<=0)
 <input type="hidden" name="id" value="">
<td><a>Booking closed</a></td>
<!-- <td><a href="">Delete</a></td> -->

@else

<input type="hidden" name="id" value="">
<td><a href="booking/{{$value->id}}">Book Now</a></td>
</tr>

<!-- <tr>
<td>No Data Found</td>
</tr> -->
@endif
@endforeach

@endsection