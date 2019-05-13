@extends('masterRCS')

@section('title', 'About Us')

@section('content')

@include('galaDarbsRCS/breadcrumbs')

<div class="container">

    <h5>About Us:</h5>

<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#test1">Grass</a></li>
            <li class="tab col s3"><a href="#test2">Dusk</a></li>
            <li class="tab col s3"><a href="#test3">Creek</a></li>
            <li class="tab col s3"><a href="#test4">Sky</a></li>
        </ul>
    </div>
    <div id="test1" class="col s12">
        <div class="col s12 m4 s12 m4 l4 tab-image">
            <img src="resources\galaDarbsRCS\natureSliderImg2.jpg" alt="">
        </div>
        <div class="col s12 m8 l8">
            <p>enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
                leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra
                quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecen</p>
        </div>
    </div>
    <div id="test2" class="col s12">
        <div class="col s12 m4 l4 tab-image">
            <img src="resources\galaDarbsRCS\natureSliderImg3.jpg" alt="">
        </div>
        <div class="col s12 m8 l8">
            <p>igula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla co</p>
        </div>
    </div>
    <div id="test3" class="col s12">
        <div class="col s12 m4 l4 tab-image">
            <img src="resources\galaDarbsRCS\natureSliderImg1.jpg" alt="">
        </div>
        <div class="col s12 m8 l8">
            <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
                sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante
                tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
                eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis
                magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
        </div>
    </div>
    <div id="test4" class="col s12">
        <div class="col s12 m4 l4 tab-image">
            <img src="resources\galaDarbsRCS\natureSliderImg4.jpg" alt="">
        </div>
        <div class="col s12 m8 l8">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
    </div>
</div>
<div class="divider"></div>

    <h5>Contacts:</h5>
    <div class="row">
        <div class="section col s12 m9 l6">
            <iframe width="325" height="280" frameborder="0"
                src="https://www.bing.com/maps/embed?h=280&w=325&cp=56.94649999999999~24.1049&lvl=11&typ=d&sty=r&src=SHELL&FORM=MBEDV8"
                scrolling="no">
            </iframe>
    </div>
        <div class="col s12 m3 l6">
            <h5>Adress</h5>
            <p>Riga, riga, riga</p>
            <h5>Email</h5>
            <p><a href="#">email@email.com</a></p>
            <h5>Phone</h5>
            <p>484848484844848</p>
        </div>
    </div>
</div>

@endsection