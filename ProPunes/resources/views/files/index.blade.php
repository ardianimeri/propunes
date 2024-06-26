@extends('layouts.front')

@section('content')

<h1>All Uploaded Files</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>File Name</th>
                <th>Uploaded At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->file_name }}</td>
                    <td>{{ $file->created_at }}</td>
                    <td>
                        <a href="{{ route('files.show', $file->id) }}">View</a> |
                        <a href="{{ route('files.download', $file->id) }}">Download</a>
                        <form action="{{ route('files.destroy', $file->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection