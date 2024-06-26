@extends('layouts.front')

@section('content')

    <h1>File Details</h1>
    <p><strong>File Name:</strong> {{ $file->file_name }}</p>
    <p><strong>Uploaded At:</strong> {{ $file->created_at }}</p>
    <a href="{{ route('files.download', $file->id) }}">Download</a>

@endsection