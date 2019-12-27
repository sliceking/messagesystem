@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('send') }}">
    @csrf
    <div class="form-group">
        <label for="to">To</label>
          <select name="form-control" id="to">
            @foreach($users as $user)
              <option value="{{ $user->id }}">{{ $user->name }}, {{ $user->email }}</option>
            @endforeach
          </select>
    </div>
    <div class="form-group">
        <label for="subject">subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <input type="textarea" class="form-control" id="message" name="message" placeholder="Enter message">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
