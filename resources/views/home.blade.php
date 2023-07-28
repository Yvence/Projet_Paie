@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><marquee behavior="" direction="right"><h2>Bienvenue</h2></marquee></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  Vous etes connecté(e) 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
