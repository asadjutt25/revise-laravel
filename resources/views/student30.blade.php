<div>
  <h1>User data from Api</h1>
  {{ print_r($data) }}
  <ul>
    <li>
        <span>Name :</span><span><b> {{ $data->name }}</b> </span></li>
        <li><span>User :<b> </span><span>{{ $data->username }}</span></b></li>
<li><span>Email :<b> </span><span>{{ $data->email }}</span></b></li>
<li><span> Phone:</span><span><b>{{ $data->phone }}</span></b></li>


    </li>
  </ul>
</div>
