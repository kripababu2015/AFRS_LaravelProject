@extends('userdashboard')
@section('content')
<?php
/*******************
*@function:view ticket 
*@Author:Revathy
*@date:12/03/2021
*******************/
?>
<div class="bg-light">
<h1>TICKET</h1>

  
   


 <p> 
@foreach ($user as $users) 



<input type="text"  value="First Name:{{ $users->fname }}" size="50">
</br>
<br>
<input type="text"  value="Last Name:{{ $users->lname }}" size="50">

@endforeach

@foreach ($flight as $user) 

</br><br>
<input type="text"  value="Flight Number:{{ $user->fno }}" size="50">

</br>
<br>
<input type="text"  value="Flight Name:{{ $user->flname }}" size="50">

</br>
<br>
<input type="text"  value="Departure:{{ $user->departure }}" size="50">


</br>
<br>
<input type="text"  value="Arrival:{{ $user->arrival }}" size="50">

</br>
<br>
<input type="text"  value="Departure Date:{{ $user->depdate }}" size="50">

</br>
<br>
<input type="text"  value="Arrival Date:{{ $user->arrdate }}" size="50">

</br>
@endforeach

@foreach ($ticket as $user) 

<br>
<input type="text"  value="Booking Number:{{ $user->id }}" size="50">
<br><br>

<input type="text"  value="Amount:{{ $user->ticketcharge }}" size="50">



@endforeach

</p>


  
</form>
<div>
@endsection
