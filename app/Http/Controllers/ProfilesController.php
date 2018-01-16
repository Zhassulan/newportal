<?php

namespace app\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Profile;

class ProfilesController {
	
	public function show() {
		//
		$user = Auth::user();
		//$user = User::whereId(Auth::user()->id);
		return view( 'profile' )->with ( ['user' => $user] );
	}
	
	public function profile() {
		return $this->hasOne ( 'Profile' );
	}
	
	public function add(Request $request) {
		
		$validatedData = $request->validate([
				//'name' => 'required|unique:posts|max:255',
				'name' => 'required|max:255',
				'email' => 'required|max:255',
				'pwd' => 'required|min:6|max:255',
				'pwd_confirmed' => 'required|same:pwd|min:6|max:255',
		]);
		
		//redirect('home/dashboard');
		//route('profile');
		$user = Auth::user();
		$user->name = Input::get('name');
		$user->password = Input::get('pwd');
		$user->save();
		
		$profile = new Profile();
		$profile->user_id = $user->id;
		$profile->save();
		
		return back()->withInput();
	}
	
}

