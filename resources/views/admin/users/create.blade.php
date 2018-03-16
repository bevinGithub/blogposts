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
            
                {!! Form::open(['method'=>'POST','action' => 'AdminUsersController@store']) !!}
                    <fieldset>
                    
                        <p>                            
                            {!! Form::label('name', 'Name') !!}
                             {!! Form::text('name', null, ['id' => 'simple-input','class' => 'round default-width-input']) !!}
                        </p>
                        <p>                            
                            {!! Form::label('email', 'Email') !!}
                             {!! Form::text('email', null, ['id' => 'simple-input','class' => 'round default-width-input']) !!}
                        </p>
                        <p>                            
                            {!! Form::label('status', 'Status') !!}
                            {!! Form::select('is_active', ['1' => 'Active', '0' => 'Not Active'], null, ['placeholder' => 'Select User Status'], ['class'=>'round default-width-input']) !!}
                        </p>
                        <p>                            
                            {!! Form::label('role_id', 'User Role') !!}                            
                            {!! Form::select('role_id', $roles, ['class'=>'round default-width-input']) !!}
                        </p>
                        <p>
                            {!! Form::label("Content", null, ["id" => ""]) !!}                            
                            {!! Form::text("content", null, ["class" => "round full-width-textarea"]) !!}
                        </p>
                        <p>
                            {!! Form::submit('Create User', ['class'=>'round blue ic-right-arrow']) !!}
                        </p>
                    </fieldset>               
                
                {!! Form::close() !!}
                
            
            </div>     
        </div> <!-- end content-module-main -->
        
    </div>

    @stop