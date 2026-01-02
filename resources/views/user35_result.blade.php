<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>User Request Data</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

* {
    margin: 0; padding: 0; box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    color: #fff;
}

.result-card {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(20px);
    border-radius: 15px;
    padding: 40px 30px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    width: 600px;
    max-width: 95vw;
    animation: pop 0.8s ease;
}

@keyframes pop {
    from {transform: scale(0.8); opacity: 0;}
    to {transform: scale(1); opacity: 1;}
}

h1 {
    margin-bottom: 25px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
    text-shadow: 0 2px 5px rgba(0,0,0,0.4);
    text-align: center;
}

.label {
    font-weight: 600;
    font-size: 16px;
    margin-top: 20px;
    color: #ffd700;
    text-shadow: 0 1px 3px rgba(0,0,0,0.4);
}

.value, pre {
    background: rgba(255, 255, 255, 0.25);
    border-radius: 8px;
    padding: 12px 15px;
    margin-top: 5px;
    font-size: 15px;
    color: #fff;
    box-shadow: inset 0 2px 6px rgba(255,255,255,0.3);
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-x: auto;
}

.btn-back {
    display: block;
    margin: 30px auto 0;
    padding: 12px 30px;
    background: linear-gradient(45deg, #ff0080, #7928ca, #2afadf);
    border-radius: 30px;
    color: #fff;
    font-weight: 700;
    text-decoration: none;
    text-align: center;
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    transition: transform 0.3s ease;
    width: fit-content;
}

.btn-back:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}
</style>
</head>
<body>

<div class="result-card">
    <h1>Request Information</h1>

    <div>
        <div class="label">Request Method:</div>
        <div class="value">{{ $data['method'] }}</div>
    </div>

    <div>
        <div class="label">Request Path:</div>
        <div class="value">{{ $data['path'] }}</div>
    </div>

    <div>
        <div class="label">Request URL:</div>
        <div class="value">{{ $data['url'] }}</div>
    </div>

    <div>
        <div class="label">Email:</div>
        <div class="value">{{ $data['email'] }}</div>
    </div>

    <div>
        <div class="label">Password:</div>
        <div class="value">{{ $data['password'] }}</div>
    </div>

    <div>
        <div class="label">Input Array:</div>
        <pre>{{ print_r($data['input_array'], true) }}</pre>
    </div>

    <div>
        <div class="label">Input Collection:</div>
        <pre>{{ print_r($data['input_collection'], true) }}</pre>
    </div>

    <div>
        <div class="label">POST Method Check:</div>
        <div class="value">{{ $data['is_post'] }}</div>
    </div>

    <div>
        <div class="label">User35 Path Check:</div>
        <div class="value">{{ $data['is_user35'] }}</div>
    </div>

    <div>
        <div class="label">IP Address:</div>
        <div class="value">{{ $data['ip'] }}</div>
    </div>

    <a href="{{ url('form35') }}" class="btn-back">Back to Login</a>
</div>

</body>
</html>
