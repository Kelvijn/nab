@extends('layouts.app') @section('content')

<div class="container-fluid" style="">
	<div class="row content background-image-nabucco">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10 well menu-item posts">
			<h2 class="media-heading"> Tablets </h2>
			<table class="table  table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Museum no</th>
                        <th>Collection no</th>
                        <th>Date created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tablets as $tablet)
                    <tr>
                        <th>{{$tablet->id}}</th>
                        <td>{{$tablet->museum_no}}</td>
						<td>{{$tablet->collection_no}}</td>	
						
                        <td>{{$tablet->created_at->toFormattedDateString()}}</td>
                        <td>
						<a class="btn btn-default btn-xs" href="tablets/{{$tablet->museum_no}}">VIEW</a>
                           
                            
        
                        </td>
                    </tr>
                    @endforeach
        
                </tbody>
            </table>
            {{$tablets->links()}}
        
		</div>

		<div class="col-sm-3 sidenav  ">
			

		</div>
               

	</div>
</div>





@endsection