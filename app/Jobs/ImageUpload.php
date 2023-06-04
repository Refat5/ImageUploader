<?php

namespace App\Jobs;

use App\Notifications\ImageUploadedNofication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;
class ImageUpload implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $imageUrl,$filename;

    public function __construct($imageUrl,$filename)
    {
        $this->imageUrl = $imageUrl;
        $this->filename = $filename;
    }

    // public function handle()
    // {
    //     // $fileContents = file_get_contents($this->imageUrl);
    //     // Storage::put($this->filename, $fileContents);
    //     $fileContents = file_get_contents($this->imageUrl);
    //     $filename = $this->filename;
    //     Storage::disk('public')->put('images/'.$filename, $fileContents);
    // }



    public function handle()
    {
        $fileContents = file_get_contents($this->imageUrl);
        $filename = $this->filename;
        Storage::disk('public')->put('images/' . $filename, $fileContents);
    }
}
