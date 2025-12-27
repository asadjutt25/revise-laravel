

<div>
   <h1>this is home page</h1>
{{-- lec#11  --}}
<h1>{{ $name }}</h1>
<h1>{{ rand() }}</h1>
<h1>{{ $users[0] }}</h1>



@if($name == 'Asad')
    <h2>This is Asad</h2>
@elseif($name == 'Sikander')
    <h2>This is Sikander</h2>
@elseif($name == 'Sultan')
    <h2>This is Sultan</h2>
@else
    <h2>Other user</h2>
@endif


<div>
   @foreach ( $users as $user )
      <h4> {{ $user }}</h4>
   @endforeach
</div>



<div>
   @for ($i =0 ; $i <3 ;$i ++)
       <h3>{{ $i }}</h3>
       @endfor
</div>
   <a href="/home">Home</a>
<a href="/about/asad">About</a>
<a href="/">welcome page</a>
<a href="/student/aad">student</a>
<a href="/user">user from controller</a>
<a href="name/{name}">data of name from controller</a>
<a href="/admin">view.admin.login</a>


{{-- lec#12 :- include sub-view files in view files  --}}
@include('common.header')
@include('common.inner',['page'=>"this is home page "])