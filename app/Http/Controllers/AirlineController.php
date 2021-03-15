<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Ticketbooking;
use App\Models\Flightdetail;
use App\Models\Register;
use App\Models\Notification;
use App\Models\Airport;
use Carbon\Carbon;

class AirlineController extends Controller
{
    //
    /*******************
*@function name:flightAdd
*@function:insert flight details
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
    public function flightAdd(Request $req)
    {
    $flight=Flightdetail::create([
        'fno'=>$req->fno,
        'flname'=>$req->fname,
        'departure'=>$req->departure,
        'arrival'=>$req->arrival,
        'depdate'=>$req->depdate,
        'arrdate'=>$req->ardate,
        'deptime'=>$req->deptime,
        'arrtime'=>$req->artime,
        'costfirst'=>$req->costfirst,
        'costeconomic'=>$req->costeconomic,
        'costbuisness'=>$req->costbuisness,
        'cfirst'=>$req->cfirst,
        'ceconomic'=>$req->ceconomic,
        'cbuisness'=>$req->cbuisness,
        'afirst'=>$req->cfirst,
        'aeconomic'=>$req->ceconomic,
        'abuisness'=>$req->cbuisness,
        'status'=>'0'
        
    ]);
    return view('flightadd');
    }
    //
    /*******************
*@function name:flightviewad
*@function:view flight details
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
    function flightviewad()
    {
         $data=Flightdetail::all();
        //Get::where('expiration_date', '<', Carbon::now())->delete();
        // $currentDate =date('Y-m-d');
        // $data=Flightdetail::whereDate('depdate', '<=',  $currentDate)->get();;

        
        
        //dd($data); die;
        return view('adviewflight',['udata'=>$data]);
    }

     /*******************
*@function name:deleteflight
*@function:delete flight details
*@Author:Kripa Babu
*@date:10/03/2021
*******************/
    
    function deleteflight($id)
    {
        Flightdetail::where('id',$id)->delete();
        return redirect('flightviewad');

    }
    /*******************
*@function name:updateflightform
*@function:updation form details
*@Author:Kripa Babu
*@date:11/03/2021
*******************/
    function updateflightform($id)
    {
        $data=Flightdetail::find($id);
        return view('updateflightform',['user'=>$data]);

    }

    /*******************
*@function name:updateflight
*@function:flight updation
*@Author:Kripa Babu
*@date:11/03/2021
*******************/
    function updateflight(Request $req,$id)
    {
        Flightdetail::where('id',$id)->update(
            array(
                'fno'=>$req->fno,
                'flname'=>$req->fname,
                'departure'=>$req->departure,
                'arrival'=>$req->arrival,
                'depdate'=>$req->depdate,
                'arrdate'=>$req->ardate,
                'deptime'=>$req->deptime,
                'arrtime'=>$req->artime,
                'costfirst'=>$req->costfirst,
                'costeconomic'=>$req->costeconomic,
                'costbuisness'=>$req->costbuisness,
                'cfirst'=>$req->cfirst,
                'ceconomic'=>$req->ceconomic,
                'cbuisness'=>$req->cbuisness,
                'afirst'=>$req->cfirst,
                'aeconomic'=>$req->ceconomic,
                'abuisness'=>$req->cbuisness,
                'status'=>'0'
        )
    );
        return redirect('flightviewad');
    } 

     /*******************
*@function name:searchflight
*@function:search flight
*@Author:Kripa Babu
*@date:11/03/2021
*******************/

