@extends('layouts.front')
@section('title', 'Aplikimet')

@section('content')
@if ($applications->isEmpty())
    <p style="margin-top: 10%;">No applications found.</p>
@else
    @foreach ($applications as $application)
        <div style="margin-top: 10%;">
            <h2>{{ $application->id }}</h2>
            <h2>{{ $application->user_id }}</h2>  
        </div>
    @endforeach
@endif
@endsection