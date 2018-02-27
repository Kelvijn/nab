@extends('layouts.app') @section('content')


<div class="container-fluid" style="">
<div class="row content background-image-nabucco">
<div class="col-sm-1">
</div>

<div class="col-sm-8 well menu-item posts">
       
    <h2 class="media-heading"> Layout </h2>
    <hr>
    <p>The information for the catalogue is at least originally based on Michael Jursa&rsquo;s own collection of Late-Babylonian archival records. At the moment 2727 archival documents are presented on the <em>NaBuCCo</em> website and substantial numbers of texts are going to be added soon.</p>
    <p>There are four main categories of metadata provided by the Catalogue: (1) identifiers (<em>NaBuCCo</em> no, CDLI no, museum no, duplicates, joins, publication, period, date, archive, place of issue or provenience), (2) physical characteristics (dimensions, orientation, markings including sealings, and philological notes), (3) content (text type, quantifiable data, keywords, paraphrase and transliteration) and (4) bibliography on re-editions and studies. At the moment, the identifiers, text type, paraphrase and external links to transliterations &nbsp;(when available) are visible on the website; the other two categories will be made available online as work progresses. &nbsp;</p>
    <p>The paraphrase&nbsp;is one of the Catalogue&rsquo;s key elements, explaining and clarifying the source texts.&nbsp;By providing&nbsp;such&nbsp;descriptive summaries&nbsp;in narrative style and directly linking them to the original source documents from which the content data are extracted, we hope to make&nbsp;the difficult&nbsp;to interpret cuneiform corpus&nbsp;more&nbsp;accessible. Great care is taken to include key Akkadian terminology and phraseology in our English paraphrases.</p>
    <p>PLACES&amp;MAPS is a set of the ancient places (towns, villages, hamlet-estates) in Babylonia and its immediate vicinity, from where the documentary sources originate. It automatically draws its information from the catalogue&rsquo;s &ldquo;Place of Issue&rdquo; field. The ancient names are transliterated in Latin characters following Zadok 1985 (RGTC 8). The places are geographically ordered according to region and linked to the source texts. Thus, for instance, you can click on &ldquo;Babylon&rdquo; and see all the documents originating from this city (that are currently in our catalogue), and one more click on any document of your choice shows you all its metadata. As the project progresses the main cities will be visually represented on a map.</p>
    <p>Micro-toponyms, such as city quarters, streets, sanctuaries, or hydronyms that appear in the narrative section of the source texts are included in the paraphrases. They will eventually appear as separate sets in the Glossaries. Under construction.</p>
    <p>ARCHIVES, is a set of the family and institutional archives to which the documentary sources originally belonged. It follows the archival division as found in Jursa 2005 (GMTR 1). The set automatically draws its information from the catalogue. By clicking on any of the archives you receive a list of all documents from that archive (that are currently in our catalogue). One more click on any document of your choice shows you all its metadata.</p>
    <p>BIBLIOGRAPHY, is an interlinked collection of books, text-edition series and articles. The references can be ordered by their title, year or author. They are connected to the catalogue so that clicking on any entry results in a list of documents that are related to it and included in our catalogue. There are currently 4782 entries online available on the <em>NaBuCCo</em> website.</p>
    <p>GLOSSARY, under construction. There will be a general glossary of keywords, and one of specifically Akkadian keywords, both interlinked to the relevant source texts.</p>

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