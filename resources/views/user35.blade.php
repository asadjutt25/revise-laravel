<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Modern Login</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    background: linear-gradient(120deg, #ff00cc, #333399, #00c6ff);
    background-size: 300% 300%;
    animation: bgMove 6s infinite alternate;
    display: flex;
    align-items: center;
    justify-content: center;
}

@keyframes bgMove {
    0% { background-position: 0% 50%; }
    100% { background-position: 100% 50%; }
}

.login-card {
    width: 360px;
    padding: 35px;
    border-radius: 18px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(18px);
    box-shadow: 0 25px 50px rgba(0,0,0,0.3);
    color: #fff;
    animation: pop 0.8s ease;
}

@keyframes pop {
    from { transform: scale(0.8); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}

.login-card h1 {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
    letter-spacing: 1px;
}

.input-box {
    margin-bottom: 18px;
}

.input-box input {
    width: 100%;
    padding: 12px;
    border: none;
    outline: none;
    border-radius: 10px;
    background: rgba(255,255,255,0.25);
    color: #fff;
    font-size: 14px;
}

.input-box input::placeholder {
    color: #eee;
}

.input-box input:focus {
    background: rgba(255,255,255,0.35);
}

.login-btn {
    width: 100%;
    padding: 13px;
    border: none;
    border-radius: 30px;
    background: linear-gradient(45deg, #ff0080, #7928ca, #2afadf);
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.4s;
}

.login-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.4);
}

.extra {
    margin-top: 18px;
    text-align: center;
    font-size: 13px;
}

.extra a {
    color: #2afadf;
    text-decoration: none;
    font-weight: 600;
}
</style>
</head>

<body>

<div class="login-card">
    <h1>✨ User Login ✨</h1>

    <form action="user35" method="post">
        <!-- Laravel -->
        @csrf 

        <div class="input-box">
            <input type="email" name="email" placeholder="Email address" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="login-btn">Login</button>
    </form>

    <div class="extra">
        <p>New here? <a href="#">Create Account</a></p>
    </div>
</div>

</body>
</html>
