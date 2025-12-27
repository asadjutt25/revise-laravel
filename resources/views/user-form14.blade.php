 <div>
  <h1>Add New Form</h1>
  <form action="adduser" method="post">
    @csrf
    <div class="input-wrapper">
      <input type="text" placeholder="Enter user Name" name="userName">
    </div>
    <div class="input-wrapper">
      <input type="text" placeholder="Enter Your Email" name="Email">
    </div>
    <div class="input-wrapper">
      <input type="text" placeholder="Enter Your City" name="City">
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





