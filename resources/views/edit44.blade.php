<div>
   <h1>Update student Data </h1>
   <form action="/update45/{{ $data->id }}" method="post">
    @csrf
         {{-- hidden put request made fot put or update form in L no 45 --}}
         <input type="hidden" name="_method" value="put" />
    <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name"><br><br>
     <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter your email"><br><br>
      <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Enter your phone"><br><br>
  <button type="submit">Update</button>
        <a href="{{ route('list42') }}">Cancel</a>
   </form>
</div>