    function searchflight(Request $req)
    {
        $flight=DB::table('flightdetails')->where('departure',$req->departure)
                                        ->where('arrival',$req->arrival)
                                        ->where('depdate',$req->depdate)
                                        ->get();
                                        
        return view('searchflightview',compact('flight'));
        
        

    }
     /*******************
*@function name:book
*@function:booking view
*@Author:Kripa Babu
*@date:11/03/2021
*******************/
  public function book(Request $req)
    {
       
        $uid= $req->session()->get('LoggedUser');
        $fid= $req->fid;
        $req->session()->put('flightid',$fid);
        $class=$req->clas;
        $age= $req->age;
       
        if($class=="First class" && $age>60)
        {
           
        $seat_avl=FlightDetail::where('id',$fid)->select('afirst')->pluck('afirst');
        $cost=FlightDetail::where('id',$fid)->select('costfirst')->pluck('costfirst');
        
        foreach($seat_avl as $seat)
         {
            $seat_avail=$seat-1;
         $var= Flightdetail::where('id',$fid)->update(['afirst'=>$seat_avail]);
        
 
        }
        foreach($cost as $charge)
        {
            $tcharge=$charge-(($charge*10)/100);
            $result= Ticketbooking::create([
                        'class'=>$req->clas,
                        'ticketcharge'=>$tcharge,
                        'flightid'=>$fid,
                        'userid'=>$uid
                        
                    ]);



        }
    }

        if($class=="Economic class" && $age>60)
        {
        $seat_avl=FlightDetail::where('id',$fid)->select('aeconomic')->pluck('aeconomic');
        $cost=FlightDetail::where('id',$fid)->select('costeconomic')->pluck('costeconomic');
        
        foreach($seat_avl as $seat)
         {
            $seat_avail=$seat-1;
         $var= Flightdetail::where('id',$fid)->update(['aeconomic'=>$seat_avail]);
        

        }
        foreach($cost as $charge)
        {
            $tcharge=$charge-(($charge*10)/100);
            $result= Ticketbooking::create([
                        'class'=>$req->clas,
                        'ticketcharge'=>$tcharge,
                        'flightid'=>$fid,
                        'userid'=>$uid
                        
                    ]);



        }
        }
        if($class=="Buisness class" && $age>60)
        {
        $seat_avl=FlightDetail::where('id',$fid)->select('abuisness')->pluck('abuisness');
        $cost=FlightDetail::where('id',$fid)->select('costbuisness')->pluck('costbuisness');
        
        foreach($seat_avl as $seat)
         {
            $seat_avail=$seat-1;
         $var= Flightdetail::where('id',$fid)->update(['abuisness'=>$seat_avail]);
        

        }
        foreach($cost as $charge)
        {
            $tcharge=$charge-(($charge*10)/100);
            $result= Ticketbooking::create([
                        'class'=>$req->clas,
                        'ticketcharge'=>$tcharge,
                        'flightid'=>$fid,
                        'userid'=>$uid
                        
                    ]);



        }
        }
        if($class=="First class" && $age<60)
        {
           
        $seat_avl=FlightDetail::where('id',$fid)->select('afirst')->pluck('afirst');
        $cost=FlightDetail::where('id',$fid)->select('costfirst')->pluck('costfirst');
        
        foreach($seat_avl as $seat)
         {
            $seat_avail=$seat-1;
         $var= Flightdetail::where('id',$fid)->update(['afirst'=>$seat_avail]);
        
 
        }
        foreach($cost as $charge)
        {
            //dd($uid); die;
            $result= Ticketbooking::create([
                        'class'=>$req->clas,
                        'ticketcharge'=>$charge,
                        'flightid'=>$fid,
                        'userid'=>$uid
                        
                    ]);



        }
    }

    if($class=="Economic class" && $age<60)
    {
    $seat_avl=FlightDetail::where('id',$fid)->select('aeconomic')->pluck('aeconomic');
    $cost=FlightDetail::where('id',$fid)->select('costeconomic')->pluck('costeconomic');
    
    foreach($seat_avl as $seat)
     {
        $seat_avail=$seat-1;
     $var= Flightdetail::where('id',$fid)->update(['aeconomic'=>$seat_avail]);
    

    }
    foreach($cost as $charge)
    {
        
        $result= Ticketbooking::create([
                    'class'=>$req->clas,
                    'ticketcharge'=>$charge,
                    'flightid'=>$fid,
                    'userid'=>$uid
                    
                ]);



    }
    }

    if($class=="Buisness class" && $age<60)
        {
        $seat_avl=FlightDetail::where('id',$fid)->select('abuisness')->pluck('abuisness');
        $cost=FlightDetail::where('id',$fid)->select('costbuisness')->pluck('costbuisness');
        
        foreach($seat_avl as $seat)
         {
            $seat_avail=$seat-1;
         $var= Flightdetail::where('id',$fid)->update(['abuisness'=>$seat_avail]);
        

        }
        foreach($cost as $charge)
        {
            
            $result= Ticketbooking::create([
                        'class'=>$req->clas,
                        'ticketcharge'=>$charge,
                        'flightid'=>$fid,
                        'userid'=>$uid
                        
                    ]);



        }
        }

        return view('payment');

      
        

    }
    /*******************
*@function name:booking
*@function:booking view
*@Author:Kripa Babu
*@date:11/03/2021
*******************/

