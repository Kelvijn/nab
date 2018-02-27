@extends('layouts.app') @section('content')


<div class="container-fluid" style="">
<div class="row content background-image-nabucco">
<div class="col-sm-1">
</div>

<div class="col-sm-8 well menu-item content_text">
        <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pictures</a></li>
                <li><a href="#">Summer 15</a></li>
                <li>Italy</li>
              </ul> 
    <h2 class="media-heading"> About </h2>
    <hr>
    
    <p>
            NaBuCCo is a text-oriented website that aims at putting online textual metadata of an estimated 20,000 published Babylonian documentary sources including legal, administrative and epistolary records. These documents have been created between roughly 800 and the end of the pre-Christian era and primarily originate from the five large cities of Mesopotamia during that time: Babylon, Borsippa, Nippur, Sippar and Uruk along with their agrarian hinterland. The website collects all meta-textual data from the sources, paraphrases their content, makes the data available online, and links them (via partner websites) to the original source documents from which they are extracted.
    </p>
<p>
        In addition to the text catalogue, the project offers a comprehensive up-to-date bibliography on Babylonia in the first millennium BCE.
</p>
<p>
        We hope that the project will benefit the research community. Indeed, the database with its advanced search tool, interlinked pages and extensive bibliography will enable scholars from within the field of Assyriology and also from other historical fields from all over the world to work with a comprehensive collection of Babylonian texts for their own research projects.
</p>
<p>
        At the same time we hope that NaBuCCo’s catalogue, bibliography and to be developed portal will be a useful tool to delve into the Babylonian world for non-specialists. While the main addressees are specialist and non-specialists scholars, the project also aims at approaching those stakeholders who are not scientifically involved in this kind of source material. Being freely accessible online, the NaBuCCo database can not only be searched through and experienced by any historically interested individual, but – most importantly – provides proper tools, namely the paraphrases, to understand the archival texts from Babylonia also without background knowledge. The access to and the basic understanding of the Babylonian world and its thousands of texts will, furthermore, be eased by the 1st Millennium BC Babylon Portal to be provided on the NaBuCCo website in the future. This portal will provide profound information about chronology and historical events, main cities and topography, various aspects of society and economy of 1st-millinium-BCE Babylonia and lays the foundation for an understanding of the presented texts themselves. The common user will also find basic explanations about the types and origin of the texts presented.
</p>
<p>
        The NaBuCCo Project is intended to be a long term endeavor and there is much work to do and finish before we have reached our primary and secondary objects. Please bear with us as we expand, improve, and refine our content.
</p>
<p>
        We hope you enjoy using NaBuCCo and would be happy with your support, in whatever way.
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