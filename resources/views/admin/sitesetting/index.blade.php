@extends('admin.layouts.app')

@section('title')
Settings
@endsection

@section('content')
   @if(Session::has('success'))
              
              <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong> {!! Session('success') !!} </strong>
                </div>
              @endif

   <div class="x_panel">    
  <div class="card mb-4">       
  <div class="card-body">
  <form class="form-horizontal " method="post"action="{{ url('adminpanel/setting') }} ">

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @foreach($siteSetting as $setting)
        <div class="form-group">
                  <p class="col-sm-12 control-label" style="float:left;"> {{ $setting->slug }}</p>
          <div class="col-sm-12" style="float:right;">
            @if($setting->type == 0)
                        <input name="{{ $setting->namesetting }}" required="required"  value="{{ $setting->value }}" type="text" class="form-control" >
                        <br>
                        @else
                        <textarea name="{{ $setting->namesetting }}" id="{{ $setting->namesetting }}" required="required"  class="form-control " > {{ $setting->value }}</textarea>
                        <br>
                        @endif

                              </div>
                          </div>
@endforeach
                                  <div class="form-group">
                                    <br><br>
                                    <button name="submit" type="submit" class="btn btn-info form-control" value=" " >
                                      Edit setting
                                    </button>
                                  </div>
                              </form>

                          </div>
                        </div>
                        </div>
              @endsection
	</div>		  
@section('footer')
  
 <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<script>
   
          ClassicEditor
          .create( document.querySelector( '#privacy_en' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );      
             ClassicEditor
          .create( document.querySelector( '#privacy_ar' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#privacy_fr' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#usage_en' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#usage_ar' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#usage_fr' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#service_fr' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#service_ar' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
             ClassicEditor
          .create( document.querySelector( '#service_en' ) )
           .then( editor => {
            console.log( editor );
         } )
         .catch( error => {
              console.error( error );
         } );     
            
  </script>
@endsection

