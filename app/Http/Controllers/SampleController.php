<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
  public function SampleNotification()
  {
    $name = 'ƒ‰ƒ‰ƒxƒ‹‘¾˜Y';
    $text = '‚±‚ê‚©‚ç‚à‚æ‚ë‚µ‚­‚¨Šè‚¢‚¢‚½‚µ‚Ü‚·B';
    $to = 'mosimosikame.rau@gmail.com';
    Mail::to($to)->send(new SampleNotification($name, $text));
  }
}
