<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twelve ♪</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            background-color: #2D283E;
            overflow-x: hidden;

        }

        nav img {
            width: 150px;
        }

        nav ul {
            color: #D1D7E0;
            list-style: none;
            font-size: 18px;
            font-family: 'Arial';
        }

        nav ul li {
            border-bottom: solid 3px #802BB1;
        }

        section img {
            width: 750px;
            height: 500px;
            filter: drop-shadow(20px 0px #802BB1);
           
            
        }

        section .punchline {

            color: #802BB1;
            font-family: 'Helvetica Now Display';
            margin-top: 80px;
            margin-left: 120px;
        }

        section h2 {
            font-size: 35px;
        }

        section h3 {
            font-size: 55px;
        }

        section .punchline span {
            color: #D1D7E0;
        }

        .box {
            width: 50vw;
            margin-right: 10%;
            margin-top: 5%;
            margin-bottom: 3%;

        }

        main {
            background: #DA22FF;
            background: -webkit-linear-gradient(to bottom, #9733EE, #DA22FF);
            background: linear-gradient(to bottom, #9733EE, #DA22FF);

            color: #D1D7E0;
            border-radius: 30px;
            margin-right: 2em;
            margin-left: 2em;
        }

        .music-container {
            padding-top: 50px;
        }

        .music-container img {
            width: 100px;
            height: 100px;
        }

        .animated-element {
            opacity: 0;
            transform: translateX(100%);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }

        .animated {
            opacity: 1;
            transform: translateX(0);
            /* Slide in from the right */
        }

        .chooseUs h2 {
            font-family: 'Helvetica Now Display';
            color: #802BB1;
        }

        .chooseUs p {
            font-family: 'Arial';
            color: #D1D7E0;
            font-size: 20px;
        }

        .items img {
            width: 150px;
            height: 150px;
            border-radius: 25px;
        }

        .items {
            text-align: center;
        }

        .type h1 {
            font-family: 'Helvetica Now Display';
            color: #802BB1;
        }

        .type p {
            font-family: 'Arial';
            color: #D1D7E0;
            font-size: 20px;
        }

        .types span {
            color: #D1D7E0;
            font-size: 20px;
            font-family: 'Helvetica Now Display';
        }

        .text-container {
            background: #7F00FF;
            background: -webkit-linear-gradient(to bottom, #E100FF, #7F00FF);
            background: linear-gradient(to bottom, #E100FF, #7F00FF);
            overflow: hidden;
            color: #D1D7E0;

        }

        nav li:hover {
            cursor: pointer;
            color: white;
            border-bottom: solid 3px #a812ff;
        }

        .text-container:hover {
            background-color: #6f6d7e;
        }

        #divTAReviews {
            width: 100vw;
            height: 10vh;
            animation: movingTopToBottom 2s linear infinite;
            position: relative;
            display: inline-block;
            text-align: center;
        }

        @keyframes movingTopToBottom {
            0% {
                top: -280px;
            }

            95% {
                top: 200px;
            }

            100% {
                top: 200px;
            }
        }

        .text-container h1 {
            padding: 150px;
            text-align: center;
        }

        .imgItem img {
            width: 25vw;
            height: 70vh;
            border-radius: 20px;
        }

        .imgItem {
            margin: 15px;
            position: relative;
            font-family: 'Helvetica Now Display';
        }

        .image-text {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #802bb1e8;
            color: white;
            display: flex;
            padding-left: 1em;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 1.5em;
            border-radius: 20px;
        }

        .imgItem:hover .image-text {
            opacity: 1;
            transform: perspective(600px) rotatex(20deg);
            transition: 0.4s transform;
        }

        footer {
            font-family: 'Arial';
            color: white;
        }

        footer .icons {
            background-color: #802BB1;
        }

        footer .bottom {
            background-color: #802bb1b9;
        }

        .icons i {
            color: white;
        }

        .icons i:hover {
            color: black;
            transition: 0.3s color;
        }

        .overlay {
            opacity: 0;
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 60%;
            width: 40vw;
            height: 100vh;
            background-color: white;
            font-family: 'Helvetica Now Display';
        }

        .Model {
            text-align: center;
        }

        .Model form {
            display: flex;
            flex-direction: column;
        }

        .Model input[type=password],
        .Model input[type=username] {
            border: solid 2px rgba(179, 171, 171, 0.446);
            border-radius: 15px;
            font-family: 'Arial';
        }

        .closeIcon img {
            margin: 10px;
            width: 20px;
            position: absolute;
            top: 0;
            left: 36vw;
            cursor: pointer;

        }

        .closeIcon img:hover {
            width: 23px;
            transition: 0.2s width;
        }

        .secondaryButton {
            font-weight: 500;
            font-size: 18px;
            text-transform: uppercase;
            border-radius: 15px;
            border: none;
            color: white;
            background-color: #802BB1;

        }

        .secondaryButton:hover {
            background-color: #7800bd;
            transition: 0.3s background-color;
        }

        .overlayStyle {
            position: absolute;
            top: 58vh;
            left: 18vw;
        }

        @mixin box-shadow() {
            box-shadow: inset 0px 0px 16px -2px rgba(0, 0, 0, 0.15);
        }

        .music {
            position: relative;
            width: 180px;
            height: 160px;
            border: 8px solid #D1D7E0;
            border-bottom: 0px;
            border-top-left-radius: 110px;
            border-top-right-radius: 110px;

            &:before,
            &:after {
                content: '';
                position: absolute;
                bottom: -20px;
                width: 40px;
                height: 82px;
                background-color: #D1D7E0;
                border-radius: 15px;
            }

            &:before {
                right: -25px;
            }

            &:after {
                left: -25px;
            }
        }

        .line {
            position: absolute;
            width: 6px;
            min-height: 30px;
            transition: .5s;
            animation: equalize 4s 0s infinite;
            animation-timing-function: linear;
            vertical-align: middle;
            bottom: 0 !important;
            box-shadow;
        }

        .line1 {
            left: 30%;
            bottom: 0px;
            animation-delay: -1.9s;
            background-color: #ff5e50;
        }

        .line2 {
            left: 40%;
            height: 60px;
            bottom: -15px;
            animation-delay: -2.9s;
            background-color: #a64de6;
        }

        .line3 {
            left: 50%;
            height: 30px;
            bottom: -1.5px;
            animation-delay: -3.9s;
            background-color: #5968dc;
        }

        .line4 {
            left: 60%;
            height: 65px;
            bottom: -16px;
            animation-delay: -4.9s;
            background-color: #27c8f8;
        }

        .line5 {
            left: 70%;
            height: 60px;
            bottom: -12px;
            animation-delay: -5.9s;
            background-color: #cc60b5;
        }


        @keyframes equalize {
            0% {
                height: 48px;
            }

            4% {
                height: 42px;
            }

            8% {
                height: 40px;
            }

            12% {
                height: 30px;
            }

            16% {
                height: 20px;
            }

            20% {
                height: 30px;
            }

            24% {
                height: 40px;
            }

            28% {
                height: 10px;
            }

            32% {
                height: 40px;
            }

            36% {
                height: 48px;
            }

            40% {
                height: 20px;
            }

            44% {
                height: 40px;
            }

            48% {
                height: 48px;
            }

            52% {
                height: 30px;
            }

            56% {
                height: 10px;
            }

            60% {
                height: 30px;
            }

            64% {
                height: 48px;
            }

            68% {
                height: 30px;
            }

            72% {
                height: 48px;
            }

            76% {
                height: 20px;
            }

            80% {
                height: 48px;
            }

            84% {
                height: 38px;
            }

            88% {
                height: 48px;
            }

            92% {
                height: 20px;
            }

            96% {
                height: 48px;
            }

            100% {
                height: 48px;
            }
        }
        #createError{
            font-size: 0.8em;
        }
    </style>
</head>

<body id="123">
    <div class="overlay animate__animated">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#802BB1" fill-opacity="1"
                d="M0,128L48,106.7C96,85,192,43,288,64C384,85,480,171,576,186.7C672,203,768,149,864,117.3C960,85,1056,75,1152,85.3C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="Model">
            <div onclick="closeLoginForm()" class="closeIcon"> <img src="./images/close.png" alt="" /> </div>

            <h2 class="">LOGIN</h2>

            <form class="p-3" method="POST" action="/login">
                @csrf
                <input class="m-3 p-3" type="username" id="usernameL" name="usernameL" placeholder="username"
                    required="true" />

                <input class="m-3 p-3" type="password" id="passwordL" name="passwordL" placeholder="password"
                    required="true" />

                <input class="secondaryButton m-3 p-3" type="submit" />
            </form>
            <p id="loginError">{{ session('status') }}</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#802BB1" fill-opacity="1"
                d="M0,160L40,160C80,160,160,160,240,144C320,128,400,96,480,101.3C560,107,640,149,720,176C800,203,880,213,960,218.7C1040,224,1120,224,1200,202.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </div>
    <div class="overlay animate__animated createAccount">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#802BB1" fill-opacity="1"
                d="M0,128L48,106.7C96,85,192,43,288,64C384,85,480,171,576,186.7C672,203,768,149,864,117.3C960,85,1056,75,1152,85.3C1248,96,1344,128,1392,144L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="Model">
            <div onclick="closeCreateAccountForm()" class="closeIcon"> <img src="./images/close.png" alt="" /> </div>

            <h2 class="">CREATE ACCOUNT</h2>

            <form class="p-3" onsubmit="return validateCreateAccount()" action="/createAccount" method="POST">
                 @csrf
                <input class="m-3 p-3" type="username" id="usernameCreate" name="usernameC" placeholder="username"
                    required="true" />

                <input class="m-3 p-3" type="password" id="passwordCreate" name="passwordC" placeholder="password"
                    required="true" />

                <input class="m-3 p-3" type="password" id="confirmPassword" name="password"
                    placeholder="confirm password" required="true" />

                <input class="secondaryButton m-3 p-3" type="submit" />
            </form>
            <p id="createError"></p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#802BB1" fill-opacity="1"
                d="M0,160L40,160C80,160,160,160,240,144C320,128,400,96,480,101.3C560,107,640,149,720,176C800,203,880,213,960,218.7C1040,224,1120,224,1200,202.7C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </div>

    <nav class="d-flex justify-content-between">
        <img src="{{ asset('images/logo.png') }}" alt="">
        <ul class="d-flex align-items-center ">
            <li onclick="openLoginForm()" class="mr-5">Login</li>
            <li onclick="openCreateAccountForm()" class="mr-5">Create Account</li>
        </ul>
    </nav>
    <section class="d-flex justify-content-center">
        <div class="overlayStyle">
            <div class="music">
                <span class="line line1"></span><span class="line line2"></span><span class="line line3"></span><span
                    class="line line4"></span><span class="line line5"></span>
            </div>
        </div>
        <div class="punchline d-flex flex-column animate__animated animate__fadeInDown animate__repeat-1">
            <h2 class="animate__animated animate__bounceInDown animate__repeat-1">Where the <span>magic</span> happens
                in</h2>
            <h3><span>12 heartbeats</span></h3>
        </div>
        <div class="img">
            <img src="{{ asset('images/girl.png') }}" alt="girl with headphones">
        </div>
    </section>
    <main class="d-flex justify-content-end">
        <div class="music-container animate__animated animate__tada animate__infinite">
            <img src="{{ asset('images/music.png') }}" alt="">
        </div>
        <div class="box">
            <h1 class="">At 12, we make sharing your audio creations a breeze. Whether it's music, spoken word, or any
                other sound, your 12-second snippets will captivate your audience. Just record, upload, and let the
                world hear your voice.</h1>
        </div>
    </main>
    <div class="chooseUs d-flex justify-content-between pt-5 pr-3 pl-3 mt-5">
        <div class="columns d-flex flex-column m-5 ">
            <h2 class="">Why Choose Us</h2>
            <p class="">Dive into a world of soundscapes. Explore trending audio, leave comments, and engage with
                creators. The fun doesn't stop at sharing; it extends to discovering unique, inspiring audio content.
            </p>
        </div>
        <div class="columns d-flex flex-column m-5">
            <h2>User-Friendly</h2>
            <p>12's intuitive interface makes uploading and sharing audio a delight.</p>
            <h2>Community</h2>
            <p>Join a vibrant community of creators, artists, and storytellers.</p>
        </div>
        <div class="columns d-flex flex-column m-5">
            <h2>Discoverability</h2>
            <p>Explore new and exciting audio content effortlessly.</p>
            <h2>Simplicity</h2>
            <p>It takes just 12 seconds to share your brilliance with the world.</p>

        </div>
    </div>
    <div class="type d-flex flex-column ">
        <div class="text d-flex flex-column justify-content-center align-items-center p-5 m-5">
            <h1>Real audio, real impact.</h1>
            <p>We're all about brevity and impact, and our 12-second format sets us apart.</p>
        </div>
        <div class="types d-flex justify-content-around pb-5">
            <div class="items">
                <div class="img"><img src="{{ asset('images/1.webp') }}" alt=""></div><span>Electronica &amp Dance</span>
            </div>
            <div class="items">
                <div class="img"><img src="{{ asset('images/2.webp') }}" alt=""></div><span>Film</span>
            </div>
            <div class="items">
                <div class="img"><img src="{{ asset('images/3.webp') }}" alt=""></div><span>Pop</span>
            </div>
            <div class="items">
                <div class="img"><img src="{{ asset('images/4.webp') }}" alt=""></div><span>Hip Hop</span>
            </div>
            <div class="items">
                <div class="img"><img src="{{ asset('images/5.webp') }}" alt=""></div><span>Voice Acting</span>
            </div>
            <div class="items">
                <div class="img"><img src="{{ asset('images/6.webp') }}" alt=""></div><span>Acoustic</span>
            </div>
        </div>
    </div>

    <div class="text-container mt-5 mb-5">
        <h1 class="animated-element "> Musicians, podcasters, comedians, and more - we welcome all creators.</h1>
    </div>

    <div class="images d-flex justify-content-center mt-5 pt-5">
        <div class="imgItem"><img src="{{ asset('images/signup.jpg') }}" alt="">
            <div class="image-text">
                Unlock the world of sound. Join now!
            </div>
        </div>
        <div class="imgItem"><img src="{{ asset('images/upload.jpg') }}" alt="">
            <div class="image-text">
                Share your 12-second audio creation with the world.
            </div>
        </div>
        <div class="imgItem"><img src="{{ asset('images/explore.jpg') }}" alt="">
            <div class="image-text">
                Dive into a world of captivating 12-second audio clips from across the globe. Discover, listen, and be
                inspired.
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 319">
        <path fill="#802BB1" fill-opacity="1"
            d="M0,192L48,186.7C96,181,192,171,288,176C384,181,480,203,576,181.3C672,160,768,96,864,106.7C960,117,1056,203,1152,202.7C1248,203,1344,117,1392,74.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <footer class="d-flex flex-column">
        <div class="icons d-flex justify-content-center align-items-center pt-5 pb-3">
            <a href="#"><i class="fab fa-2xl fa-facebook-f m-2"></i></a>
            <a href="#"><i class="fab fa-2xl fa-twitter m-2"></i></a>
            <a href="#"><i class="fab fa-2xl fa-instagram m-2"></i></a>
        </div>
        <div class="bottom d-flex justify-content-center align-items-center pt-3 pb-3">
            <span>©Copyright Twelve.com</span>
        </div>
    </footer>
    <script>
        const animatedElement = document.querySelector('.animated-element');
        window.addEventListener('scroll', () => {
        const scrollPosition = window.scrollY + window.innerHeight;
        const elementPosition = animatedElement.offsetTop + animatedElement.offsetHeight / 2;

        if (scrollPosition > elementPosition) {
            animatedElement.classList.add('animated');
        }
    });


        var overlay = document.querySelector(".overlay");
        var createAccount = document.querySelector(".createAccount");

        function openLoginForm() {
            overlay.classList.remove("animate__fadeOutRight");
            overlay.classList.add("animate__fadeInRight");
            overlay.style.opacity = "1";
            overlay.style.pointerEvents = "auto";
            document.querySelector("section img").style.filter = "none";
            document.getElementById("123").style.overflowY = "hidden";
        }

        function closeLoginForm() {
            overlay.classList.remove("animate__fadeInRight");
            overlay.classList.add("animate__fadeOutRight");
            overlay.style.opacity = "0";
            overlay.style.pointerEvents = "none";
            document.querySelector("section img").style.filter = "drop-shadow(20px 5px #802BB1)";
            document.getElementById("123").style.overflowY = "visible";
        }
        function openCreateAccountForm() {
            createAccount.classList.remove("animate__fadeOutRight");
            createAccount.classList.add("animate__fadeInRight");
            createAccount.style.opacity = "1";
            createAccount.style.pointerEvents = "auto";
            document.querySelector("section img").style.filter = "none";
            document.getElementById("123").style.overflowY = "hidden";
        }

        function closeCreateAccountForm() {
            document.querySelector(".createAccount").classList.remove("animate__fadeInRight");
            document.querySelector(".createAccount").classList.add("animate__fadeOutRight");
            document.querySelector(".createAccount").style.opacity = "0";
            document.querySelector(".createAccount").style.pointerEvents = "none";
            document.querySelector("section img").style.filter = "drop-shadow(20px 5px #802BB1)";
            document.getElementById("123").style.overflowY = "visible";
            
        }
        function validateCreateAccount(){
            username=document.getElementById("usernameCreate").value;
            password=document.getElementById("passwordCreate").value;
            confirmPassword=document.getElementById("confirmPassword").value;
            error=document.getElementById("createError")
            expUsername=/^[a-z]{6}[!@#$%^&*()]{2}$/;
            expPassword=/^[a-z]{6}[!@#$%^&*()]{2}$/;
            if (!expUsername.test(username)) {
                error.innerHTML="Invalid username. Please enter exactly 6 small letters followed by 2 special symbols.";
                return false
            }

            else if (!expPassword.test(password)) {
                error.innerHTML="Invalid password. Please enter exactly 6 small letters followed by 2 special symbols.";
                return false
            }

            else if (password !== confirmPassword) {
                error.innerHTML="Passwords do not match. Please ensure the passwords match.";
                return false
            }
}
@if(session('status')=='Invalid Username or Password')
    openLoginForm()
@endif    


    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a0d289f259.js" crossorigin="anonymous"></script>
</body>

</html>