@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Payments</h1>
                <div class="card-header">{{ $user->name }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