    function booking(Request $req,$id)
    {
       $uid= $req->session()->get('LoggedUser');
       $user=DB::table('registers')->where('registers.id',$uid)
                                    ->get();
        $flight=DB::table('flightdetails')->where('flightdetails.id',$id)
                                        ->get();
    //dd($user); die;
        return view('bookflight',compact('user','flight'));
    }
     /*******************
*@function name:pay
*@function:payment
*@Author:Kripa Babu
*@date:11/03/2021
*******************/
    // function pay()
    // {
    //     return view('pay');
    // }


 /*******************
*@function name:check
*@function:login page(admin and user)
*@Author:Anisha
*@date:10/03/2021
*******************/ 

    public function check(Request $req)
    {
      $req->validate([ 'email'=>'required',
                      'password'=>'required',
                      ]);
      $email=$req->input('email');
      $pass=$req->input('password');
      $userinfo=Register::where('email','=',$req->email)->first();
       if(!$userinfo)
       {
         return back()->with('fail','we cannot  recognize email'); 
       }
       else{
          if(Hash::check($req->password,$userinfo->password))
          {
             
             $req->session()->put('LoggedUser',$userinfo->id);
             $data=['LoggedUserInfo'=>Register::where('id','=',session('LoggedUser'))->first()];
             if($email=='admin@gmail.com'&& $pass=='Admin@123')
             {
             return view('admindashboard',$data);
          }
          else{
            return view('userdashboard',$data);
          }
         }
          else{
            return back()->with('fail','invalid password'); 
          }
   
    }
   
   }
   /*******************
*@function name:register
*@function:registere page
*@Author:Anisha
*@date:10/03/2021
*******************/ 

public function register(Request $req)
    {
        
        $reg=new Register;
        $reg->fname=$req->fname;
        $reg->lname=$req->lname;
        $reg->dob=$req->dob;
        $reg->age=$req->age;
        $reg->gender=$req->gender;
        $reg->address=$req->address;
        $reg->phno=$req->phno;
        $reg->adharno=$req->adno;
        $reg->email=$req->email;
        $reg->password=Hash::make($req->password);
        $query=$reg->save();
        if($query)
        {
           return back()->with('success','successfully registered');
        }
        else{
         return back()->with('fail','something went wrong');
        }
        

 }


 /*******************
*@function name:airportAdd
*@function:insert airport details
*@Author:Revathy
*@date:10/03/2021
*******************/

 public function airportAdd(Request $req)
    {
      
       $airport=Airport::create([
        'aname'=> $req->aname,
        'cntry'=> $req->cntry,
        'state'=> $req->state,
        'contact'=> $req->contact,
        'loc'=> $req->loc,

       ]);
       return view('airportdet');
    }
/*******************
*@function name:data1
*@function:viewing airport details
*@Author:Revathy
*@date:11/03/2021
*******************/

    public function data1()
    {
        $data= Airport::all();
        return view('viewairport',['user'=>$data]);
    }
/*******************
*@function name:deleteairport
*@function:deleting airport details
*@Author:Revathy
*@date:11/03/2021
*******************/


public function deleteairport($id){
    Airport::where('id',$id)->delete();
    return redirect('viewairport');
             
}
/*******************
*@function name:update
*@function:update form of airport details
*@Author:Revathy
*@date:11/03/2021
*******************/


public function update($id)
     {
         $data= Airport::find($id);
         return view('updateairport',['data'=>$data]);
    }
    /*******************
*@function name:update_fun
*@function:update  airport details
*@Author:Revathy
*@date:11/03/2021
*******************/
    public function update_fun(Request $req,$id)
    
    {
        Airport::where('id',$id)->update(
            array(
                'aname'=>$req->aname,
                'cntry'=>$req->cntry,
                'state'=>$req->state,
                'contact'=>$req->contact,
                'loc'=>$req->loc
            ));
        
        
        return redirect('viewairport');
    
    }
 
/*******************
*@function name:notification
*@function:add notification
*@Author:stefiyajoy
*@date:12/03/2021
*******************/
function addnotification()
{   
    
 $data=Flightdetail::all();
 return view('addnotification',compact('data'));
}
function insertnotification(Request $req)
{
     //$ldate = date('Y-m-d H:i:s');
    $Notification=new Notification;
    $curTime = new \DateTime();
    $Notification->notification=$req->notification;
    $Notification->cdate=$curTime->format("Y-m-d H:i:s");
    $Notification->fid=$req->id;

    
    $Notification->save();
    return redirect('addnotification');
}
/*******************
*@function name:notification
*@function:view notification by admin
*@Author:stefiyajoy
*@date:12/03/2021
*******************/

function notificationlist()
{    
 
     
$data = DB::table('notifications')
   ->join('flightdetails','flightdetails.id','=','notifications.fid')
   ->select('flightdetails.fno','flightdetails.flname','flightdetails.departure','flightdetails.arrival','flightdetails.depdate','notifications.notification','notifications.id as id')
  ->get();
 
     return view('viewnotifadmin',compact('data'));
                 
}
/*******************
*@function name:notification
*@function:delete notification
*@Author:stefiyajoy
*@date:12/03/2021
*******************/

