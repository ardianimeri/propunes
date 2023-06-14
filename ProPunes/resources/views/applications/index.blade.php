@extends('layouts.front')
@section('title', 'Aplikimet')

@section('content')
@if ($applicants->isEmpty())
    <p style="margin-top: 10%;">No applications found.</p>
@else
    @foreach ($applicants as $application)
        <div style="margin-top: 10%;">
            <h2>{{ $application->id }}</h2>
            <h2>{{ $application->name }}</h2>
        </div>
    @endforeach
@endif
@endsection
