<?php
use Illuminate\Support\Facades\Storage;


function imageUpload($path, $file)
{
    if (!Storage::exists($path)) {
        Storage::makeDirectory($path);
    }
    $path = Storage::putFile($path, $file);

    return '/storage' . substr($path,6);
}