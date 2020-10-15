@extends('master')


@section('title', $message->title)

@section('content')

<h2 style="font-size:300%;">{{$message->title}}</h2>
<p1 style=" text-align:center;">{{$message->content}}</p1>

@endsection