@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header bg-warning mb-3">{{ __('Notificacions') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas dins!') }}
                </div>
            </div>
            <forms-component></forms-component>
        </div>
    </div>
</div>
@endsection
