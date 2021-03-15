@extends('admindashboard')
@section('content')
<?php
/*******************
*@function name:notification
*@function:add notification
*@Author:stefiyajoy
*@date:12/03/2021
*******************/
?>
<form method="get" action="insertnotification" class=" container form-group text-white">

    <center>
        @csrf
        <fieldset>
    
            <h1 class="py-5">Flight notification</h1>
            <label class="bold">select flight number</label> 
            <select name="fno" class="form-select"  >
             @foreach($data as $user)

                 <option value="{{ $user->id }}">{{ $user->fno }}</option>
              @endforeach
      </select>
      <label class="bold">select flight name</label> 
            <select name="flname" class="form-select" value="{{$user->flname}}">
      @foreach($data as $user)
      <option>{{ $user->flname }}</option>
      @endforeach
      </select>

            <label class="bold">Departure date</label> 
            <select name="depdate" class="form-select" value="{{$user->depdate}}">
      @foreach($data as $user)
      <option>{{$user->depdate}}</option>
      @endforeach
      
            </select>
            <br><br>
      @foreach($data as $user)
      <input type="hidden" name="id" value="{{$user->id}}">
      @endforeach
            <!-- <label class="bold">today's date</label> <br>
            <input type="date" name="sdate"><br><br> -->
            <textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>
            <input type="submit" name="submit" value="Notify" class="btn btn-primary">

        </fieldset>
    
    </center>
</form>

@endsection