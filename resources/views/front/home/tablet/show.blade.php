@extends('layouts.app') @section('content')

<div class="container-fluid" style="">
	<div class="row content background-image-nabucco">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-8 well menu-item posts">
			<h2>Tablet {{$tablet->museum_no}} </h2>
            
            <h3>Id</h3>
            <p> {{$tablet->id}}</p>
               
            <h3>Museum_no</h3>
            {{$tablet->museum_no}}
            <h3>Collection_no</h3>           
            {{$tablet->collection_no}}
            <h3>text_no_publication</h3>
                    {{$tablet->text_no_publication}}
            <h3>page_no_publication</h3>
            
                    {{$tablet->page_no_publication}}
            <h3>year</h3>
            

                    {{$tablet->year}}
            <h3>month</h3>
            
                    {{$tablet->month}}
            <h3>day</h3>
            
                    {{$tablet->day}}
            <h3>gregorian</h3>
            

                    {{$tablet->gregorian}}
            <h3>cdli_no</h3>
            
                    {{$tablet->cdli_no}}
            <h3>width</h3>
            
                    {{$tablet->width}}
            <h3>height</h3>
            
                    {{$tablet->height}}
            <h3>thickness</h3>
            
                    {{$tablet->thickness}}
            <h3>philological_remark</h3>
            
                    {{$tablet->philological_remark}}
            <h3>content_remark</h3>
            
                    {{$tablet->content_remark}}
            <h3>created_at</h3>
            
                    {{$tablet->created_at}}
          
                   
           @foreach($tablet->authors() as $author)

           test
           <tr>
               <th>{{$author->id}}</th>
              
           </tr>
           @endforeach
                    
                    
           {{$tablet->test()}}  
						
                            
        
        
           
        
		</div>

		<div class="col-sm-3 sidenav  ">
			<div class="col-sm-9 sidenav well menu-item">
				<h4 class="">ABOUT</h4>
                                <hr />
				<ul class="nav nav-pills nav-stacked vertical-nav">
					<li>
						<a href="#section1">About the project</a>
					</li>
					<li>
						<a href="#section2">Acronym</a>
					</li>
					<li>
						<a href="#section3">Current coverage</a>
					</li>
					<li>
						<a href="#section3">Help us</a>
					</li>
                                        <li>
						<a href="#section3">How to cite</a>
					</li>
                                        <li>
						<a href="#section3">Layout</a>
					</li>
                                          <li>
						<a href="#section3">Staff</a>
					</li>
				</ul>
				<br>
			</div>

		</div>
                <div class="col-sm-3 sidenav ">
			<div class="col-sm-9 sidenav well menu-item">
				<h4>RELATED PROJECTS</h4>
                                <hr />
                                
				<ul class="nav nav-pills nav-stacked">
					<li>
						<a href="#section1">Home</a>
					</li>
					<li>
						<a href="#section2">Friends</a>
					</li>
					<li>
						<a href="#section3">Family</a>
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





@endsection