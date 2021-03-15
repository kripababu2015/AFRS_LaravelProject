@extends('admindashboard')
@section('content')
<!-- /*******************
*@function:Booked users page view by admin
*@Author:Anisha
*@date:13/03/2021
*******************/ -->


<h1>PASSENGER BOOKING DETAILS</h1>


 
<table>
  <tr>
	
	<td>First Name</td>
	<td>Last Name</td>
	<td>Flight Number</td>
	<td>Flight Name</td>
	<td>Departure</td>
	<td>Arrival</td>
	<td>Departure Date</td>
	<td>Arrival Date</td>
	<td>Amount</td>
	
  
	
   
	
	</tr>
@foreach ($data as $user) 

<td>{{ $user->fname }}</td>
<td>{{ $user->lname }}</td>
<td>{{ $user->fno }}</td>
<td>{{ $user->flname }}</td>
<td>{{ $user->departure }}</td>
<td>{{ $user->arrival }}</td>
<td>{{ $user->depdate }}</td>
<td>{{ $user->arrdate }}</td>
<td>{{ $user->ticketcharge }}</td>





</tr>
@endforeach
</table>



	

@endsection