  function deletenoti($id)
     {
         $data=Notification::find($id)->delete();
         return redirect('getnoti');
     }
/*******************
*@function name:airportviewuser
*@function:airport details view by user
*@Author:stefiyajoy
*@date:12/03/2021
*******************/

public function airportviewuser()
    {
        $data= Airport::all();
        return view('viewairportuser',['user'=>$data]);
    }

 /*******************
*@function name:dataview
*@function:registered user page  view by admin
*@Author:Anisha
*@date:11/03/2021
*******************/ 

     public function dataview(){
        
        $data= Register::all();
        return view('viewreguser',['user'=>$data]);
     }
     /*******************
*@function name:adminview
*@function:booked user page  view by admin
*@Author:Anisha
*@date:13/03/2021
*******************/ 
     


    public function adminview(Request $req)
{
$id=$req->session()->get('LoggedUser');
$data=DB::table('flightdetails')
  ->join('ticketbookings', 'flightdetails.id', '=', 'ticketbookings.flightid')
  ->join('registers', 'registers.id', '=', 'registers.id')
 // ->where('ticketbookings.userid', $id)
  ->select('registers.id as regid','ticketbookings.id as ticketid','registers.fname','registers.lname','flightdetails.fno','flightdetails.flname','flightdetails.departure','flightdetails.arrival','flightdetails.depdate','flightdetails.arrdate','ticketbookings.ticketcharge')
  ->get();
 // dd($data);die;
  return view('viewbookeduser',compact('data'));
}
/*******************
*@function name:notification
*@function:view notification by user
*@Author:stefiyajoy
*@date:13/03/2021
*******************/
function usernotifylist()
  {    
   
       
 $data = DB::table('notifications')
     ->join('flightdetails','flightdetails.id','=','notifications.fid')
     ->select('flightdetails.fno','flightdetails.flname','flightdetails.departure','flightdetails.arrival','flightdetails.depdate','notifications.notification','notifications.id as id')
    ->get();
   
       return view('usernotifyview',compact('data'));
                   
 }

 
      
 function logout()
 {
    if(session()->has('LoggedUser'))
    {
       session()->pull('LoggedUser');
       return redirect("index");
    }
 }
 /*******************
*@function name:recordview
*@function:viewing single passenger record
*@Author:Revathy
*@date:12/03/2021
*******************/
 
 public function recordview(Request $req)
{
$id=$req->session()->get('LoggedUser');
$data=DB::table('ticketbookings')
  ->select('registers.fname','registers.lname','flightdetails.fno','flightdetails.flname','flightdetails.departure','flightdetails.arrival','flightdetails.depdate','flightdetails.arrdate','ticketbookings.ticketcharge')
  ->join('flightdetails', 'ticketbookings.flightid', '=', 'flightdetails.id')
  ->join('registers', 'ticketbookings.userid', '=', 'registers.id')
  ->where('ticketbookings.userid', $id)
//   ->select('registers.id as regid','ticketbookings.id as ticketid')
  ->get();
  return view('singlerecord',compact('data'));
}
/*******************
*@function name:ticketview
*@function:viewing ticket
*@Author:Revathy
*@date:12/03/2021
*******************/

public function ticketview(Request $req)
{
    $id=$req->session()->get('LoggedUser');
    $flid=$req->session()->get('flightid');
    
    $data=DB::table('ticketbookings')
            ->where('userid',$id)
            ->get();
    
    $flightdetail=DB::table("flightdetails")
        ->where('id',$flid)
        ->get();

        $userdetail=DB::table("registers")
        ->where('id',$id)
        ->get();
   
  return view('viewticket',['ticket'=>$data,'flight'=>$flightdetail,'user'=>$userdetail]);
}

}
   

