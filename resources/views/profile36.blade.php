{{-- <div>
   <h1>profile page </h1>
   <h2>{{ session('name') }}</h2>
   @if(session('name'))
    <h1>welcome  <a href="/login36">login36</a> ,{{ session('name') }}</h1>
    @else
        <h1>no user found in the session <a href="/login36">login36</a></h1>
    
    @endif
   <a href="logout36">logout</a>
</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Profile</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

<style>
body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(120deg,#00c6ff,#0072ff);
    font-family:'Inter',sans-serif;
}

.card{
    width:420px;
    padding:40px;
    border-radius:24px;
    background:white;
    text-align:center;
    box-shadow:0 25px 60px rgba(0,0,0,0.35);
    animation:slide 0.7s ease;
}

@keyframes slide{
    from{opacity:0; transform:translateY(30px)}
    to{opacity:1; transform:translateY(0)}
}

.card h1{
    color:#0072ff;
    margin-bottom:10px;
}

.card h2{
    margin-bottom:25px;
    color:#333;
}

.card a{
    display:inline-block;
    padding:12px 26px;
    background:linear-gradient(45deg,#ff416c,#ff4b2b);
    color:white;
    text-decoration:none;
    border-radius:30px;
    font-weight:600;
    transition:0.3s;
}

.card a:hover{
    transform:scale(1.05);
}
</style>
</head>

<body>

<div class="card">
    @if(session('name'))
        <h1>🎉 Welcome</h1>
        <h2>{{ session('name') }}</h2>
        <a href="{{ route('logout36') }}">Logout</a>
    @else
        <h1>No active session</h1>
        <a href="{{ route('login36') }}">Login</a>
    @endif
</div>

</body>
</html>
