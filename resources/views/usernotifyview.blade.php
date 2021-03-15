@extends('userdashboard')
@section('content')
<?php
/*******************
*@function name:notification
*@function:view notification by user
*@Author:stefiyajoy
*@date:12/03/2021
*******************/
?>

<h1>NOTIFICATION VIEW</h1>

    
   
    <table>
        <tr>
            <td>Flight Number</td>
            <td>Flight Name</td>
            <td>Departure</td>
            <td>Arrival</td>
            <td>Departure Date</td>
            <td>Notification</td>
        
     
     
            
            </tr>
     
      @foreach($data as $user) 
<td>{{ $user->fno }}</td>
<td>{{ $user->flname }}</td>
<td>{{ $user->departure }}</td>
<td>{{ $user->arrival }}</td>
<td>{{ $user->depdate }}</td>
<td>{{ $user->notification }}</td>





</tr>
@endforeach
    </table>
    

@endsection