@extends('userdashboard')
@section('content')


<!-- /*******************
*@function:booking view
*@Author:Kripa Babu
*@date:11/03/2021
*******************/ -->

  <CENTER><h1> Book Ticket</h1></CENTER>  
<fieldset>
<form class="container" method="post" action="{{url('book')}}">
  @csrf  
  <div class="frm">
    <table>
        <tr>
        <th>PERSONAL DETAILS</th></tr>
        <tr>
      @foreach($user as $users)
            <td>First Name:</td><td><input type="text" name="fname" value="{{$users->fname}}"></td>
     
            <td>Last Name:</td><td><input type="text" name="lname" value="{{$users->lname}}"></td>
            <td>Age:</td><td><input type="age" name="age" value="{{$users->age}}"></td>
        </tr>
        <tr>
            <td>Email:</td><td><input type="text" name="email" value="{{$users->email}}"></td>
            <td>phone number:</td><td><input type="text" name="phnno" value="{{$users->phno}}"></td>
        </tr>
        @endforeach
        <tr>
        @foreach($flight as $flights)
        
        <th>Trip Information</th></tr>
        <tr>
        <input type="hidden" value="{{$flights->id}}" name="fid">
            <td>Flight no:</td><td><input type="text" name="fno" value="{{$flights->fno}}"></td>
            <td>Flight Name:</td><td><input type="text" name="fname" value="{{$flights->flname}}"></td>
        </tr>
        
        <tr>
            <td>departure place:</td><td><input type="text" name="depp" value="{{$flights->departure}}"></td>
            <td>arrival place:</td><td><input type="text" name="arvv" value="{{$flights->arrival}}"></td>
        </tr>
        <tr>
            <td>departure time:</td><td><input type="time" name="deptime" value="{{$flights->deptime}}"></td>
            <td>arrival time:</td><td><input type="time" name="arvtime" value="{{$flights->arrtime}}"></td>
        </tr>
        <tr>
            <td>departure date:</td><td><input type="date" name="depdat" value="{{$flights->depdate}}"></td>
            <td>arrival date:</td><td><input type="date" name="arvdate" value="{{$flights->arrdate}}"></td>
        </tr>
        <input type="hidden" name="costfirst" value="{{$flights->cfirst}}">
        <input type="hidden" name="costeconomic" value="{{$flights->ceconomic}}">
        <input type="hidden" name="costbuisness" value="{{$flights->cbuisness}}">
        

         <tr>
         @if($flights->afirst<=0 && $flights->aeconomic<=0)
                   
                    <td>Select Class<select name="clas">
                        <option></option>
                        <option>Buisness class</option>
                    </select></td>
                
                

            
        </tr>

      
            <tr>
        
          @elseif ($flights->afirst<=0 && $flights->abuisness<=0)
            
            
                   

            <td>Select Class<select name="clas">
                        <option></option>
                         <option>Economic class</option>
                    </select></td>
            </tr>
            
           
             <tr>
             @elseif ($flights->aeconomic<=0 && $row->flights<=0)

            <td>Select Class<select name="clas">
                        <option></option>
                         <option>First class</option>
                    </select></td>
                  
            </tr>
                
            
            
        </tr>
                <tr>
                @elseif($flights->afirst<=0)
            
                    <td>Select Class<select name="clas">
                        <option></option>
                        <option>Economic class</option>
                        <option>Buisness class</option>
                    </select></td>
                  
                

            
        </tr>
       
        <tr>
        @elseif ($flights->aeconomic<=0)
            <td>Select Class<select name="clas">
                <option></option>
            <option>First class</option>
            <option>Buisness class</option>
            </select></td>
         
            
        
    </tr>
   
    <tr>
    @elseif ($flights->abuisness<=0)
       
            <td>Select Class<select name="clas">
                <option></option>
            <option>First class</option>
            <option>Economic class</option>
            
            </select></td>
            
            
        
    </tr>
    
            <tr>
            @else
       
            <td>Select Class<select name="clas">
                <option></option>
            <option value="First class">First class</option>
            <option value="Economic class">Economic class</option>
            <option value="Buisness class">Buisness class</option>
            
            </select></td>
            @endif
            
        
    </tr> 

        <input type="hidden" name="id" value="{{$flights->id}}">
        <tr>
            <td></td><td></td><td><input type="submit" name="submit"></td>
        </tr>

        @endforeach
    </table>

</form>
</fieldset>
</body>
</html>

@endsection
