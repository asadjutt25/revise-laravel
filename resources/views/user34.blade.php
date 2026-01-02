<div>


  {{-- use for the get method  --}}
    {{-- <h1>user form</h1>
    <form action="/user33" method="get">
    <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
      <input type="int" name="phone" placeholder="Enter phone number">
    <br>
    <br>
      <input type="password" name="password" placeholder="Enter password">
    <br>
    <br>
      <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
    <button style="background-color: red">submit</button>
    </form> --}}



{{-- 
         use for the post method --}}
     {{-- <h1>user form</h1>
    <form action="/user33" method="post">
      @csrf
    <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
      <input type="int" name="phone" placeholder="Enter phone number">
    <br>
    <br>
      <input type="password" name="password" placeholder="Enter password">
    <br>
    <br>
      <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
    <button style="background-color: red">submit</button>
    </form> --}}



{{-- 
         use for the putt method --}}
     {{-- <h1>user form</h1>
    <form action="/user33" method="post">
      <input type="hidden" name="_method" value="PUT">
      @csrf
    <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
      <input type="int" name="phone" placeholder="Enter phone number">
    <br>
    <br>
      <input type="password" name="password" placeholder="Enter password">
    <br>
    <br>
      <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
    <button style="background-color: red">submit</button>
    </form>   --}}
    


{{-- use for the delect method --}}

     <h1>user form</h1>
    <form action="/user34" method="post">
      @method('PUT')

      @csrf
    <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
      <input type="int" name="phone" placeholder="Enter phone number">
    <br>
    <br>
      <input type="password" name="password" placeholder="Enter password">
    <br>
    <br>
      <input type="text" name="user" placeholder="Enter name">
    <br>
    <br>
    <button style="background-color: red">submit</button>
    </form>  



    
</div>
