{{-- lec#16 --}}
<div>
  <h1>Add New Form</h1>

  {{-- Show all validation errors at the top --}}
  @if ($errors->any())
    <div style="color: red; margin-bottom: 15px;">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ url('adduser') }}" method="post">
    @csrf

    <div class="input-wrapper">
      <input type="text" placeholder="Enter user Name" name="userName" value="{{ old('userName') }}">
      <span style="color:red">@error('userName') {{ $message }} @enderror</span>
    </div>

    <div class="input-wrapper">
      <input type="text" placeholder="Enter Your Email" name="Email" value="{{ old('Email') }}">
      <span style="color:red">@error('Email') {{ $message }} @enderror</span>
    </div>

    <div class="input-wrapper">
      <input type="text" placeholder="Enter Your City" name="City" value="{{ old('City') }}">
      <span style="color:red">@error('City') {{ $message }} @enderror</span>
    </div>

    <div class="input-wrapper">
      <h4>User Skill</h4>

      <input type="checkbox" name="skill[]" value="php" id="php" {{ is_array(old('skill')) && in_array('php', old('skill')) ? 'checked' : '' }}>
      <label for="php">PHP</label>

      <input type="checkbox" name="skill[]" value="node" id="node" {{ is_array(old('skill')) && in_array('node', old('skill')) ? 'checked' : '' }}>
      <label for="node">Node</label>

      <input type="checkbox" name="skill[]" value="java" id="java" {{ is_array(old('skill')) && in_array('java', old('skill')) ? 'checked' : '' }}>
      <label for="java">Java</label>

      <br>
      <span style="color:red">@error('skill') {{ $message }} @enderror</span>
    </div>

    <div class="input-wrapper">
      <button>Add New User</button>
    </div>
  </form>
</div>

<style>
  input {
    border: orangered 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: rgb(255, 0, 0);
  }

  .input-wrapper {
    margin: 10px;
  }

  button {
    background-color: brown;
    border: rgb(237, 68, 122) 1px solid;
    height: 35px;
    width: 200px;
    border-radius: 2px;
    color: rgb(205, 239, 93);
  }
</style>
