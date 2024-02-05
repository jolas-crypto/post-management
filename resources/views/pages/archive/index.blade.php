@extends('layouts.app')

@section('title')
    Post Management | Archived
@endsection

@section('content')
    <archived-index
    :data="{{ json_encode($data) }}"
    />
@endsection

@push('scripts')
    @vite('resources/js/app.js')
@endpush