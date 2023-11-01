<!DOCTYPE html>
<html>
<head>
    <title>Sample Page</title>
</head>
<body>
    <h1>Welcome to the Sample Page</h1>

    @if (Auth::check())
        <p>Hello, {{ Auth::user()->name }}!</p>
        <p>Your user type is: {{ Auth::user()->type }}</p>
        
        @if (Auth::user()->type == 0)
            <p>You are a type 0 user.</p>
        @else
            <p>You are a different type of user.</p>
        @endif
        <p>u</p>
        <p><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @else
        <p>You are not logged in.</p>
        <p><a href="{{ route('login') }}">Login</a></p>
    @endif
</body>
</html>
