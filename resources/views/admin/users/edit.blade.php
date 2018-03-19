@extends('layouts.admin')
@section('content')


<div class="content-module">
				
    <div class="content-module-heading cf">
    
        <h3 class="fl">Update User</h3>
        <span class="fr expand-collapse-text">Click to collapse</span>
        <span class="fr expand-collapse-text initial-expand">Click to expand</span>
    
    </div> <!-- end content-module-heading -->
    
    
    <div class="content-module-main cf">

        <div class="half-size-column fl">
                {!! Form::model($user,['method'=>'PATCH','action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}
                <fieldset>
                    {{csrf_field()}}
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
                        {!! Form::select('role_id',['' => "Select Role"] + $roles, ['id'=>'dropdown-actions', 'class' => 'round default-width-input']) !!}
                    </p>
                    <p>                            
                        {!! Form::label('photo_id','File Upload', ["class" => ""]) !!}   
                        {!! Form::file('photo_id', null, ["class" => "form-control"]) !!}
                    </p>
                    <p>                            
                        {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['id' => 'simple-input','class' => 'round default-width-input']) !!}
                    </p>
                    <p>
                        {!! Form::submit('Update User', ['class'=>'round blue ic-right-arrow']) !!}
                    </p>
                </fieldset>               
            
            {!! Form::close() !!}
            {{-- Alert The error message --}}
            @include('admin.includes.errors')

        </div>   
        
        <div class="half-size-column fr">
            <div class="half-size-column fl">
                <img width=120 src="{{$user->photo ? $user->photo->file : '/images/company-logo.png'}}" alt="" class="img-responsive img-round" >
            </div>
        </div>

    </div> <!-- end content-module-main -->
</div>

@stop