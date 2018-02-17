<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminTablets49Controller extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "content_remark";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "tablets";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Id","name"=>"id"];
			
			$this->col[] = ["label"=>"Museum No","name"=>"museum_no"];
			
			$this->col[] = ["label"=>"Collection No","name"=>"collection_no"];
			$this->col[] = ["label"=>"Text No Publication","name"=>"text_no_publication"];
			$this->col[] = ["label"=>"Page No Publication","name"=>"page_no_publication"];
			$this->col[] = ["label"=>"Publications Id","name"=>"publications_id","join"=>"publications,id"];
			$this->col[] = ["label"=>"Periods Id","name"=>"periods_id","join"=>"periods,name"];
			$this->col[] = ["label"=>"Kings Id","name"=>"kings_id","join"=>"kings,long"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			
			$this->form[] = ['label'=>'Museum No','name'=>'museum_no','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Collection No','name'=>'collection_no','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Text No Publication','name'=>'text_no_publication','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Page No Publication','name'=>'page_no_publication','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Publications Id','name'=>'publications_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'publications,body'];
			$columns11= [];
			$columns11[] = ['label'=>'Paraphrase','name'=>'paraphrases_id','type'=>'datamodal','datamodal_table'=>'paraphrases','datamodal_columns'=>'body,museum_no'];
			$this->form[] = ['label'=>'Paraphrases','name'=>'tablets_paraphrases','type'=>'child','columns'=>$columns11,'table'=>'tablets_paraphrases','foreign_key'=>'tablets_id'];
			
			
			$columns10= [];
			$columns10[] = ['label'=>'Transliteration','name'=>'transliterations_id','type'=>'datamodal','datamodal_table'=>'transliterations','datamodal_columns'=>'body,museum_no'];
			$this->form[] = ['label'=>'Transliterations','name'=>'tablets_transliterations','type'=>'child','columns'=>$columns10,'table'=>'tablets_transliterations','foreign_key'=>'tablets_id'];
			
			$this->form[] = ['label'=>'Periods Id','name'=>'periods_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'periods,name'];
			$this->form[] = ['label'=>'Kings Id','name'=>'kings_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'kings,long'];
			$this->form[] = ['label'=>'King Remarks Id','name'=>'king_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'king_remarks,name'];
			$this->form[] = ['label'=>'Year','name'=>'year','type'=>'number','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Year Remarks Id','name'=>'year_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'year_remarks,name'];
			$this->form[] = ['label'=>'Months Id','name'=>'months_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'months,roman'];
			$this->form[] = ['label'=>'Month Remarks Id','name'=>'month_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'month_remarks,name'];
			$this->form[] = ['label'=>'Day','name'=>'day','type'=>'number','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Day Remarks Id','name'=>'day_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'day_remarks,name'];
			$this->form[] = ['label'=>'Babylonian Date Remark','name'=>'babylonian_date_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Gregorian','name'=>'gregorian','type'=>'datetime','value'=>'2018-02-07 00:00:00','validation'=>'date_format:Y-m-d H:i:s','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Gregorian Date Remark','name'=>'gregorian_date_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$columns1 = [];
			$columns1[] = ['label'=>'Archive','name'=>'archives_id','type'=>'datamodal','datamodal_table'=>'archives','datamodal_columns'=>'region,specific_region'];
			$this->form[] = ['label'=>'Archives','name'=>'tablets_archives','type'=>'child','columns'=>$columns1,'table'=>'tablets_archives','foreign_key'=>'tablets_id'];
			$columns3= [];
			$columns3[] = ['label'=>'Provenience','name'=>'proveniences_id','type'=>'datamodal','datamodal_table'=>'proveniences','datamodal_columns'=>'region,city'];
			$this->form[] = ['label'=>'Proveniences','name'=>'tablets_proveniences','type'=>'child','columns'=>$columns3,'table'=>'tablets_proveniences','foreign_key'=>'tablets_id'];
			
			$columns2= [];
			$columns2[] = ['label'=>'Place of issue','name'=>'places_id','type'=>'datamodal','datamodal_table'=>'places','datamodal_columns'=>'region,city'];
			
			$this->form[] = ['label'=>'Places','name'=>'tablets_places','type'=>'child','columns'=>$columns2,'table'=>'tablets_places','foreign_key'=>'tablets_id'];
			
			
			
			$this->form[] = ['label'=>'Cdli No','name'=>'cdli_no','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Width','name'=>'width','type'=>'money','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Height','name'=>'height','type'=>'money','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Thickness','name'=>'thickness','type'=>'money','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Dimensions Remark','name'=>'dimensions_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			
			$this->form[] = ['label'=>'Orientations Id','name'=>'orientations_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'orientations,name'];
			$columns5= [];
			$columns5[] = ['label'=>'Other marking','name'=>'other_markings_id','type'=>'datamodal','datamodal_table'=>'other_markings','datamodal_columns'=>'name'];
			$this->form[] = ['label'=>'Other markings','name'=>'tablets_other_markings','type'=>'child','columns'=>$columns5,'table'=>'tablets_other_markings','foreign_key'=>'tablets_id'];
			
			$columns6= [];
			$columns6[] = ['label'=>'Philological note','name'=>'philological_notes_id','type'=>'datamodal','datamodal_table'=>'philological_notes','datamodal_columns'=>'name'];
			$this->form[] = ['label'=>'Philological notes','name'=>'tablets_philological_notes','type'=>'child','columns'=>$columns6,'table'=>'tablets_philological_notes','foreign_key'=>'tablets_id'];
			
			$this->form[] = ['label'=>'Philological Remark','name'=>'philological_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Text Types Id','name'=>'text_types_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'text_types,name'];
			$this->form[] = ['label'=>'Content Remark','name'=>'content_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Paraphrases Id','name'=>'paraphrases_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'paraphrases,id'];
			
			$columns = [];
			$columns[] = ['label'=>'Tablet','name'=>'tablets_id','type'=>'datamodal','datamodal_table'=>'tablets','datamodal_columns'=>'id,museum_no'];
			$columns[] = ['label'=>'Type','name'=>'tablet_types_id','type'=>'datamodal','datamodal_table'=>'tablet_types','datamodal_columns'=>'id,name,category'];
			
			$this->form[] = ['label'=>'Join tablets','name'=>'joins','type'=>'child','columns'=>$columns,'table'=>'joins','foreign_key'=>'tablets_id'];
			
		
			$columns4= [];
			$columns4[] = ['label'=>'Author tablet','name'=>'cms_users_id','type'=>'datamodal','datamodal_table'=>'cms_users','datamodal_columns'=>'name'];
			$this->form[] = ['label'=>'Authors tablet','name'=>'tablets_cms_users','type'=>'child','columns'=>$columns4,'table'=>'tablets_cms_users','foreign_key'=>'tablets_id'];
			
			
			
			$columns7= [];
			$columns7[] = ['label'=>'Text type','name'=>'text_types_id','type'=>'datamodal','datamodal_table'=>'text_types','datamodal_columns'=>'name, category'];
			$this->form[] = ['label'=>'Text types','name'=>'tablets_text_types','type'=>'child','columns'=>$columns7,'table'=>'tablets_text_types','foreign_key'=>'tablets_id'];
			
			$columns8= [];
			$columns8[] = ['label'=>'Akkadian keyword','name'=>'akkadian_keywords_id','type'=>'datamodal','datamodal_table'=>'akkadian_keywords','datamodal_columns'=>'name'];
			$this->form[] = ['label'=>'Akkadian keywords','name'=>'tablets_akkadian_keywords','type'=>'child','columns'=>$columns8,'table'=>'tablets_akkadian_keywords','foreign_key'=>'tablets_id'];
			
			$columns9= [];
			$columns9[] = ['label'=>'General keyword','name'=>'general_keywords_id','type'=>'datamodal','datamodal_table'=>'general_keywords','datamodal_columns'=>'name'];
			$this->form[] = ['label'=>'General keywords','name'=>'tablets_general_keywords','type'=>'child','columns'=>$columns9,'table'=>'tablets_general_keywords','foreign_key'=>'tablets_id'];
			
			
			
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Museum No','name'=>'museum_no','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Collection No','name'=>'collection_no','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Text No Publication','name'=>'text_no_publication','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Page No Publication','name'=>'page_no_publication','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Publications Id','name'=>'publications_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'publications,id'];
			//$this->form[] = ['label'=>'Periods Id','name'=>'periods_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'periods,name'];
			//$this->form[] = ['label'=>'Kings Id','name'=>'kings_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'kings,long'];
			//$this->form[] = ['label'=>'King Remarks Id','name'=>'king_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'king_remarks,name'];
			//$this->form[] = ['label'=>'Year','name'=>'year','type'=>'number','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Year Remarks Id','name'=>'year_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'year_remarks,name'];
			//$this->form[] = ['label'=>'Months Id','name'=>'months_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'months,roman'];
			//$this->form[] = ['label'=>'Month Remarks Id','name'=>'month_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'month_remarks,name'];
			//$this->form[] = ['label'=>'Day','name'=>'day','type'=>'number','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Day Remarks Id','name'=>'day_remarks_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'day_remarks,name'];
			//$this->form[] = ['label'=>'Babylonian Date Remark','name'=>'babylonian_date_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Gregorian','name'=>'gregorian','type'=>'datetime','value'=>'2018-02-07 00:00:00','validation'=>'date_format:Y-m-d H:i:s','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Gregorian Date Remark','name'=>'gregorian_date_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Cdli No','name'=>'cdli_no','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Width','name'=>'width','type'=>'money','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Height','name'=>'height','type'=>'money','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Thickness','name'=>'thickness','type'=>'money','value'=>'0','validation'=>'integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Dimensions Remark','name'=>'dimensions_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Orientations Id','name'=>'orientations_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'orientations,name'];
			//$this->form[] = ['label'=>'Philological Remark','name'=>'philological_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Text Types Id','name'=>'text_types_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'text_types,name'];
			//$this->form[] = ['label'=>'Content Remark','name'=>'content_remark','type'=>'text','validation'=>'min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Paraphrases Id','name'=>'paraphrases_id','type'=>'select2','validation'=>'integer|min:0','width'=>'col-sm-10','datatable'=>'paraphrases,id'];
			//
			//
			//$columns = [];
			//$columns[] = ['label'=>'Tablet','name'=>'tablets_id','type'=>'datamodal','datamodal_table'=>'tablets','datamodal_columns'=>'id,museum_no'];
			//$columns[] = ['label'=>'Type','name'=>'tablet_types_id','type'=>'datamodal','datamodal_table'=>'tablet_types','datamodal_columns'=>'id,name,category'];
			//
			//$this->form[] = ['label'=>'Join tablets','name'=>'joins','type'=>'child','columns'=>$columns,'table'=>'joins','foreign_key'=>'tablets_id'];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
	            
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :) 


	}