@if (count($errors))                
    @foreach ($errors->all() as $error )
    <div class="error-box round">
        {{$error}}
    </div>
    @endforeach
@endif