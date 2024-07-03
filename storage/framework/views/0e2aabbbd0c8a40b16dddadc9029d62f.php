
<?php $__env->startSection('content'); ?>

<div class="profile d-flex justify-content-between ">
                <div class="imgUsernmae d-flex">
                    <div class="profilePic ml-3"><img src="./images/profilepic.avif" alt=""></div>
                    <span id="username" class="username"></span>

                </div>

                <div class="reactions d-flex flex-column justify-content-center align-items-center ">
                    <i  class="fa-solid fa-heart fa-2xl m-4"></i>
                    <i  class="fa-solid fa-comment fa-2xl m-4 "></i>
                </div>
            </div>
            <div class="follow d-flex justify-content-center">
                 <button ><a href="/follow">follow</a></button>
            </div>

            <div class="mt-5 audio d-flex justify-content-center align-items-center flex-column">
                <div class="audioCover  ">
                    <div class="pausePlay">
                        <i class="fa-solid fa-play" style="color: #ffffff;"></i>
                    <i class="fa-solid fa-pause" style="color: #ffffff;"></i>
                    </div>
                    <img id="srcImg" src="" alt="">
                    <div class="vinyl"></div>
                </div>

                <audio id="audio" loop autoplay>
                    <source id="srcAudio" src="">
                </audio>

                <div id="progress-container">
                    <div id="progress"></div>
                </div>

                <script>
                var token = $('meta[name="csrf-token"]').attr("content");
                var aid = '<?php echo e(Session::get('username')); ?>';
                var spinningCD = document.querySelector(".vinyl");

                const dataToDisplay=[];

                var currentIndex=0;
                var audioElement = document.getElementById("srcAudio");
                var imgElement= document.getElementById("srcImg");
                var username= document.getElementById("username");

                    $.ajax({
                    type:'GET',
                    url:'/homeData',
                    async: false,
                    data:{_token: token,aid:aid},
                    success:function(data){

                        const dataArray = [].concat(...data);
                        dataToDisplay.push(dataArray)
                        console.log(dataToDisplay)
                        
                    }
                    });
                    imgElement.src=`<?php echo e(asset('uploads/thumbnails/${dataToDisplay[0][0].thumbnail}')); ?>`
                    audioElement.src=`<?php echo e(asset('uploads/audios/${dataToDisplay[0][0].audio}')); ?>`
                    username.textContent=dataToDisplay[0][0].aid;
                    let audioE = document.getElementById('audio');
                    let progressE = document.getElementById('progress');
                    var playIcon=document.querySelector(".fa-play")
                    var pauseIcon=document.querySelector(".fa-pause")


                    document.onkeydown = (e) => {
                        e = e || window.event;
                        
                        
                        if (e.keyCode === 38) {
                            if(currentIndex==0){
                                currentIndex=dataToDisplay[0].length-1;
                            }
                            else{
                                currentIndex-=1;
                            }
                            audioE.pause();
                            image=dataToDisplay[0][currentIndex].thumbnail;
                            audio=dataToDisplay[0][currentIndex].audio;
                            aid=dataToDisplay[0][currentIndex].aid;
                            imgElement.src=`<?php echo e(asset('uploads/thumbnails/${image}')); ?>`
                            audioElement.src=`<?php echo e(asset('uploads/audios/${audio}')); ?>`
                            username.textContent=aid;
                            audioE.load();
                            audioE.play();
                            spinningCD.style.animationPlayState = 'running';
                            playIcon.style.display="none"
                            pauseIcon.style.display="inline"
                            
                        } 
                        else if (e.keyCode === 40) {

                            if(currentIndex==dataToDisplay[0].length-1){
                                currentIndex=0;
                            }
                            else{
                                currentIndex+=1;
                            }
                            audioE.pause();
                            image=dataToDisplay[0][currentIndex].thumbnail;
                            audio=dataToDisplay[0][currentIndex].audio;
                            aid=dataToDisplay[0][currentIndex].aid;

                            imgElement.src=`<?php echo e(asset('uploads/thumbnails/${image}')); ?>`
                            audioElement.src=`<?php echo e(asset('uploads/audios/${audio}')); ?>`
                            username.textContent=aid;
                            audioE.load();
                            audioE.play();
                            spinningCD.style.animationPlayState = 'running';
                            playIcon.style.display="none"
        pauseIcon.style.display="inline"
                        } 
                        };

                        audioE.addEventListener('timeupdate', function () {
        let progressValue = (audioE.currentTime / audioE.duration) * 100;
        progressE.style.width = progressValue + '%';
    });
 
                </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\KAM 25\WORK PROFILE\5TH SEMESTER\Web Tech\LARAVEL\12\resources\views/home.blade.php ENDPATH**/ ?>