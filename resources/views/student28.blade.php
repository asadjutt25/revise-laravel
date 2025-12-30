<div>
   <h1>student list</h1>
   {{-- {{  print_r($users) }} --}}

<table border="1">
    <tr style="background-color: red">
        <td>Name</td>
        <td>Email</td>
        <td>batch</td>
    </tr>
    @foreach ($data as $student )
    <tr>
        <td style="background-color:chartreuse">{{ $student->name }}</td>
         <td style="background-color:rgb(10, 155, 145)">{{ $student->email }}</td>
          <td style="background-color:rgb(194, 19, 133)">{{ $student->batch }}</td>
    </tr>
        
    @endforeach
</table>
</div>