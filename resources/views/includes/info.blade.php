@if (count($errors)>0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $errors)
        <li>
            {{$errors}}
        </li>   
        @endforeach
    </ul>
</div>
    
@endif

@if(session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif