@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($answerIsRight === true)
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Gelukt!</strong> De volgende hint is {{ $answer }}.
                </div>
            @elseif($answerIsRight === false)
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Oh snap!</strong> Het antwoord is niet goed!
                </div>
            @endif
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Woord invoeren</div>
                <div class="card-body">
                    <form action="{{ route('wordmatch.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="word" id="word" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Proberen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
