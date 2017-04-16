@extends('layouts.app')

@section('content')

<div class="col-md-9">
    <div class="">
        <h2>Contact us!</h2>

        <p>This is template for a simple marketing or informational website.</p>

        <form method="post" action="{{ route('contact') }}">
            
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name"
                       value="" placeholder="Andrey">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control" name="email"
                       value="" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="site">Site</label>
                <input id="site" name="site" class="form-control" type="text"
                       value="" placeholder="Site">
            </div>

            <div class="form-group">
                <label for="text">Text</label>
                <textarea id="text" name="text" class="form-control" rows="3"
                          >Some text</textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
