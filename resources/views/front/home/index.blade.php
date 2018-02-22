@extends('layouts.app') @section('content')

<div class="container-fluid" style="">
	<div class="row content background-image-nabucco">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-8 well menu-item posts">
			<h2> News </h2>
			@if(count($posts)>0) @foreach($posts as $post)
			<div class=" well post">
				<h3>
					<a href="posts/{{$post->id}}">{{$post->title}}</a>
				</h3>
				<p>{!!$post->body!!}</p>
				<small>Written on {{$post->created_at}} by {{$post->user()->name}}</small> 
			</div>
			@endforeach {{$posts->links()}} @else
			<p>No posts found.</p>
			@endif

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