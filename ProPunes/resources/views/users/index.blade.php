<!DOCTYPE html>
<body>
    @if(count($users))
        @foreach($users as $user)
            {{$user->name}} / {{$user->email}}
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
            <form method="POST" action="{{ route('users.delete', $user->id) }}">
    @csrf
    <button type="submit" class="btn btn-danger">Delete User</button>
</form>
        @endforeach
    @else
        <p>0 users</p>
    @endif
</body>
