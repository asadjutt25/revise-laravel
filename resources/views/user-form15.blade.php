{{-- lec#15 --}}



 <div>
  <h2> part 2 of form</h2>
  <h4>Add user skill</h4>
  <form action="{{ 'adduser' }}" method="post">
    @csrf
    <div>
      <h4>user skill</h4>
      <input type="checkbox" name="skill" value="php" id="php">
      <label for="php">php</label>
      <input type="checkbox" name="skill" value="node" id="node">
      <label for="node">node</label>
      <input type="checkbox" name="skill" value="java" id="java">
      <label for="java">java</label>
    </div>

    <div>
      <h4>Gender</h4>
      <input type="radio" name="gender" value="Male" id="Male">
      <label for="Male">Male</label>
      <input type="radio" name="gender" value="Femail" id="Femail">
      <label for="Femail">Femail</label>

    </div>

    <div>
      <h4>city</h4>
      <select name="City" id="City">
        <option value="vehari">vehari</option>
        <option value="lahore">lahore</option> 
         <option value="fasalbad">fasialabad</option>
         </select>
    </div>
    <div>
      <input type="range" name="age" min="18" max="100">
    </div>
    <button>Add New User</button>
  </form>

</div> 