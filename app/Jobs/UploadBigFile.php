<?php

namespace App\Jobs;


use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UploadBigFile implements ShouldQueue
{
    use Queueable, InteractsWithQueue, SerializesModels;

    public $file;
    /**
     * Create a new job instance.
     */
    public function __construct($file)
    {
        $this->file = $file;
        // You can also store the file path or any other necessary information
        // $this->filePath = $file->store('uploads');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Storage::putFile('big-files', $this->file, 'local');
        // Storage::putFile('big-files', $this->file);
    }
}
