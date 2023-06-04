<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
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

    public function upload(ImageUploadRequest $request)
    {
        $imageUrl = $request->input('image_url');
        $filename = 'image_' . time() . '.jpg';
         Image::create(['path' => $filename]);
         ImageUpload::dispatch($imageUrl,$filename);
        return response()->json(['message' => 'uploading, will notify after complete.']);
    }

}