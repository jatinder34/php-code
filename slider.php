/* css of slider */

header.entry-header{
  display:none;
}

.slideshow-layer{
  position:relative;
  height:100vh;
  width:100%;
}

#home-slideshow{
  width:100%;
  height:100%;
  position:relative;
}
#home-slideshow div.slideshow-panel{
  position:absolute;
  top:0;
  left:0;
  background-size:cover;
  background-position:50% 50%;
  opacity:0;
  height:100%;
  width:100%;
  transition: 1.5s opacity;
}

.home-slide-over{
  position:absolute;
  top:0;
  left:0;
  background-color: rgba(0,0,0,0.25);
  height:100%;
  width:100%;
  text-align:center;
  padding-top:30vh;
}

.home-slide-over a{
  font-size:10vw;
  text-decoration: none;
  transition: 1.5s all;
  color:rgba(255,255,255,0.2);
  letter-spacing:0.5vw;
  font-family: sans-serif;
}

.home-slide-over a.on{
  color:white;
}
.home-slide-over a:hover{
  color:white;
}

#home-ss-1{background-image: url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/bannner.jpg');}
#home-ss-2{background-image: url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/banner_img.png');}
#home-ss-3{background-image: url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/slide2.jpg');}
#home-ss-4{background-image: url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/slide.jpg');}
#home-ss-5{background-image: url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/bannner.jpg');}
#home-ss-6{background-image: url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/banner_img.png');}

.fs-carousel.fs-light.fs-carousel-enabled .fs-carousel-pagination{
  margin-top:-2em;
}

#building_the_future{
  color:white;
  font-weight:700;
}
#building_the_future h3{
  color:white;
  text-transform: uppercase;
}
#sec2_text{
  background-color:rgb(37,161,218);
  height:80vh;
  padding:10%;
  font-size:1.6rem;
}
#sec2_photo{
  margin-left:-10%;
  height:60vh;
  margin-top:10vh;
}

.section3_tile{
  margin:0;
  padding:0;
  border:0;
  background-size:cover;
  background-position:50% 50%;
}

#sec3_left{
  background-image:url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/bannner.jpg');
  height:80vh;
  width:58.5%;
  float:left;
}
#sec3_righttop{
  background-image:url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/banner_img.png');
  height:50vh;
  width:41.5%;
  float:right;
}
/*
#sec3_rightbottomleft{
  background-image:url('http://www.straticon.com/wp-content/uploads/2016/12/straticon_logo_small.jpg');
  height:30vh;
  width:20.75%;
  float:left;
  background-size: 50%;
  background-repeat: no-repeat;
  background-color: rgb(37,161,218);
}
*/
#sec3_rightbottomright{
  background-image:url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/slide2.jpg');
  height:30vh;
  width:41.5%;
  float:right;
}
.section3_tile .sec3_overlay{
  background-color:transparent;
  width:100%;
  height:100%;
  visibility: hidden;
  display:none;
  transition: 1.0s all;
  padding:5% 15% 0%;
  text-align:left;
}
.section3_tile:hover .sec3_overlay{
  background-color:rgba(0,0,0,0.6);
  color:white;
  visibility:visible;
  display:block;
}
.sec3_overlay h3{
  text-transform:uppercase;
  font-size:4rem;
}
.sec3_overlay p{
  font-size:1.6rem;
}
.sec3_overlay h3, .sec3_overlay p{
  transition:1.0s all;
  color:transparent;
  margin-left:-500px;
  margin-right:500px;
}
.sec3_overlay:hover h3, .sec3_overlay:hover p{
  color:white;
  margin-left:0px;
  margin-right:0px;
}

#section4{
  background-image:url('http://demo.techitechnology.com/play/wp-content/uploads/2017/04/slide.jpg');
  background-size:cover;
  background-position:50% 0%;
}
.section4_overlay{
  width:100%;
  height:100%;
  background-color:rgba(0,0,0,0.4);
}
.section4_text{
  padding:22vh 0px;
  font-size:1.6rem;
}
.section4_text h3{
  color:white;
}
.section4_text p{
  color:white;
}

