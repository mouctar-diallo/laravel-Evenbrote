@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ $events->count() }} EVENEMENTS</h2></div>

                <div class="card-body">
                  <h1>les evenements</h1>
                  @foreach ($events as $event)
                    <a href="{{ route('events.show', $event)  }}">
                        <h2>{{$event->titre}}</h2>
                    </a>
                  @endforeach
                </div>
                {{ $events->links() }}
            </div>
        </div>
    </div>
</div>
@stop