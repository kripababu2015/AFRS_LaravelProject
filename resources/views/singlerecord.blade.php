@extends('userdashboard')
@section('content')

<?php
/*******************
*@function:view single passenger record
*@Author:Revathy
*@date:12/03/2021
*******************/
?>
<h1>SINGLE PASSENGER RECORD</h1>

  <form method="get" action="getticket" class="container-fluid">
   
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
      <td>Ticket</td>
    
      
     
      
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
<td><a href="getticket">Ticket</a></td>




</tr>
@endforeach
  </table>
  
</form>
@endsection