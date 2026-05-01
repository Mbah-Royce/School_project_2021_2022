<?php

use App\Mail\PasswordReset;
use App\Mail\SendPassword;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


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

function sendResetLink($email, $token)
{
    Mail::to($email)->send(new PasswordReset($token));
    return (Mail::failures());
}

function sendPassword($email, $password)
{
    Mail::to($email)->send(new SendPassword($password));
    return (Mail::failures());
}