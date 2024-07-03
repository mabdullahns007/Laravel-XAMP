<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    public function submitForm(Request $request)
    {
        $username = $request->input('usernameC'); 
        $password = $request->input('passwordC'); 

        DB::unprepared("insert into account (username, password) values 
        ('$username','$password')");
        session(['username'=>$username]);
        return redirect('/dashboard'); 
    }
    public function loginForm(Request $request)
    {
        $username = $request->input('usernameL'); 
        $password = $request->input('passwordL'); 

        $users_count = DB::table('account')->where('username', '=', $username)->where('password', '=', $password)->count();
        if($users_count==1){
            session(['username'=>$username]);
            return redirect('/dashboard');
        }
        else{
            return redirect('/')->with('status', 'Invalid Username or Password');
        }

         
    }
    public function profileHandle()
    {
        if(session("username")){
            $aid=DB::table('account')->where("username",session("username"))->value('aid');
            $followers = DB::table('followers')->where('aid', $aid)->count();        
            $following = DB::table('following')->where('aid', $aid)->count();        
            $posts = DB::table('posts')->where('aid', $aid)->count(); 
            return view("profile",['followers'=>$followers, 'following'=>$following, 'posts'=>$posts,'username'=>session("username"), 'search'=>false,'alreadyFollowed'=>false]);
        }
        else{
            return redirect('/');
        }
        
    }
    public function uploadPost(Request $request){
        if(session("username")){
        $thumbnail=$request->file("thumbnail");
        $audioFile=$request->file("audioFile");

        $thumbnail->move(public_path('uploads/thumbnails'),$thumbnail->getClientOriginalName());
        $audioFile->move(public_path('uploads/audios'), $audioFile->getClientOriginalName());
        $thumbName=$thumbnail->getClientOriginalName();
        $audioName=$audioFile->getClientOriginalName();
        //get account id
        $aid=DB::table('account')->where("username",session("username"))->value('aid');
        //insert post record into db
        DB::unprepared("insert into posts (aid, thumbnail, audio) values 
        ('$aid','$thumbName','$audioName')");
        return redirect('/upload'); 
            }
            else{
                return redirect('/');
            }
    }

    public function searchAccount(Request $request){
        if(session("username")){
        $search=$request->input("search");
        //check if the current user already follows searched user or not
        $aidd=DB::table('account')->where("username",session("username"))->value('aid');
        $alreadyFollowed = DB::table('following')->where('_FollowingID', '=', $search)->where('aid', '=', $aidd)->count();

        //check if account is available or not
        $users_count = DB::table('account')->where('username', '=', $search)->count();
        if($users_count==1){
            $aid=DB::table('account')->where("username",$search)->value('aid');
            $followers = DB::table('followers')->where('aid', $aid)->count();        
            $following = DB::table('following')->where('aid', $aid)->count();        
            $posts = DB::table('posts')->where('aid', $aid)->count(); 
            return view("profile",['followers'=>$followers, 'following'=>$following, 'posts'=>$posts, 'username'=>$search, 'search'=>true,'alreadyFollowed'=>$alreadyFollowed]);
        }
        else{
            return redirect('/search');
        }
        }
        else{
            return redirect('/');
        }
    }


    public function followSearch(Request $request){
        $followerId = $request->input("followerID");
        $currentUser = $request->input("aid");

        $aid=DB::table('account')->where("username",$currentUser)->value('aid');
        $otherAccount=DB::table('account')->where("username",$followerId)->value('aid');


        DB::unprepared("insert into followers (_followerID, aid) values 
        ('$currentUser','$otherAccount')");

        DB::unprepared("insert into following (_FollowingID, aid) values 
        ('$followerId','$aid')");

        return 'success';
    }

    public function unfollowSearch(Request $request){
        $followerId = $request->input("followerID");
        $currentUser = $request->input("aid");

        $aid=DB::table('account')->where("username",$currentUser)->value('aid');
        $otherAccount=DB::table('account')->where("username",$followerId)->value('aid');


        DB::unprepared("delete from following where aid =$aid");
        DB::unprepared("delete from followers where aid =$otherAccount");


        return 'success';
    }   
    public function homeData(Request $request){
        $currentUser = $request->input("aid");

        $aid=DB::table('account')->where("username",$currentUser)->value('aid');
        $following = DB::table('following')->where('aid',$aid)->get();
        $posts=array();
        $usernames=array();


        for($i=0;$i<count($following);$i++){
            $aidP=DB::table('account')->where("username",$following[$i]->_FollowingID)->value('aid');
            $username=DB::table('account')->where("username",$following[$i]->_FollowingID)->value('username');
            $userPosts=DB::table('posts')->where('aid',$aidP)->get();
            array_push($posts,$userPosts);
        }


        return $posts;
    } 
    public function logout(Request $request){
        session()->flush();
        return redirect('/');
    }
    
    public function admin(){
        $users=DB::table('account')->count();
        $posts=DB::table('posts')->count();

        return view('admin',['users'=>$users,'posts'=>$posts]);
    }
}
