@extends('layouts.app')

@section('content')
  From: {{ $message->userFrom->name }}
  <br>
  Email: {{ $message->userFrom->email }}
  <br>
  Subject: {{ $message->subject }}
  <hr>
  <br>
  Message: {{ $message->body }}
  <hr>
  <a href="{{ route('create', [$message->userFrom->id, $message->subject]) }}" class="btn btn-primary">Reply</a>
@endsection
