<div>
   <h1>Update student Data </h1>
   <form action="" method="post">
    @csrf
    <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name"><br><br>
     <input type="text" name="name" value="{{ $data->email }}" placeholder="Enter your email"><br><br>
      <input type="text" name="name" value="{{ $data->phone }}" placeholder="Enter your phone"><br><br>
  <button type="submit">Update</button>
        <a href="{{ route('list42') }}">Cancel</a>
   </form>
</div>
