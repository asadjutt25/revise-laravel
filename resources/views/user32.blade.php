<div>
   <h1>uers32 list</h1>
   {{-- {{  print_r($users) }} --}}

<table border="1">
    <tr style="background-color: red">
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td style="background-color:chartreuse">{{ $user->name }}</td>
         <td style="background-color:rgb(10, 155, 145)">{{ $user->email }}</td>

          <td style="background-color:rgb(194, 19, 133)">{{ $user->phone }}</td>
    </tr>
        
    @endforeach
</table>
</div>