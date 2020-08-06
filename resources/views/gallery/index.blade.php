@extends('layouts.main')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Gallery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="#" >Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/gallery/create" >Create Gallery</a>
        </li>
        
      </ul>
      
    </div>
  </nav>
@section('content')

<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">GALLERY</h2>
            <h3 class="section-subheading text-muted">Wellcome to our gallery</h3>
        </div>
        
        <div class="row">
            @foreach($galleries as $gallery)
          
            
            <div class="col-lg-4 col-sm-6 mb-4">
               
              
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="/">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="Template/images/{{$gallery->coverimage}}" alt="" />
                    </a>
                    
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{$gallery->name}}</div>
                        <div class="portfolio-caption-subheading text-muted">{{$gallery->description}}</div>
                        <a class="btn btn-primary" href="/gallery/show/{{$gallery->id}}" role="button">See more</a>
                    </div>
                </div>
               
            </div>
            @endforeach 
           
        </div>
              
            
           
               
    </div>
</section>
                   
@endsection

