<!DOCTYPE html>
<body>
    @if(count($users))
        @foreach($users as $user)
            {{$user->name}} / {{$user->email}}
        @endforeach
    @else
        <p>0 users</p>
    @endif
</body>
