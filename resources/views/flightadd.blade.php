@extends('admindashboard')
@section('content')

<!-- //
    /*******************

*@function:add flight details page
*@Author:Kripa Babu
*@date:10/03/2021
*******************/ -->
<CENTER><h1>  FLIGHT DETAILS</h1></CENTER>  
<fieldset>
<form class="container bg-dark text-white" method="post" action="insertflight">
  @csrf
  <div class="form-group">
    <label>Flight Number:</label>
    <input type="text" class="form-control" name="fno">
  </div>

  <div class="form-group mt-2">
    <label>Flight Name:</label>
    <input type="text" class="form-control" name="fname">
  </div>

  <div class="form-group mt-2 col-md-4">
      <label >Departure</label>
      <select  class="form-control" name="departure">
        <option selected>Choose...</option>
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
        <option selected>Choose...</option>
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
    <input type="date" class="form-control" name="depdate">
  </div>
  <div class="form-group">
    <label >Arrival Date:</label>
    <input type="date" class="form-control" name="ardate">
  </div>

  <div class="form-group">
    <label >Departure Time:</label>
    <input type="time" class="form-control" name="deptime">
  </div>

  <div class="form-group">
    <label >Arrival Time:</label>
    <input type="time" class="form-control" name="artime">
  </div>
 <label>Ticket Charge :</label>
  

  <div class="form-group">
    <label >First Class Charge :</label>
    <input type="text" class="form-control" name="costfirst">
  </div>
   <div class="form-group">
    <label >Economic Class Charge :</label>
    <input type="text" class="form-control" name="costeconomic">
  </div>
   <div class="form-group">
    <label >Buisness Class Charge :</label>
    <input type="text" class="form-control" name="costbuisness">
  </div>
  <div>
    
  </div>

  <div class="form-group">
    <label >Seat Capacity:</label>
  </div>
  <div class="form-group">
    <label>First Class:</label>
    <input type="text" class="form-control" name="cfirst">
  </div>
  
  <div class="form-group">
    <label>Economic Class:</label>
    <input type="text" class="form-control" name="ceconomic">
  </div>

  <div class="form-group">
    <label>Buisness Class:</label>
    <input type="text" class="form-control" name="cbuisness">
  </div>
  


  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</fieldset>
@endsection