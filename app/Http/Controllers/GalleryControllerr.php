<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Http\UploadedFile ;

class GalleryControllerr extends Controller{

       private $table="galleries";
    //List Galleries
    public function index(){
       
            //Get all Galleries
            $galleries=DB::table($this->table)->get();
                

            //render view
            return view('gallery/index',compact($this->table));

    }
    
    
    //show create form
    public function create(){
            return view('gallery/create');
        
    }
    
    //Store Gallery
    public function store(Request  $request){
            //Get request Input
            $name=$request->input('name');
            $description=$request->input('description');
            $coverimage=$request->file('coverimage');
            $owner_id=1;

            //check whether image is upload
            if($coverimage){
                
                $coverimage_filename=$coverimage->getClientOriginalName();
                $coverimage-> move(public_path('/Template/images'),$coverimage_filename);
            
            }
            
            else{
                $coverimage_filename='noimage.jpg';
            }

        
            //insert into the datbase
            DB::table($this->table)->insert(
            [
            'name'=>$name ,
            'description'=>$description,
            'coverimage'=>$coverimage_filename,
            'owner_id'   =>$owner_id    
            ]
            );
        
            //Rederect
            return \Redirect::route('gallery.index')->with('message','Gallery Created');

    }
    
    
    //Show Gallery Photos
    public function show($id){
            //Get gallery
            $gallery=DB::table($this->table)->where('id',$id)->first();
            //Get photo
            $photos=DB::table('photos')->where('gallery_id',$id)->get();

            //return view
            return view('gallery/show',compact('gallery','photos'));

    }
}
