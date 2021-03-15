@extends('admindashboard')
@section('content')

<!-- /*******************
*@function:updation form of flight
*@Author:Kripa Babu
*@date:11/03/2021 -->

<CENTER><h1>  FLIGHT DETAILS</h1></CENTER>  
<fieldset>
<form class="container bg-dark text-white" method="post" action="/updateflight/{{$user->id}}">
  @csrf
  <div class="form-group">
  <input type="hidden" value="{{$user->id}}">
    <label>Flight Number:</label>
    <input type="text" class="form-control" name="fno" value="{{$user->fno}}">
  </div>

  <div class="form-group mt-2">
    <label>Flight Name:</label>
    <input type="text" class="form-control" name="fname" value="{{$user->flname}}">
  </div>

  <div class="form-group mt-2 col-md-4">
      <label >Departure</label>
      <select  class="form-control" name="departure">
        <option selected>{{$user->departure}}</option>
        <option>TVM</option>
              <option>KOCHI</option>
              <option>KANNUR</option>
              <option>KOZHIKODE</option>
              <option>BANGALORE</option>
              <option>MUMBAI</option>
              <option>CHENNAI</option>
      </select>
    </div>


    <div class="form-group col-md-4">
      <label >Arrival</label>
      <select  class="form-control" name="arrival">
        <option selected>{{$user->arrival}}</option>
        <option>TVM</option>
              <option>KOCHI</option>
              <option>KANNUR</option>
              <option>KOZHIKODE</option>
              <option>BANGALORE</option>
              <option>MUMBAI</option>
              <option>CHENNAI</option>
      </select>
    </div>

    <div class="form-group">
    <label >Departure Date:</label>
    <input type="date" class="form-control" name="depdate" value="{{$user->depdate}}">
  </div>
  <div class="form-group">
    <label >Arrival Date:</label>
    <input type="date" class="form-control" name="ardate" value="{{$user->arrdate}}">
  </div>

  <div class="form-group">
    <label >Departure Time:</label>
    <input type="time" class="form-control" name="deptime" value="{{$user->deptime}}">
  </div>

  <div class="form-group">
    <label >Arrival Time:</label>
    <input type="time" class="form-control" name="artime" value="{{$user->arrtime}}" >
  </div>
 <label>Ticket Charge :</label>
  

  <div class="form-group">
    <label >First Class Charge :</label>
    <input type="text" class="form-control" name="costfirst" value="{{$user->costfirst}}">
  </div>
   <div class="form-group">
    <label >Economic Class Charge :</label>
    <input type="text" class="form-control" name="costeconomic" value="{{$user->costeconomic}}">
  </div>
   <div class="form-group">
    <label >Buisness Class Charge :</label>
    <input type="text" class="form-control" name="costbuisness" value="{{$user->costbuisness}}">
  </div>
  <div>
    
  </div>

  <div class="form-group">
    <label >Seat Capacity:</label>
  </div>
  <div class="form-group">
    <label>First Class:</label>
    <input type="text" class="form-control" name="cfirst" value="{{$user->cfirst}}">
  </div>
  
  <div class="form-group">
    <label>Economic Class:</label>
    <input type="text" class="form-control" name="ceconomic" value="{{$user->ceconomic}}">
  </div>

  <div class="form-group">
    <label>Buisness Class:</label>
    <input type="text" class="form-control" name="cbuisness" value="{{$user->cbuisness}}">
  </div>
  


  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</fieldset>
@endsection