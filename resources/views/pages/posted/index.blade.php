@extends('layouts.app')

@section('title')
    Post Management | All Post
@endsection

@section('content')
    <posted-index
    :data="{{ json_encode($data) }}"
    />
@endsection

@push('scripts')
    @vite('resources/js/app.js')
@endpush