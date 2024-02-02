@extends('layouts.app')

@section('title')
    Post Management | Index
@endsection

@section('content')
    <post-index/>
@endsection

@push('scripts')
    @vite('resources/js/app.js')
@endpush