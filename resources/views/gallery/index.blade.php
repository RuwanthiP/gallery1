@extends('layouts.main')
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
                        <a class="btn btn-primary" href="Template/images/calander.png" role="button">See more</a>
                    </div>
                </div>
               
            </div>
            @endforeach 
        </div>
              
            
           
               
    </div>
</section>
                   
@endsection

