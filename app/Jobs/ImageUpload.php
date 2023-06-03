<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImageUpload implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $imageUrl,$filename;

    public function __construct($imageUrl,$filename)
    {
        $this->imageUrl = $imageUrl;
        $this->filename = $filename;

    }

    public function handle()
    {
      
        $fileContents = file_get_contents($this->imageUrl);
        file_put_contents(public_path('/' .$this->filename), $fileContents);

    }
}
