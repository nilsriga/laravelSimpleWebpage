@extends('masterRCS')

@section('title', 'Simple Webpage')

@section('content')

<br>

    <div class="slider">
        <i id="prev" style='font-size:40px; color:whitesmoke' class='far'>&#xf359;</i>
        <i id="next" style='font-size:40px; color:whitesmoke' class='far'>&#xf35a;</i>
        <ul class="slides center-align  z-depth-2">
            <li>
                <a href="/article1"><img src="resources/galaDarbsRCS/natureSliderImgBig1.jpg">
                </a>
                <div class="caption">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <a href="/article1"><img src="resources/galaDarbsRCS/natureSliderImgBig2.jpg">
                </a>
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <a href="/article1"><img src="resources/galaDarbsRCS/natureSliderImgBig3.jpg">
                </a>
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <a href="/article1"><img src="resources/galaDarbsRCS/natureSliderImgBig1.jpg">
                </a>
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>


<div class="container">
    <div class="row">
        <div class="col m6 l4">
            <div class="card z-depth-2">
        <div class="card-image">
          <a href="/article1"><img src="resources\galaDarbsRCS\natureSliderImg1.jpg"></a>
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="/article1">This is a link</a>
        </div>
      </div>
        </div>
        <div class="col m6 l4">
            <div class="card z-depth-2">
        <div class="card-image">
          <a href="/article1"><img src="resources\galaDarbsRCS\natureSliderImg2.jpg"></a>
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="/article1">This is a link</a>
        </div>
      </div>
        </div>
        <div class="col m6 l4">
            <div class="card z-depth-2">
        <div class="card-image">
          <a href="/article1"><img src="resources\galaDarbsRCS\natureSliderImg3.jpg"></a>
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="/article1">This is a link</a>
        </div>
      </div>
        </div>

    </div>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="resources\galaDarbsRCS\paralaxImg1.jpg"></div>
</div>

<div class="slider-container  animated-container">
    <h5>jQuery slider</h5>
    <div class="slider-outer">
        <i style='font-size:40px; color:whitesmoke' class='far prev'>&#xf359;</i>
        <div class="slider-inner z-depth-2">
            <img id="first-image" class="active-img" src="resources\galaDarbsRCS\natureSliderImg1.jpg" alt="">
            <img src="resources\galaDarbsRCS\natureSliderImg2.jpg" alt="">
            <img src="resources\galaDarbsRCS\natureSliderImg3.jpg" alt="">
            <img id="last-image" class="image" src="resources\galaDarbsRCS\natureSliderImg4.jpg" alt="">
        </div>
        <i style='font-size:40px; color:whitesmoke' class='far next'>&#xf35a;</i>
    </div>
</div>

<br>

<div class="parallax-container">
    <div class="parallax"><img src="resources\galaDarbsRCS\paralaxImg2.jpg"></div>
</div>

<div class="center-align">
    <h5>VanillaJS slider</h5>
    <img class="vanilla-slider animated-container z-depth-2" name="slide" width="400" height="400">
</div>
<br>

@endsection