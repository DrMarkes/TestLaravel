@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="">
        <h2>Contact us!</h2>

        <p>This is template for a simple marketing or informational website.</p>

        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('contact') }}">

            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name"
                       value="{{ old('name') }}" placeholder="Andrey">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control" name="email"
                       value="{{ old('email') }}" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="site">Site</label>
                <input id="site" name="site" class="form-control" type="text"
                       value="{{ old('site') }}" placeholder="Site">
            </div>

            <div class="form-group">
                <label for="text">Text</label>
                <textarea id="text" name="text" value="{{ old('text') }}" class="form-control" rows="3"
                          >Some text</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
