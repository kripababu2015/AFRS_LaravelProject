@extends('admindashboard')
@section('content')
<!-- /*******************
*@function:registered user page view by admin
*@Author:Anisha
*@date:11/03/2021
*******************/ -->

<h3 class="bg-primary text-white text-center ">USER VIEW</h3>
	<form method="post" action="">
	<table class="container-fluid table table-striped table-bordered table-hover">
	<tr>
     <td>Id</td>
     <td>First name</td>
     <td>Last name</td>
     <td>DOB</td>
     <td>Age</td>
     <td>Gender</td>
     <td>Address</td>
     <td>Phone number</td>
     <td>Adhar No</td>
     <td>Email</td>
    </tr>
    
@foreach($user as $value)
<tr><td>{{$value['id']}}</td> 
    <td>{{$value['fname']}}</td>
    <td>{{$value['lname']}}</td>
    <td>{{$value['dob']}}</td>
    <td>{{$value['age']}}</td>
    <td>{{$value['gender']}}</td>
    <td>{{$value['address']}}</td>
    <td>{{$value['phno']}}</td>
    <td>{{$value['adharno']}}</td>
    <td>{{$value['email']}}</td>
    

</tr>
@endforeach
</table>

	
</form>
@endsection