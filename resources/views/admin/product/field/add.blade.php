@extends('layouts.app')

@section('admin-content')

    <h2 class="mb-3">{{ _('Add Product Field') }}</h2>
    <v-row>
        <v-col class="col-12 col-md-5">
            <add-product-field></add-product-field>
            {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            @endif --}}
        </v-col>
    </v-row>
@endsection