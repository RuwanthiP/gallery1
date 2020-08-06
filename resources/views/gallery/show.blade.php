@extends('layouts.main')
@section('content')
<div class="">
    <a class="btn btn-primary" href="/photo/create/{{$gallery->id}}" role="button">Add Photo</a>
</div>

    <div class="container">
       
        
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
           
           
           
            
                @foreach ($photos as $photo)
                    <div class="col-md-4">
                        <a href="/photo/details/{{$photo->id}}">
                            <img class="thumbnail" src="/Template/images/{{$photo->image}}" alt="hi">
                        </a>
                        <h5>{{$photo->title}}</h5> 
                        <h5>{{$photo->description}}</h5>
                    </div>
                    
                @endforeach
            
           
            </div>
        </div>
    </div>
        
                   
@endsection

