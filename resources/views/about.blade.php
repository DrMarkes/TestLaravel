@extends('layouts.app') @section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                @if($page)
                <div class="panel-heading">{{ $page->name }}</div>

                <div class="panel-body">
                    <p>{{ $page->text }}</p>
                </div>

                @else

                <div class="panel-heading">Ничего не найдено</div>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection
