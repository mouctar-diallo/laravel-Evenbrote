@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $events->titre }}</div>

                <div class="card-body">
                    <h3>{{ $events->description }}</h3>
                </div>
                <p><a href="{{route('events.edit', $events)}}">
                    <input type="submit" value="modifier" class="btn btn-primary">         
                </a></p>
                <p><a href="{{route('events.destroy', $events)}}">
                    <form method="post" action="{{route('events.destroy', $events)}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" value="delete" class="btn btn-danger" onclick="return confirm('voulez vous supprimer ?');">         
                    </form>
                </a></p>
                <a href="{{route('events.index')}}">retour a la page d'acceuil</a>
            </div>
        </div>
    </div>
</div>
@endsection
