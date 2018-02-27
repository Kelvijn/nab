@extends('layouts.app') @section('content')


<div class="container-fluid" style="">
<div class="row content background-image-nabucco">
<div class="col-sm-1">
</div>

<div class="col-sm-8 well menu-item posts">
       
    <h2 class="media-heading"> Staff </h2>
    <hr>
    <p><strong>Principal investigators</strong></p>
    <p>Kathleen Abraham, KU Leuven<br /><a href="mailto:kathleen.abraham@kuleuven.be">kathleen.abraham@kuleuven.be<br /></a><a href="http://www.kuleuven.be/wieiswie/en/person/00002028">http://www.kuleuven.be/wieiswie/en/person/00002028<br /></a><a href="https://kuleuven.academia.edu/KathleenAbraham">https://kuleuven.academia.edu/KathleenAbraham</a></p>
    <p>Michael Jursa, University of Vienna<br /><a href="mailto:michael.jursa@univie.ac.at">michael.jursa@univie.ac.at</a><br /><a href="http://homepage.univie.ac.at/michael.jursa/">http://homepage.univie.ac.at/michael.jursa/</a></p>
    <p>Shai Gordin, Ariel University / Tel Aviv University<br /><a href="mailto:shygordin@gmail.com">shygordin@gmail.com</a><br /><a href="http://ariel.academia.edu/ShaiGordin">http://ariel.academia.edu/ShaiGordin</a></p>
    <p><strong>Principal contributors</strong></p>
    <p>Melanie Gro&szlig;, KU Leuven<br /><a href="mailto:melanie.gross@kuleuven.be">melanie.gross@kuleuven.be<br /></a><a href="http://kuleuven.academia.edu/MelanieGro%C3%9F">http://kuleuven.academia.edu/MelanieGro%C3%9F</a></p>
    <p>Stefania Ermidoro, KU Leuven<br /><a href="mailto:stefania.ermidoro@kuleuven.be">stefania.ermidoro@kuleuven.be<br /></a><a href="http://kuleuven.academia.edu/StefaniaErmidoro">http://kuleuven.academia.edu/StefaniaErmidoro</a></p>
    <p>Matthias Adelhofer, University of Vienna<br /><a href="mailto:matthias.adelhofer@univie.ac.at">matthias.adelhofer@univie.ac.at</a></p>
    <p><strong>Assistants</strong></p>
    <p>Evelien Vanderstraeten, KU Leuven<br /><a href="mailto:evelien.vanderstraeten@gmail.be">evelien.vanderstraeten@gmail.be</a></p>
    <p>Ottilia Luk&aacute;cs, KU Leuven<br /><a href="mailto:ottilia.lukacs@kuleuven.be">ottilia.lukacs@kuleuven.be</a></p>
    <p><strong>Technical support</strong></p>
    <p>Hans De Becker, KU Leuven<br /><a href="mailto:hans.debecker@student.kuleuven.be">hans.debecker@student.kuleuven.be</a></p>
    <p>Elad Aaron, Ariel University<br /><a href="mailto:elad.aaron@gmail.com">elad.aaron@gmail.com</a></p>

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