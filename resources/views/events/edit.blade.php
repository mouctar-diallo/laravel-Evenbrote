@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">MODIFIER UN EVENEMENT</div>

                <div class="card-body">
                  <form action="{{ route('events.update', $events)}}" method="POST">
                  @csrf
                  {{method_field('PUT')}}
                 
                  <!-- 
                      herite du partials pour eviter de duppliquer le meme code dans create et edit 
                    -->
                    @include('partials/_form' ,  ['submitEvenement'=> "modifier l'evenemet"])

                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop