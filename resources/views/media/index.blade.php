@extends('layouts.master')

@section('title', 'Media')

@section('footer')
    @parent

@stop

@section('content')
    @foreach ( $media as $m )
            {{ $m->title }}
            {{ $m->description }}
    @endforeach
@stop