<!-- /*******************

*@function:view flight details
*@Author:Kripa Babu
*@date:10/03/2021
*******************/ -->

@extends('admindashboard')
@section('content')
@csrf
@csrf_field
{{ method_field('PUT') }}
<table border="1" style="border-collapse: collapse;" class="container-fluid table table-striped table-bordered table-hover ">
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
<th>Action</th>
<!-- <th>Action</th> -->

</tr>
@foreach($udata as $value)



<tr>
<td>{{$value['fno']}}</td>
<td>{{$value['flname']}}</td>
<td>{{$value['departure']}}</td>
<td>{{$value['arrival']}}</td>
<td>{{$value['depdate']}}</td>
<td>{{$value['arrdate']}}</td>
<td>{{$value['deptime']}}</td>
<td>{{$value['arrtime']}}</td>
<td>{{$value['costfirst']}}</td>
<td>{{$value['costeconomic']}}</td>
<td>{{$value['costbuisness']}}</td>
<td>{{$value['cfirst']}}</td>
<td>{{$value['ceconomic']}}</td>
<td>{{$value['cbuisness']}}</td>
<td>{{$value['afirst']}}</td>
<td>{{$value['aeconomic']}}</td>
<td>{{$value['abuisness']}}</td>

<td><a href="updateflightform/{{$value['id']}}">Edit</a></td>
<td><a href="deleteflight/{{$value['id']}}">Delete</a></td>

	<!-- <td><a href="">Canceled</a></td>
    
<td><a href="">Cancel</a></td>  -->
@endforeach

</tr>

<!-- <tr>
<td>No Data Found</td>
</tr> -->


</table>

@endsection