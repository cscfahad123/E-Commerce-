<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
  public function index(){
      echo '<h1>Fluent Strings</h1>';
      $slice =str::of('Welcome to my Youtube channel')->after('Welcome to');
      echo $slice . '<br>';

      $slice2 =str::of('App\Http\Controllers\Controller')->afterlast('\\');
      echo $slice2 .'<br>';
      $string =str::of('Hello')->append('world!');
      echo $string . '<br>' ;
      $result =str::of('LARAVEL 8')->lower();
      echo $result . '<br>';
      $replaced =str::of('Laravel 7.0')->replace('7.0','8.0');
      echo $replaced . '<br>';
      $converted =str::of('This is a title')->title();
      echo $converted . '<br>';
      $slug =str::of('Laravel 8 Framework')->slug('-');
      echo $slug . '<br>';
      $str =str::of('Laravel Framework')->substr(8,5);
      echo $str . '<br>';
      $str2 =str::of('/Laravel8/')->trim('/');
      echo $str2 . '<br>';
      $str3 =str::of('laravel 8')->upper();
      echo $str3;
  }
}
