@extends('layouts.layout')
@section('content')

<div class="profileTab">
            <div class="imgUsername d-flex">
                <div class="profilePic ml-3"><img src="./images/profilepic.avif" alt=""></div>
                <span id="userName" class="username">{{$username}}</span>

            </div>
            <div class="stats ml-2 mr-2 d-flex justify-content-around">
                <div class="posts"><span>{{$posts}}</span>posts</div>
                <div class="followers"><span>{{$followers}}</span>followers</div>
                <div class="following"><span>{{$following}}</span>following</div>
            </div>
            @if($search && $alreadyFollowed==1)
                <div class="follow d-flex justify-content-center mt-4 mb-4">
                <button id="unfollowButton"><a id="aFollow">unfollow</a></button>
                <button style="display:none;" id="followButton"><a id="aFollow">follow</a></button>
            </div>
            @endif
            @if($search && $alreadyFollowed==0)
                <div class="follow d-flex justify-content-center mt-4 mb-4">
                <button id="followButton"><a id="aFollow">follow</a></button>
                <button style="display:none;" id="unfollowButton"><a id="aunFollow">unfollow</a></button>
            </div>
            @endif
            
            <hr>
            <div class="uploads">

            </div>
        </div>
        <script>
            $("#followButton").click(function(e){
                var token = $('meta[name="csrf-token"]').attr("content");

                    var followerID = document.getElementById("userName").innerText;
                    var aid = '{{ Session::get('username');}}';
                    console.log(followerID,aid)


                    $.ajax({
                    type:'GET',
                    url:'/followFromSearch',
                    data:{_token: token,followerID:followerID, aid:aid},
                    success:function(data){
                        document.getElementById("unfollowButton").style.display="block";
                        document.getElementById("followButton").style.display="none";
                    }
                    });
                
            });
            $("#unfollowButton").click(function(e){
                var token = $('meta[name="csrf-token"]').attr("content");

                    var followerID = document.getElementById("userName").innerText;
                    var aid = '{{ Session::get('username');}}';
                    $.ajax({
                    type:'GET',
                    url:'/unfollowFromSearch',
                    data:{_token: token,followerID:followerID, aid:aid},
                    success:function(data){
                        document.getElementById("unfollowButton").style.display="none";
                        document.getElementById("followButton").style.display="block";
                    }
                    });

                
            });

            
        </script>
@endsection