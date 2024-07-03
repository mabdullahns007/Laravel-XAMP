<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a0d289f259.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <style>
        @font-face {
            font-family: 'Helvetica Now Display';
            src: url('./font/HelveticaNowDisplay-Bold.eot');
            src: local('Helvetica Now Display Bold'), local('HelveticaNowDisplay-Bold'),
                url('./font/HelveticaNowDisplay-Bold.eot?#iefix') format('embedded-opentype'),
                url('./font/HelveticaNowDisplay-Bold.woff2') format('woff2'),
                url('./font/HelveticaNowDisplay-Bold.woff') format('woff'),
                url('./font/HelveticaNowDisplay-Bold.ttf') format('truetype');
            font-weight: bold;
            font-style: normal;
        }

        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        body {
            background-color: #802bb1;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        nav {
            width: 100vw;
            height: 20vh;
            position: absolute;
            top: 80vh;
        }

        .navbar {
            width: 250px;
            border-radius: 50px;
            height: 12vh;
            color: #d9dfe7;
            background: rgba(255, 255, 255, 0.205);
            border-radius: 30px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(9.4px);
            -webkit-backdrop-filter: blur(9.4px);

        }

        .navbar span {
            display: block;
        }


        .navbar ul li {
            list-style: none;
            text-align: center;
            -webkit-transition: all 100ms ease;
            -moz-transition: all 100ms ease;
            -ms-transition: all 100ms ease;
            -o-transition: all 100ms ease;
            transition: all 100ms ease;
            cursor: pointer;
            margin: 1em;
        }

        .active {
            -moz-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            -o-transform: scale(1.5);
            -ms-transform: scale(1.5);
            transform: scale(1.5);
            text-shadow: 0 0 5px rgb(238, 233, 233);
        }


        .screen {
            width: 100vw;
            height: 100vh;
            position: absolute;
            border-radius: 50px;
        }

        .profilePic {
            width: 6em;
            height: 8em;
        }

        .profilePic img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            clip-path: circle(34.4% at 50% 50%);
        }

        .profile {
            font-family: 'Helvetica Now Display';
            color: #ffffff;

        }

        .profile span {
            padding-top: 1em;
            font-size: 2em;
        }

        .profileTab span {
            padding-top: 1em;
            font-size: 2em;
            font-family: 'Helvetica Now Display';
            color: #ffffff;
        }

        .template {
            width: 400px;
            height: 95vh;
            background-color: rgba(0, 0, 0, 0.241);
            display: flex;
            flex-direction: column;
            border-radius: 20px;
            overflow: hidden;

        }

        .audioCover {
            width: 50%;
            height: 12em;
            position: relative;
            margin-left: 3em;
            margin-top: 0.5em;

        }

        .audioCover img {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            cursor: pointer;
            position: absolute;
            top: 1em;
            z-index: 1;
            left: -41%;
        }

        #progress-container {
            width: 100%;
            height: 3px;
            background-color: #cccccc1b;
            position: relative;
            top: 10.9em;

        }

        #progress {
            width: 0%;
            height: 100%;
            background-color: #e2e0e9;
            position: absolute;
        }

        audio {
            display: none;
        }

        .caption {
            font-family: 'Helvetica Now Display';
            font-size: 0.9em;
            color: #d9dfe7;
        }

        .reactions i {
            cursor: pointer;
        }
        .fa-comment{
            color: rgb(201, 200, 200); 
        }
        .fa-comment:hover{
            color: rgb(255, 255, 255);
            transition: 0.2s color;
        }
        .fa-heart{
            color: rgb(199, 0, 57);
        }
        .fa-heart:hover{
            color: rgb(255, 0, 72);
            transition: 0.2s color;
        }


        .vinyl {
            animation(spin 2s linear infinite);
            transition(all 500ms);
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/83141/vinyl.png'), url('./images/red.jpg');
            background-position: center, center;
            background-size: cover, 70% auto;
            background-repeat: no-repeat;
            border-radius: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            width: 15em;
            height: 15em;
            will-change: transform, left;
            position: absolute;
            top: 0;
            z-index: 0;
            animation: spin 2s linear infinite;
            animation-play-state: running;

        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .follow button {
            width: 100%;
            border: none;
            border-radius: 5px;
            color: #802bb1;
            font-family: 'Helvetica Now Display';
        }
        .follow button a{
            color: #802bb1;
            text-decoration:none;
        }
        .follow button:hover a{
            color: white;
        }

        .follow button:hover {
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(5.2px);
            -webkit-backdrop-filter: blur(5.2px);
            color: white;
            transition: 0.2s color;
            transition: 0.2s background;
            outline: none;

        }

        .follow button:focus {
            outline: none;
        }

        .logout {
            position: absolute;
            left: 80vw;
            top: 88vh;
            width: 10vw;
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-family: 'Helvetica Now Display';
            color: #802bb1;
            cursor: pointer;
            z-index: 1;
            background: rgba(255, 255, 255, 0.21);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            font-size:0.8em;
        }

        .logout:hover {

            background: rgba(255, 255, 255, 0.64);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(4.9px);
            -webkit-backdrop-filter: blur(4.9px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: black;
            transition: 0.2s color;
            transition: 0.2s background;
            outline: none;
        }

        .logout:focus {
            outline: none;
        }

        /* ProfileTab */

        .profileTab {
            display: block;
            width: 400px;
            height: 95vh;
            background-color: rgba(0, 0, 0, 0.241);
            border-radius: 20px;
            overflow: hidden;
        }


        .bio span {
            font-size: 0.8em;
            font-family: 'Arial';
            color: #ffffff;
        }

        .bio {

            display: flex;
            justify-content: center;
            align-items: center;

        }

        .stats span {
            font-size: 1.5em;
            padding-right: 0.2em;
        }

        .stats {
            color: black;
        }
        .profileTab .follow a{
            text-decoration: none;
            color: #802bb1;
        }
        .profileTab .follow button:hover a{
            color: white;
        }

        /* SearchTab  */
        .searchTab {
            display: block;
            width: 400px;
            height: 95vh;
            background-color: rgba(0, 0, 0, 0.241);
            border-radius: 20px;
            overflow: hidden;
        }

        .searchTab form {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            transition: all 1s;
            width: 50px;
            height: 50px;
            background: white;
            box-sizing: border-box;
            border-radius: 25px;
            border: 4px solid white;
            padding: 5px;
        }

        .searchTab input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            ;
            height: 42.5px;
            line-height: 30px;
            outline: 0;
            border: 0;
            display: none;
            font-size: 1em;
            border-radius: 20px;
            padding: 0 20px;
        }

        .searchTab .fa {
            box-sizing: border-box;
            padding: 10px;
            width: 42.5px;
            height: 42.5px;
            position: absolute;
            top: 0;
            right: 0;
            border-radius: 50%;
            color: #07051a;
            text-align: center;
            font-size: 1.2em;
            transition: all 1s;
        }

        .searchTab form:hover,
        .searchTab form:valid {
            width: 200px;
            cursor: pointer;
        }

        .searchTab form:hover input,
        .searchTab form:valid input {
            display: block;
        }

        .searchTab form:hover .fa,
        .searchTab form:valid .fa {
            background: #07051a;
            color: white;
        }


        .searchTab form a {
            display: none;
            position: absolute;
            top: 70px;
            bottom: 0;
            left: 0;
            right: 0;
            font-size: 20px;
            color: white;
            text-align: center;
            width: 100%;
        }

        .searchTab form button{
           border:none;
           padding:3px;
           border-radius:5px;
           color:black;
           font-weight:bold;
        }

        

        /* Upload Tab  */
        .uploadTab {
            display: block;
            width: 400px;
            height: 95vh;
            background-color: rgba(0, 0, 0, 0.241);
            border-radius: 20px;
            overflow: hidden;
        }

        .uploadTab header span {
            margin-top: 2em;
        }

        .uploadTab header .input_container {
            margin: 2em;
        }

        .input_container label {
            border: 1px solid #802bb1;
            background-color: #eee;
            border-radius: 10px;
            padding: 5px 10px;
            font-family: 'Helvetica Now Display';
            transition: .5s;
        }

        .input_container label:hover {
            background-color: #802bb1;
            color: white;
        }

        .center {
            height: 40%;
        }

        .form-input {
            border-radius: 20px;
            width: 350px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .form-input img {
            width: 100%;
            height: 12em;
            display: none;
            border-radius: 20px;
        }

        .form-input input {
            display: none;
        }

        .form-input label {
            display: block;
            width: 45%;
            height: 45px;
            margin: auto;
            line-height: 50px;
            text-align: center;
            background: #500b79;
            color: #fff;
            font-size: 15px;
            font-family: 'Helvetica Now Display';
            text-transform: Uppercase;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-input label:hover{
            background-color: #7100b2;
            color: #fff;
        }

        .preview {
            width: 202px;
            height: 191px;
        }
        .uploadButton input{
            width: 136px;
            height: 45px;
            border-radius: 5px;
            outline: none;
            font-family: 'Helvetica Now Display';
            font-weight: bold;
            text-transform: uppercase;
            font-size: 15px;
            background: rgb(255, 255, 255);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #802bb1;
        }
        .uploadButton input:hover {

            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(5.2px);
            -webkit-backdrop-filter: blur(5.2px);
            color: white;
            transition: 0.2s color;
            transition: 0.2s background;
        outline: none;
        }
        .pausePlay{
            position: absolute;
            top: 6.1em;
            margin-left: 0.6em;
            
            z-index: 5;
        }

        .pausePlay .fa-pause{
            
            cursor: pointer;
        }
        .pausePlay .fa-play{
            cursor: pointer;
            display: none;
        }
        .logout a{
            text-decoration:none;
            color:white;
        }
        .logout:hover a{
            
            color:black;
        }

        #fileError{
            color: white;
        }



    </style>
</head>

<body>

    <div class="screen d-flex justify-content-center align-items-center">


        <div class="template ">
        <?php echo $__env->yieldContent('content'); ?>
        </div>
        <button class="logout"><a href="/logout">logout</a></button>
    </div>

    <nav role="navigation" class="d-flex justify-content-center align-items-center">
        <div class="navbar d-flex justify-content-center align-items-center">
            <ul class="d-flex ">
                
                <li id="link1" class="links"><a style="color:inherit;" href="/dashboard"><i class="fa fa-home "></i></a></li>
                <li id="link2" class="links"><a style="color:inherit;" href="/profile"><i class="fa-solid fa-user"></i></a></li>
                <li id="link3" class="links"><a style="color:inherit;" href="/search"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li id="link4" class="links"><a style="color:inherit;" href="/upload"><i class="fa-solid fa-upload"></i></a></li>
            </ul>
        </div>
    </nav>
    </body>
    <script>
        if(window.location.pathname==="/dashboard"){
            document.getElementById("link1").className+=" active"
        }
        if(window.location.pathname==="/profile"){
            document.getElementById("link2").className+=" active"
        }
        if(window.location.pathname==="/search"){
            document.getElementById("link3").className+=" active"
        }
        if(window.location.pathname==="/upload"){
            document.getElementById("link4").className+=" active"
        }
    let audio = document.getElementById('audio');
    let progress = document.getElementById('progress');


    document.querySelector(".audioCover").onclick = function () {
    var audio = document.getElementById("audio");
    var spinningCD = document.querySelector(".vinyl");
    var playIcon=document.querySelector(".fa-play")
    var pauseIcon=document.querySelector(".fa-pause")
    if (audio.paused) {
        audio.play();
        playIcon.style.display="none"
        pauseIcon.style.display="inline"
        spinningCD.style.animationPlayState = 'running';

    }
    else {
        audio.pause();
        playIcon.style.display="inline"
        pauseIcon.style.display="none"
        spinningCD.style.animationPlayState = 'paused';
    };
};

    
    </script>

</html><?php /**PATH C:\KAM 25\WORK PROFILE\5TH SEMESTER\Web Tech\LARAVEL\12\resources\views/layouts/layout.blade.php ENDPATH**/ ?>