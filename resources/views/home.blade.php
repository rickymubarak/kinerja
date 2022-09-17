@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a type="button" class="btn btn-outine-dark" href="/rencana"> Lanjut ke Project! </a>
                    <a type="button" class="btn btn-outine-dark" href="/master"> test </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
