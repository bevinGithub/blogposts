@extends('layouts.admin')
@section('content')


<div class="content-module">
				
        <div class="content-module-heading cf">
        
            <h3 class="fl">New User</h3>
            <span class="fr expand-collapse-text">Click to collapse</span>
            <span class="fr expand-collapse-text initial-expand">Click to expand</span>
        
        </div> <!-- end content-module-heading -->
        
        
        <div class="content-module-main cf">
    
            <div class="half-size-column fl">
            
                {!! Form::open(['method'=>'POST','action' => 'AdminPostsController@store', 'files' => true]) !!}
                    <fieldset>
                        {{csrf_field()}}
                        <p>                            
                            {!! Form::label('title', 'Title') !!}
                             {!! Form::text('title', null, ['id' => 'simple-input','class' => 'round default-width-input']) !!}
                        </p>
                        <p>                            
                            {!! Form::label('category_id', 'Category') !!}                            
                            {!! Form::select('category_id', array('' => 'Select Category') + $categories, null, ['id'=>'dropdown-actions', 'class' => 'round default-width-input']) !!}
                        </p>
                        <p>                            
                            {!! Form::label('photo_id','Photo Upload', ["class" => ""]) !!}   
                            {!! Form::file('photo_id', null, ["class" => "form-control"]) !!}
                        </p>
                        <p>                            
                            {!! Form::label('body', 'Description') !!}
                             {!! Form::textarea('body', null, ['class' => 'round full-width-textarea']) !!}
                        </p>
                        <p>
                            {!! Form::submit('Create User', ['class'=>'round blue ic-right-arrow']) !!}
                        </p>
                    </fieldset>               
                
                {!! Form::close() !!}
                {{-- Alert The error message --}}
                @include('admin.includes.errors')

            </div>     
        </div> <!-- end content-module-main -->
        
    </div>

    @stop