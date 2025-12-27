{{-- resources/views/user-form18.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lecture 18 - Custom Validation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9fafb;
            margin: 0; padding: 2rem;
        }
        .container {
            max-width: 400px;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 0.6rem;
            margin-top: 0.3rem;
            margin-bottom: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1rem;
        }
        .skills {
            margin-bottom: 1rem;
        }
        .skills label {
            margin-right: 1rem;
        }
        .error {
            color: #e53e3e;
            font-size: 0.9rem;
            margin-top: -0.6rem;
            margin-bottom: 0.8rem;
        }
        button {
            width: 100%;
            padding: 0.7rem;
            background-color: #3182ce;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2c5282;
        }
        .success {
            background: #9ae6b4;
            padding: 1rem;
            border-radius: 4px;
            color: #276749;
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New User (Lecture 18)</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <form action="{{ url('user-form18') }}" method="post">
            @csrf

            <label for="userName">User Name (Must be Uppercase)</label>
            <input type="text" id="userName" name="userName" value="{{ old('userName') }}">
            @error('userName')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email" value="{{ old('Email') }}">
            @error('Email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="City">City</label>
            <input type="text" id="City" name="City" value="{{ old('City') }}">
            @error('City')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="skills">
                <label>User Skills (Select at least one):</label><br>
                <label><input type="checkbox" name="skill[]" value="php" {{ (is_array(old('skill')) && in_array('php', old('skill'))) ? 'checked' : '' }}> PHP</label>
                <label><input type="checkbox" name="skill[]" value="node" {{ (is_array(old('skill')) && in_array('node', old('skill'))) ? 'checked' : '' }}> Node</label>
                <label><input type="checkbox" name="skill[]" value="java" {{ (is_array(old('skill')) && in_array('java', old('skill'))) ? 'checked' : '' }}> Java</label>
            </div>
            @error('skill')
                <div class="error">{{ $message }}</div>
            @enderror

            <button type="submit">Add New User</button>
        </form>
    </div>
</body>
</html>
