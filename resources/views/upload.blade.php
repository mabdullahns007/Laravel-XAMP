@extends('layouts.layout')
@section('content')
<script>
    function validateMP3 () {

    const mp3Input = document.getElementById("files");
    const validationResult = document.getElementById('fileError');
    const label = document.querySelector("label[for=files]");

    // Check if a file is selected
    if (mp3Input.files.length > 0) {
        const fileName = mp3Input.files[0].name;
        const fileExtension = fileName.split('.').pop().toLowerCase();

        file=mp3Input.files[0];
        fileType="AUDIO";
        let dataURL = URL.createObjectURL(file);
        let el = document.createElement(fileType);
        el.src = dataURL;
        el.onloadedmetadata = () => {

        // Check if the file extension is .mp3 and length of file
        if (fileExtension === 'mp3' && Math.abs(el.duration - 12) < 0.5) {

            const fileName = this.files[0]?.name;

            label.innerText = mp3Input.files[0].name ;

            validationResult.textContent = 'Valid MP3 file.';
        } 
        else 
        {
            validationResult.textContent = 'Please select a valid MP3 file.';
            label.innerText="Browse Files";
        }
            
        };

    } else {
        validationResult.textContent = 'Please select an MP3 file.';
        label.innerText="Browse Files";
    }
    }

        function showPreview(event){
        if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
    }
    }

</script>
<div class="uploadTab">
    <form action="/uploadPost" method="POST" enctype="multipart/form-data">
        @csrf
    <header class="d-flex justify-content-around ">
                <div class="input_container">
                    <label for="files" class="btn">Browse Files</label>
                    <input name="audioFile" id="files" onchange="validateMP3()"  style="display:none;" type="file">
                </div>
                <span id="fileError">Please select an MP3 file.</span>
            </header>
            <div class="center d-flex justify-content-center align-items-center">
                <div class="form-input d-flex flex-column justify-content-center align-items-center">
                    <div class="preview mb-3">
                        <img id="file-ip-1-preview">
                    </div>
                    <label for="file-ip-1">Upload Image</label>
                    <input name="thumbnail" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">

                </div>
            </div>
            <div class="uploadButton d-flex justify-content-center align-items-center mt-4">
                <input type="submit"></input>
            </div>
    </form>
        </div>
@endsection