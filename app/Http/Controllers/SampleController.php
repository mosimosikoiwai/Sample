<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SampleNotification;

class SampleController extends Controller
{
  public function SampleNotification()
  {
    $name = '�����x�����Y';
    $text = '���ꂩ�����낵�����肢�������܂��B';
    $to = 'mosimosikame.rau@gmail.com';
    Mail::to($to)->send(new SampleNotification($name, $text));
  }
}
