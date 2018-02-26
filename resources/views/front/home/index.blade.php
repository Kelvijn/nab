@extends('layouts.app') @section('content')
		

<div class="container-fluid" style="">
	<div class="row content background-image-nabucco">
		<div class="col-sm-1">
		</div>
		
		<div class="col-sm-8 well menu-item posts">
			   
			<h2 class="media-heading"> News </h2>
			@if(count($posts)>0) @foreach($posts as $post)
			<div class=" well post">
				<h3 class="media-heading">
					<a href="posts/{{$post->id}}">{{$post->title}}</a>
				</h3>
				<p>{!!$post->body!!}</p>
				<small>Written on {{$post->created_at}} by {{$post->user()->name}}</small> 
			</div>
			@endforeach {{$posts->links()}} @else
			<p>No posts found.</p>
			@endif

		</div>

		<div class="col-sm-3 sidenav   ">
			<div class="col-sm-9  well menu-item  "  >
				<h5 class="media-heading">ABOUT</h5>
								<hr />
								<div class="row">
									
				<ul class="nav nav-pills nav-stacked  ">
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