@extends('layouts.perfectum')

@section('footer')
    @parent

@stop

@section('content')
  <h1>Media {{ $media->id }}</h1>
  <ul>
    <li>Title: {{ $media->title }}</li>
    <li>Description: {{ $media->description }}</li>
    <li>Start Date: {{ $media->start_date }}</li>
  </ul>
@stop