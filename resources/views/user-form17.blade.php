<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advanced User Form 17</title>
    <style>
      input, select, button {
        border: orangered 1px solid;
        height: 35px;
        width: 250px;
        border-radius: 4px;
        color: black;
        margin-bottom: 10px;
      }
      label {
        font-weight: bold;
      }
      .error {
        color: red;
        margin-bottom: 15px;
      }
      .success {
        color: green;
        margin-bottom: 15px;
      }
    </style>
</head>
<body>
    <h1>Add New User - Form 17</h1>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('user-form17') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="userName">User Name:</label><br>
        <input type="text" name="userName" id="userName" value="{{ old('userName') }}">
        @error('userName') <div class="error">{{ $message }}</div> @enderror

        <br>

        <label for="Email">Email:</label><br>
        <input type="email" name="Email" id="Email" value="{{ old('Email') }}">
        @error('Email') <div class="error">{{ $message }}</div> @enderror

        <br>

        <label for="City">City:</label><br>
        <input type="text" name="City" id="City" value="{{ old('City') }}">
        @error('City') <div class="error">{{ $message }}</div> @enderror

        <br>

        <label>User Skills:</label><br>
        <input type="checkbox" name="skill[]" id="php" value="php" {{ is_array(old('skill')) && in_array('php', old('skill')) ? 'checked' : '' }}>
        <label for="php">PHP</label>

        <input type="checkbox" name="skill[]" id="node" value="node" {{ is_array(old('skill')) && in_array('node', old('skill')) ? 'checked' : '' }}>
        <label for="node">Node</label>

        <input type="checkbox" name="skill[]" id="java" value="java" {{ is_array(old('skill')) && in_array('java', old('skill')) ? 'checked' : '' }}>
        <label for="java">Java</label>

        <input type="checkbox" name="skill[]" id="python" value="python" {{ is_array(old('skill')) && in_array('python', old('skill')) ? 'checked' : '' }}>
        <label for="python">Python</label>

        @error('skill') <div class="error">{{ $message }}</div> @enderror

        <br>

        <label for="profile_image">Profile Image (jpeg,png,jpg max 2MB):</label><br>
        <input type="file" name="profile_image" id="profile_image" accept="image/*">
        @error('profile_image') <div class="error">{{ $message }}</div> @enderror

        <br>

        <button type="submit">Add User</button>
    </form>
</body>
</html>
