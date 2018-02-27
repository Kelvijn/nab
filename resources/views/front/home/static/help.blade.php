@extends('layouts.app') @section('content')


<div class="container-fluid" style="">
<div class="row content background-image-nabucco">
<div class="col-sm-1">
</div>

<div class="col-sm-8 well menu-item posts">
       
    <h2 class="media-heading"> Help us </h2>
    <hr>
   <p>
        We always welcome corrections of our data. For the time being, this is only possible by sending an email. This will change in the future, as we have been experimenting in setting up a system to facilitate the addition of metadata, transliterations, bibliography etc. by external contributors (a.o. via a crowdsourcing platform, see preliminarily http://nabucco.arts.kuleuven.be/nabucco/crowd_help). 
   </p>

</div>

<div class="col-sm-3 sidenav   ">
    <div class="col-sm-9  well menu-item  "  >
        <h5 class="media-heading">ABOUT</h5>
                        <hr />
                        <div class="row">
                            
        <ul class="nav nav-pills nav-stacked  ">
            <li>
                <a href="{{ url('/about') }}">About the project</a>
            </li>
            <li>
                <a href="{{ url('/acronym') }}">Acronym</a>
            </li>
            <li>
                <a href="{{ url('/coverage') }}">Current coverage</a>
            </li>
            <li>
                    <a href="{{ url('/funding') }}">Funding</a>
                </li>
            <li>
                <a href="{{ url('/help') }}">Help us</a>
            </li>
                                <li>
                <a href="{{ url('/cite') }}">How to cite</a>
            </li>
                                <li>
                <a href="{{ url('/layout') }}">Layout</a>
            </li>
                                  <li>
                <a href="{{ url('/staff') }}">Staff</a>
            </li>
        </ul>
        <br>
    </div>
</div>


</div>
        <div class="col-sm-3 sidenav ">
    <div class="col-sm-9 sidenav well menu-item">
                    
        <h5 class="media-heading">RELATED PROJECTS</h5>
                        <hr />
            <div class="row">
                    
        <ul class="nav nav-pills nav-stacked">
            <li>
                <a href="#section1">The Priesthood of Uruk in Late First Millennium BCE Babylonia</a>
            </li>
            <li>
                <a href="#section2">Cuneiform Texts Mentioning Israelites, Judeans, and Related Population Groups</a>
            </li>
            <li>
                <a href="#section3">Taxation and Administration in the Achaemenid Empire</a>
            </li>
            <li>
                <a href="#section3">Photos</a>
            </li>
        </ul>
        <br>
    </div>
</div>


</div>
</div>
</div>





@endsection