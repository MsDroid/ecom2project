<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\DB;



class userController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function signup(){
        return view('register');
    }

    public function ulogin(){
        return view('login');
    }
     

    public function register(Request $req){
        // print_r($req->all());
     
        //custom message
        $messages = [
            'name.required' => 'Pls enter Your Name ',
            'email.required' => 'Pls enter Your Email ',
            'password.required' => 'Pls enter alpha numeric password ',
 		    ];

        // Validation     
        $this->validate($req,[
            'name'=>'required|unique:users|max:25',
            'email'=>'required| email | max:255 | unique:users',
            'password'=>'required|alpha_num|min:3'
            ],$messages);

        $users = new users;
        $users->name=$req->input('name');
        $users->email=$req->input('email');
        $users->password=Hash::make($req->password);
        $users->save();
        return redirect('/')->with('message','Successfull Registered !');
    }


    public function userlogin(Request $req)
        {
        # code...
    //   return $req->all();
        // print_r($req->all());
        $this->validate($req,[
            'email'=>'required| max:255',
            'password'=>'required|alpha_num|min:3'
            ]);
            
        $users = new Users;
        $users = Users::where(['email' =>$req->email])->first();    
        
        if(count([$users])>0){
		 	
			if (Hash::check($req->password, $users->password)){
				
                $req->session()->put('users',$users);
					
			    return Redirect::route('home')->with('message', 'Success!');
			}else{
			
		 	 	return Redirect::route('home')->with('message', 'Invalid Password!');
		 	}
			
		 }else{
		 	 return Redirect::route('home')->with('message', 'Invalid Username/Password !');
		 }

        }

        public function update(){

        }
}
