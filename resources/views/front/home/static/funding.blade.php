@extends('layouts.app') @section('content')


<div class="container-fluid" style="">
<div class="row content background-image-nabucco">
<div class="col-sm-1">
</div>

<div class="col-sm-8 well menu-item posts">
       
    <h2 class="media-heading"> Funding </h2>
    <hr>
    <p>The following is a list of all funding agencies that have awarded project money to build out the <em>NaBuCCo</em> platform</p>
    <p>The <em>NaBuCCo</em> project was created as part of the research project <em>Greater Mesopotamia: Reconstruction of its Environment and History (GMREH)</em>, whose funding is provided by the Belgian Science Policy Office &ndash; BELSPO in the framework of the Interuniversity Attraction Poles (IAP) (2012-2017).</p>
    <p>Partner-projects, integrated within the <em>NaBuCCo</em>-website:</p>
    <p>The Vienna-Tel Aviv based research project on the Uruk Priesthood is funded by the <em>Thyssen Foundation</em>, grant no. Az. 10.15.1.011AA (2016- )</p>
    <p>The project &ldquo;Foreign Families and Community Boundaries under the Babylonian and Persian Empires (626 - 331 BCE): Patterns of Social Mobility, Group Interaction, Integration and Identity,&rdquo; funded by the Israel Science Foundation grant no. 674/15 (2015-2019)</p>
    <p>Additional funds were provided by Vienna University and by the research project &ldquo;Diplomatics and Palaeography of Neo- and Late Babylonian Archival Documents,&rdquo; University of Vienna, funded by the FWF, Project No. P 26104</p>
    <p>The joint CTIJ project (KU Leuven &ndash; Tel Aviv University) was supported by a research and development grant of the "Ancient Israel" (New Horizons) Research Program, Tel Aviv University and by Tel Aviv University's Office of the Research Dean</p>
    <p>Continuous support for the maintenance of the website (on the KU Leuven server) is secured by a commitment of the University's Faculty of Arts.&nbsp;</p>

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