@extends('layout')

@section('content')

	
<div class="homepage py-4">
	<div style="position: relative; width: 500px; height: 300px;">
	  <video id="video" src="{{ asset('videos/front-vid1.mp4') }}" autoplay loop muted style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></video>
	  <video id="video0" src="{{ asset('videos/not-moving.mp4') }}" autoplay loop muted style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></video>
	</div>


	<div style="position: relative; width: 500px; height: 300px;">
	  <video id="video1" src="{{ asset('videos/not-moving.mp4') }}" autoplay loop muted style="position: absolute; top: -100%; left: 100%; width: 100%; height: 100%;"></video>
	  <video id="video2" src="{{ asset('videos/front-vid1.mp4') }}" autoplay loop muted style="position: absolute; top: -100%; left: 100%; width: 100%; height: 100%; display: none;"></video>
	</div>


	<div style="position: relative; width: 500px; height: 300px;">
	  <video id="video3" src="{{ asset('videos/not-moving.mp4') }}" autoplay loop muted style="position: absolute; top: -200%; left: 199.9%; width: 100%; height: 100%;"></video>
	  <video id="video4" src="{{ asset('videos/front-vid1.mp4') }}" autoplay loop muted style="position: absolute; top: -200%; left: 199.9%; width: 100%; height: 100%; display: none;"></video>
	</div>


	<div style="position: relative; width: 500px; height: 300px;">
	  <video id="video5" src="{{ asset('videos/not-moving.mp4') }}" autoplay loop muted style="position: absolute; top: -300%; left: 299.7%; width: 100%; height: 100%;"></video>
	  <video id="video6" src="{{ asset('videos/front-vid1.mp4') }}" autoplay loop muted style="position: absolute; top: -300%; left: 299.7%; width: 100%; height: 100%; display: none;"></video>
	</div>


	<div style="position: relative; width: 500px; height: 300px;">
	  <video id="video7" src="{{ asset('videos/not-moving.mp4') }}" autoplay loop muted style="position: absolute; top: -400%; left: 399.6%; width: 100%; height: 100%;"></video>
	  <video id="video8" src="{{ asset('videos/front-vid1.mp4') }}" autoplay loop muted style="position: absolute; top: -400%; left: 399.6%; width: 100%; height: 100%; display: none;"></video>
	</div>
</div>


	<script>
  	document.addEventListener("DOMContentLoaded", function () {
  		function runvideo(){
  			let video = document.getElementById("video");
	      let video0 = document.getElementById("video0");
	      let video1 = document.getElementById("video1");
	      let video2 = document.getElementById("video2");
	      let video3 = document.getElementById("video3");
	      let video4 = document.getElementById("video4");

	      video.playbackRate = 2.5;
	      video2.playbackRate = 2.5;
	      video4.playbackRate = 2.5;
	      video6.playbackRate = 2.5;
	      video8.playbackRate = 2.5;

	      setTimeout(() => {
	        video0.pause();
	        video0.style.display = "none";   // hide first video

	        video.style.display = "block";  // show second video
	        video.play();                   // start playback

	        video1.style.display = "block";  // show second video
	        video1.play();                   // start playback

	        video3.style.display = "block";  // show second video
	        video3.play();                   // start playback

	        video5.style.display = "block";  // show second video
	        video5.play();                   // start playback

          video7.style.display = "block";  // show second video
          video7.play();                   // start playback
	      },0);

	      // entrance vid 1 & 2
	      setTimeout(() => {
	        video1.pause();
	        video1.style.display = "none";   // hide first video

	        video2.style.display = "block";  // show second video
	        video2.play();                   // start playback
	      }, 4350);

	      // exit vid & 0
	      setTimeout(() => {
	        video.pause();
	        video.style.display = "none";   // hide first video

	        video0.style.display = "block";  // show second video
	        video0.play();                   // start playback
	      }, 6000);

	      // entrance vid 3 & 4
	      setTimeout(() => {
	        video3.pause();
	        video3.style.display = "none";   // hide first video

	        video4.style.display = "block";  // show second video
	        video4.play();                   // start playback
	      }, 8600);

	      // exit of vid 1 & 2
	      setTimeout(() => {
	        video2.pause();
	        video2.style.display = "none";   // hide first video

	        video1.style.display = "block";  // show second video
	        video1.play();                   // start playback
	      }, 10000);

	      // entrance of vid 5 & 6
	      setTimeout(() => {
	        video5.pause();
	        video5.style.display = "none";   // hide first video

          video6.style.display = "block";  // show second video
          video6.play();                   // start playback
	      }, 12900);

	      // exit of vid 3 & 4
	      setTimeout(() => {
	        video4.pause();
	        video4.style.display = "none";   // hide first video

	        video3.style.display = "block";  // show second video
	        video3.play();                   // start playback
	      }, 14500);

	      // entrance of vid 7 & 8
	      setTimeout(() => {
	        video7.pause();
	        video7.style.display = "none";   // hide first video

	        video8.style.display = "block";  // show second video
	        video8.play();                   // start playback
	      }, 17200);

	      // exit of vid 5 & 6
	      setTimeout(() => {
	        video6.pause();
	        video6.style.display = "none";   // hide first video

          video5.style.display = "block";  // show second video
          video5.play();                   // start playback
	      }, 19000);

	      // exit of vid 7 & 8
	      setTimeout(() => {
	        video8.pause();
	        video8.style.display = "none";   // hide first video

	        video7.style.display = "block";  // show second video
	        video7.play();                   // start playback
	      }, 23000);
  		}
  		runvideo();
  		setInterval(runvideo, 20000);
  	});
	      
  </script>

	@include('footer') <!-- Footer here -->

	

@endsection