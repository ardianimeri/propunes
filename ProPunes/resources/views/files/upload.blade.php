@extends('layouts.front')

@section('content')
<div class="upload">
    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile" name="file">
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>

<style>
    .upload{
        margin-top: 100px;
    }
    </style>
@endsection
