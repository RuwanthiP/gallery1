@extends('layouts.main')
@section('content')

    <div class="container">
       
        
        <div class="row">
           
           
           
            
            @foreach ($photos as $photo)
                <div class="col-md-4">
                    <a href="/photo/details/{{$photo->id}}">
                        <img class="thumbnail" src="/Template/images/calander.png" alt="hi">
                    </a>
                    <h5>{{$photo->title}}</h5>
                    <h5>{{$photo->description}}</h5>
                </div>
                
            @endforeach
            
           
            
        </div>
    </div>
        
                   
@endsection

