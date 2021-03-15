@extends('admindashboard')
@section('content')
<?php
/*******************
*@function:update form for airport details 
*@Author:Revathy
*@date:11/03/2021
*******************/
?>
<form action="/updates/{{$data->id}}" method="post">
@csrf
<div>
<h1>Updation Form</h1>

<input type="hidden" name="aid" value="{{$data->id}}">
Airport name:</br><input type="text" name="aname" value="{{$data->aname}}"></br>
Country:</br><input type="text" name="cntry" value="{{$data->cntry}}"></br>
State:</br><input type="text" name="state" value="{{$data->state}}"></br>
Contact:</br><input type="text" name="contact" value="{{$data->contact}}"></br>
Location:</br><input type="text" name="loc" value="{{$data->loc}}"></br>

<input type="submit" value="update">
</div>
</form>
@endsection