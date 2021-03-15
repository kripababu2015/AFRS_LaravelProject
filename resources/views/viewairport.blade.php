@extends('admindashboard')
@section('content')
<?php
/*******************
*@function:view of airport details 
*@Author:Revathy
*@date:11/03/2021
*******************/
?>
<h3 class="bg-primary text-white text-center">AIRPORT VIEW</h3>
	<form method="" action="">
	<table class=" container-fluid table table-striped table-bordered table-hover ">
	<tr>
	@csrf
     
     <td>Airport Name</td>
     <td>Country</td>
     <td>State</td>
     <td>Contact</td>
     <td>Location</td>
     <td>Action</td>
     
    </tr>
    
@foreach($user as $value)
<tr>
    <td>{{$value['aname']}}</td>
    <td>{{$value['cntry']}}</td>
    <td>{{$value['state']}}</td>
    <td>{{$value['contact']}}</td>
    <td>{{$value['loc']}}</td>
    <!-- <td><a href="update/{{$value['aid']}}">update</a>/ -->
   <td> <a href={{"update/".$value->id}}>update</a>/
    <a href={{"/delete/".$value->id}}>delete</a></td>

</tr>
@endforeach
</table>
@endsection