#get_in_touch{
  padding:15vh 0px;
}
#get_in_touch h3{
  color:rgb(37,161,218);
  text-transform: uppercase;
}
#get_in_touch input.form-control, #get_in_touch textarea.form-control{
  border:1px solid #DDD;
  margin-bottom:0.75em;
  padding:0.5em;
}

#get_in_touch textarea.form-control{
  height:6.5em;
}

@media(max-width:480px) {
  .slideshow-layer{
	height:75vh;
  }
  #sec2_text{
	height:65vh;
  }
  #sec2_photo{
	margin-left:0px;
  }
  #sec3_left{
	height:40vh;
  }
  #sec3_righttop{
	height:25vh;
  }
  #sec3_rightbottomright{
	height:15vh;
  }
}



/* end of slider*/



<section class="crousel">
	<div class="container-fluid">
		<div class="row">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
     <div class="row">
		<div class="col-sm-12">
		  <div class="slideshow-layer">
			<div id="home-slideshow">
				<div id="home-ss-1" class="slideshow-panel"></div>
				<div id="home-ss-2" class="slideshow-panel"></div>
				<div id="home-ss-3" class="slideshow-panel"></div>
				<div id="home-ss-4" class="slideshow-panel"></div>
				<div id="home-ss-5" class="slideshow-panel"></div>
				<div id="home-ss-6" class="slideshow-panel"></div>
			</div>
			<div class="carousel-caption">
			  <a id="home-a-1" href="#home-slideshow">O</a>
			  <a id="home-a-2" href="#home-slideshow">N</a>
			  <a id="home-a-3" href="#home-slideshow">V</a>
			  <a id="home-a-4" href="#home-slideshow">I</a>
			  <a id="home-a-5" href="#home-slideshow">C</a>
			  <a id="home-a-6" href="#home-slideshow">O</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>


</div>
		</div>
	</div>
</section>


/*script of slider */

<script>


var userAction = 1;
var currentSlide = 1;
var intervalSpeed = 5000;
var isMobile = false;
if ($(window).width() <= 480) {
  var isMobile = true;
}

if (isMobile == true) {
  intervalSpeed = 750;
  var userAction = 0;
}

function setSS(active) {
  currentSlide = active;
  $(".slideshow-panel").css("opacity", 0);
  $("#home-ss-" + active).css("opacity", 1.0);
  $(".carousel-caption a").each(function() {
    $(this).removeClass("on");
  });
  $("#home-a-" + active).addClass("on");
}

function timedEvent(){
 if (userAction>0) {
   userAction = userAction-1;
 }
 else {
   currentSlide = currentSlide + 1;
   if (currentSlide>6) {
       currentSlide = 1;
       if (isMobile == true) {
         intervalSpeed = 2500;
       }
   }
   setSS(currentSlide);
 }
 console.log("userAction:" + userAction + " | currentSlide: " + currentSlide);
 var slideshowInterval = setTimeout(timedEvent, intervalSpeed);
}

$("#home-a-1").mouseenter( function() {userAction=3;setSS(1);} );
$("#home-a-2").mouseenter( function() {userAction=3;setSS(2);} );
$("#home-a-3").mouseenter( function() {userAction=3;setSS(3);} );
$("#home-a-4").mouseenter( function() {userAction=3;setSS(4);} );
$("#home-a-5").mouseenter( function() {userAction=3;setSS(5);} );
$("#home-a-6").mouseenter( function() {userAction=3;setSS(6);} );


setSS(1);

var slideshowInterval = setTimeout(timedEvent, intervalSpeed);

/*if (window.location.hash.length==0) {
  $('html, body').animate({
      scrollTop: $("#home-slideshow").offset().top
  }, 0);
}*/


</script>
