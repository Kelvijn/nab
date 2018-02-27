@extends('layouts.app') @section('content')

<div class="container-fluid" style="">
	<div class="row content background-image-nabucco">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10 well menu-item posts">
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

           <tr>
               <th>{{$author->id}}</th>
              
           </tr>
	   @endforeach
	   <h3>Authors</h3>
	   <table class="table  table-sm">
			<thead>
			    <tr>
				<th>Name</th>
			    </tr>
			</thead>
			<tbody>
					@foreach( $tablet->authors() as $authors)
					<tr>
							
					<td>
					{{$authors->name}}
					
					</td>
							   
				</tr>
								
				     @endforeach
		
			</tbody>
		    </table>
		    <h3>Paraphrases</h3>
		   
				       
			 
		    <table class="table  table-sm">
				 <thead>
				     <tr>
					 <th>Name</th>
					 <th>Body</th>
					 
					 
				     </tr>
				 </thead>
				 <tbody>
						<tr>
								
						@foreach( $tablet->paraphrases() as $paraphrase)
						
						<td>
						{{$paraphrase->id}}
						
						
						</td>	
						<td>
					{!!$paraphrase->body!!}
								
						</td>
					</tr>
								
					 @endforeach
		 
				 </tbody>
		 
			     </table>
	   
			     <h3>Joins</h3>
			     
						 
				   
			      <table class="table  table-sm">
					   <thead>
					       <tr>
						   <th>id</th>
						   <th>Museum_no</th>
						   
						   
					       </tr>
					   </thead>
					   <tbody>
							  <tr>
									  
							  @foreach( $tablet->joins() as $join)
							  
							  <td>
							  {{$join->tablets_id}}
							  
							  
							  </td>	
							  <td>
						  {!!$join->museum_noo!!}
									  
							  </td>
						  </tr>
									  
						   @endforeach
			   
					   </tbody>
			   
				       </table>
				       <h3>Transliterations</h3>
				       
							   
					     
					<table class="table  table-sm">
						     <thead>
							 <tr>
							     <th>id</th>
							     <th>Museum_no</th>
							     
							     
							 </tr>
						     </thead>
						     <tbody>
								    <tr>
										    
								    @foreach( $tablet->transliterations() as $transliteration)
								    
								    <td>
								    {{$transliteration->tablets_id}}
								    
								    
								    </td>	
								    <td>
							    {!!$transliteration->body!!}
										    
								    </td>
							    </tr>
										    
							     @endforeach
				     
						     </tbody>
				     
						 </table>
						 <h3>Archives</h3>
						 
								     
						       
						  <table class="table  table-sm">
							       <thead>
								   <tr>
								       <th>Region</th>
								       <th>Specific region</th>
								       
								       
								   </tr>
							       </thead>
							       <tbody>
									      <tr>
											      
									      @foreach( $tablet->archives() as $archive)
									      
									      <td>
									      {{$archive->region}}
									      
									      
									      </td>	
									      <td>
								      {{$archive->specific_region}}
											      
									      </td>
								      </tr>
											      
								       @endforeach
					       
							       </tbody>
					       
							   </table>
							   <h3>proveniences</h3>
							   
									       
								 
							    <table class="table  table-sm">
									 <thead>
									     <tr>
										 <th>Region</th>
										 <th>City</th>
										 
										 
									     </tr>
									 </thead>
									 <tbody>
											<tr>
													
											@foreach( $tablet->proveniences() as $provenience)
											
											<td>
											{{$provenience->region}}
											
											
											</td>	
											<td>
										{{$provenience->city}}
													
											</td>
										</tr>
													
										 @endforeach
							 
									 </tbody>
							 
								     </table>
								     <h3>places</h3>
								     
											 
									   
								      <table class="table  table-sm">
										   <thead>
										       <tr>
											   <th>Region</th>
											   <th>City</th>
											   
											   
										       </tr>
										   </thead>
										   <tbody>
												  <tr>
														  
												  @foreach( $tablet->places() as $place)
												  
												  <td>
												  {{$place->region}}
												  
												  
												  </td>	
												  <td>
											  {{$place->city}}
														  
												  </td>
											  </tr>
														  
											   @endforeach
								   
										   </tbody>
								   
									       </table>
									       <h3>other_markings</h3>
									       
												   
										     
										<table class="table  table-sm">
											     <thead>
												 <tr>
												     <th>Name</th>
												     
												     
												     
												 </tr>
											     </thead>
											     <tbody>
													    <tr>
															    
													    @foreach( $tablet->other_markings() as $other_marking)
													    
													    <td>
													    {{$other_marking->name}}
													    
													    
													    </td>	
													
												    </tr>
															    
												     @endforeach
									     
											     </tbody>
									     
											 </table>
											 <h3>philological_notes</h3>
											 
													     
											       
											  <table class="table  table-sm">
												       <thead>
													   <tr>
													       <th>Name</th>
													       
													       
													       
													   </tr>
												       </thead>
												       <tbody>
														      <tr>
																      
														      @foreach( $tablet->philological_notes() as $philological_note)
														      
														      <td>
														      {{$philological_note->name}}
														      
														      
														      </td>	
														      
													      </tr>
																      
													       @endforeach
										       
												       </tbody>
										       
												   </table>	
												   <h3>text_types</h3>
												   
														       
													 
												    <table class="table  table-sm">
														 <thead>
														     <tr>
															 <th>Category</th>
															 
															 <th>Name</th>
															 
															 
														     </tr>
														 </thead>
														 <tbody>
																<tr>
																		
																@foreach( $tablet->text_types() as $text_type)
																<td>
																		{{$text_type->category}}
																		
																		
																		</td>
																<td>
																{{$text_type->name}}
																
																
																</td>	
																
																
															</tr>
																		
															 @endforeach
												 
														 </tbody>
												 
													     </table>	
													     <h3>akkadian_keywords</h3>
													     
																 
														   
													      <table class="table  table-sm">
															   <thead>
															       <tr>
																   <th>Name</th>
																   
																   
																   
															       </tr>
															   </thead>
															   <tbody>
																	  <tr>
																			  
																	  @foreach( $tablet->akkadian_keywords() as $akkadian_keyword)
																	  
																	  <td>
																	  {{$akkadian_keyword->name}}
																	  
																	  
																	  </td>	
																	  
																  </tr>
																			  
																   @endforeach
													   
															   </tbody>
													   
														       </table>	
														       <h3>general_keywords</h3>
														       
																	   
															     
															<table class="table  table-sm">
																     <thead>
																	 <tr>
																	     <th>Name</th>
																	     
																	     
																	     
																	 </tr>
																     </thead>
																     <tbody>
																		    <tr>
																				    
																		    @foreach( $tablet->general_keywords() as $general_keyword)
																		    
																		    <td>
																		    {{$general_keyword->name}}
																		    
																		    
																		    </td>	
																		    
																	    </tr>
																				    
																	     @endforeach
														     
																     </tbody>
														     
																 </table>							       
		</div>

		
	</div>
</div>





@endsection