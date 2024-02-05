@extends('layouts.app')

@section('title')
    Post Management | Index
@endsection

@section('content')
    <post-index
    :data="{{ json_encode($data) }}"
    />
@endsection

@push('scripts')
    @vite('resources/js/app.js')
@endpush