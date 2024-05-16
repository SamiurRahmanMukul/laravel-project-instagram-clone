<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\post;
use App\Models\follow;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
       $main_account = User::with(['posts','followers','followings'])->where('name','freeCodeGram')->first(); 
       return view('home',compact('main_account'));
    }

    public function follow($following_id, $follower_id){
        $follower = User::find($follower_id);
        $following = User::find($following_id);
        $follower->followings()->attach($following);
        return redirect()->back();
    }

    public function unfollow($following_id, $follower_id){
        $follower = User::find($follower_id);
        $following = User::find($following_id);
        $follower->followings()->detach($following);
        return redirect()->back();
    }

    public function userProfile($id){
        $current_user = User::where('id',$id)->first();
         return view('profile',compact('current_user'));
    }
    
    public function updateProfile($id,Request $request){
        $image = Storage::disk('public')->putFile('users', $request->avatar);
        $user = User::find($id);
        $user->update([
            'avatar' => $image,
            'bio'=>$request->bio,
            'website'=> $request->website
        ]);

        return redirect('/home')->with('success','Profile added');
    }
}
