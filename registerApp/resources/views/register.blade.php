<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

    <title>Register</title>
</head>
<body>


    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/register" method="POST">
        @csrf
        <h1>Register Form</h1>
        <div>

            <input type="text" placeholder="Name"  id="name" name="name" value="{{ old('name') }}" required>
            @error('name') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>
            <input type="email" placeholder="Email"  id="email" name="email" value="{{ old('email') }}" required>
            @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>

            <input type="password" placeholder="Password (min 6 characters)"  id="password" name="password" required>
            @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        <div>

            <input type="password" placeholder="Password (min 6 characters)"  id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>
