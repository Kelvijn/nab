@extends('layouts.app') @section('content')

<div class="container-fluid" style="">
	<div class="row content background-image-nabucco">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10 well menu-item posts">
			<h2 class="media-heading"> Bibliographies </h2>
			<table class="table  table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>type</th>
                        <th>volume_nr</th>
                        <th>pages</th>
                        <th>academia_url</th>                   
                        <th>worldcat_url</th>                        
                        <th>other_ur</th>
                        <th>title_in_book</th>
                        <th>Created at</th>
                        <th>Actions</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($bibliographies as $bibliography)
                    <tr>
                            <th>{{$bibliography->id}}</th>
                            
                        <th>{{$bibliography->title}}</th>
                        <td>{{$bibliography->type}}</td>
                        <td>{{$bibliography->volume_nr}}</td>
						<td>{{$bibliography->pages}}</td>	
                        <td>{{$bibliography->academia_url}}</td>	
						<td>{{$bibliography->worldcat_url}}</td>	
                        
						<td>{{$bibliography->other_ur}}</td>	
                        
						<td>{{$bibliography->title_in_book}}</td>	
                        
                        
						
                        <td>{{$bibliography->created_at->toFormattedDateString()}}</td>
                        <td>
						<a class="btn btn-default btn-xs" href="bibliographies/{{$bibliography->id}}">VIEW</a>
                           
                            
        
                        </td>
                    </tr>
                    @endforeach
        
                </tbody>
            </table>
            {{$bibliographies->links()}}
        
		</div>

		<div class="col-sm-3 sidenav  ">
			

		</div>
               

	</div>
</div>





@endsection