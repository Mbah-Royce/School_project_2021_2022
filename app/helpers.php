<?php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


function imageUpload($path, $file)
{
    if (!Storage::exists($path)) {
        Storage::makeDirectory($path);
    }
    $path = Storage::putFile($path, $file);

    return '/storage' . substr($path,6);
}

function deleteMedia($path)
{
    $path = Str::after($path, 'storage');
    $path =  "public" . $path;
    if (!Storage::exists($path)) {
        return false;
    }
    Storage::delete($path);
    return true;
}