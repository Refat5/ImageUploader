<?php

namespace App\Http\Controllers;

use App\Jobs\ImageUpload;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller {
    public function index()
    {
        $images = Image::get();
            return view('Image.list', compact('images'));
        
  
    }

    public function create(){
        return view('Image.add');
    }

    public function upload(Request $request)
    {
        $imageUrl = $request->input('image_url');
        $filename = 'image_' . time() . '.jpg';
         Image::create([
            'path' => $filename
              ]);
         ImageUpload::dispatch($imageUrl,$filename);
   
        return response()->json(['message' => 'Image upload  successfully']);
    }

}