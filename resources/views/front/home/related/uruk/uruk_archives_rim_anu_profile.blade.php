@extends('layouts.app') @section('content')


<div class="container-fluid" style="">
<div class="row content background-image-nabucco">
<div class="col-sm-1">
</div>

<div class="col-sm-8 well menu-item posts">
       
    <h2 class="media-heading"> Acronym </h2>
    <hr>
    <p>
            NaBuCCo, short for Nabucodonosor (EnglishNebuchadnezzar), is the title of an opera by Verdi in which the Babylonian king Nebuchadnezzar II and the exile of the Judean population induced by him play a central role. We choose this name as acronym for a scientific project coined the Neo-Babylonian Cuneiform Corpus (NaBuCCo) that aims to make available clay tablets with cuneiform script originating from Babylonia or its immediate vicinity and dated to the Age of Empires (c. 770 BCE – 75 CE), a.o. tablets dated to the reign of Nebuchadnezzar II (c. 605-562 BCE), who is no doubt the most famous king of one of the empires, the Neo-Babylonian (Chaldean) Empire.
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