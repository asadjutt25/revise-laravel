{{-- <div>
    <h1>login laravel</h1>
    <form action="login36" method="post">
        @csrf
<input type="text" name="name" placeholder="enter name">
<br>
<br>
<input type="text" name="password" placeholder="enter password">
<br><br>
<button>login</button>



    </form>
</div> --}}


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(135deg,#667eea,#764ba2,#43cea2);
    background-size:300% 300%;
    animation:bg 8s infinite alternate;
}

@keyframes bg{
    0%{background-position:0% 50%}
    100%{background-position:100% 50%}
}

.glass{
    width:380px;
    padding:40px;
    border-radius:22px;
    background:rgba(255,255,255,0.15);
    backdrop-filter:blur(20px);
    box-shadow:0 30px 60px rgba(0,0,0,0.35);
    color:white;
    animation:fade 0.8s ease;
}

@keyframes fade{
    from{opacity:0; transform:scale(0.9)}
    to{opacity:1; transform:scale(1)}
}

.glass h1{
    text-align:center;
    margin-bottom:25px;
    font-weight:700;
}

.input{
    margin-bottom:18px;
}

.input input{
    width:100%;
    padding:14px;
    border-radius:14px;
    border:none;
    outline:none;
    background:rgba(255,255,255,0.25);
    color:white;
    font-size:15px;
}

.input input::placeholder{
    color:#eee;
}

.input input:focus{
    background:rgba(255,255,255,0.35);
}

.btn{
    width:100%;
    padding:14px;
    border:none;
    border-radius:40px;
    background:linear-gradient(45deg,#ff6a00,#ee0979,#00c6ff);
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.4s;
}

.btn:hover{
    transform:translateY(-3px);
    box-shadow:0 12px 30px rgba(0,0,0,0.4);
}

.footer{
    margin-top:20px;
    text-align:center;
    font-size:14px;
    opacity:0.9;
}
</style>
</head>

<body>

<div class="glass">
    <h1>🚀 Login</h1>

    <form action="{{ route('login36.post') }}" method="POST">
        @csrf

        <div class="input">
            <input type="text" name="name" placeholder="Enter name">
        </div>

        <div class="input">
            <input type="password" name="password" placeholder="Enter password">
        </div>

        <button class="btn">Login</button>
    </form>

    <div class="footer">
        Secure session based login
    </div>
</div>

</body>
</html>

