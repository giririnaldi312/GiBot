<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login Telegram AI Agent</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{

height:100vh;
display:flex;
justify-content:center;
align-items:center;

background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
overflow:hidden;

}

/* Bubble Background */

body::before{

content:'';
position:absolute;

width:600px;
height:600px;

background:#00d2ff;
opacity:.18;
border-radius:50%;

top:-250px;
left:-250px;

filter:blur(80px);

}

body::after{

content:'';
position:absolute;

width:500px;
height:500px;

background:#6a11cb;
opacity:.25;
border-radius:50%;

bottom:-220px;
right:-220px;

filter:blur(90px);

}

.card{

width:430px;

padding:45px;

background:rgba(255,255,255,.08);

border:1px solid rgba(255,255,255,.2);

backdrop-filter:blur(15px);

border-radius:25px;

box-shadow:0 20px 40px rgba(0,0,0,.4);

position:relative;

z-index:99;

}

.logo{

font-size:75px;
text-align:center;

}

h2{

text-align:center;
color:white;

margin-top:10px;
margin-bottom:5px;

}

.subtitle{

text-align:center;
color:#ddd;

margin-bottom:35px;

font-size:14px;

}

.input-box{

margin-bottom:18px;

}

.input-box label{

display:block;
color:white;

margin-bottom:8px;

font-size:14px;

}

.input-box input{

width:100%;

padding:14px;

border:none;

outline:none;

border-radius:12px;

background:rgba(255,255,255,.15);

color:white;

font-size:15px;

}

.input-box input::placeholder{

color:#ddd;

}

button{

width:100%;

padding:14px;

border:none;

border-radius:12px;

font-size:16px;

font-weight:bold;

background:linear-gradient(90deg,#00d2ff,#3a7bd5);

color:white;

cursor:pointer;

transition:.3s;

}

button:hover{

transform:translateY(-2px);

box-shadow:0 10px 20px rgba(0,0,0,.35);

}

.footer{

margin-top:25px;

text-align:center;

font-size:13px;

color:#ddd;

}

.error{

background:#ff4b5c;

padding:12px;

border-radius:10px;

color:white;

margin-bottom:18px;

}

.show{

margin-top:10px;
color:white;
font-size:14px;

}

.show input{

margin-right:5px;

}

</style>

</head>

<body>

<div class="card">

<div class="logo">
🤖
</div>

<h2>Telegram AI Agent</h2>

<div class="subtitle">

Silakan login untuk masuk ke Dashboard

</div>

@if(session('error'))

<div class="error">

{{ session('error') }}

</div>

@endif

<form method="POST" action="/login">

@csrf

<div class="input-box">

<label>Email</label>

<input
type="email"
name="email"
placeholder="admin@gmail.com"
required>

</div>

<div class="input-box">

<label>Password</label>

<input
id="password"
type="password"
name="password"
placeholder="********"
required>

</div>

<div class="show">

<input
type="checkbox"
onclick="showPassword()">

Lihat Password

</div>

<br>

<button>

🔐 LOGIN

</button>

</form>

<div class="footer">

Telegram AI Agent Dashboard<br>

© 2026 Giri Rinaldi

</div>

</div>

<script>

function showPassword(){

let x=document.getElementById("password");

if(x.type==="password"){

x.type="text";

}else{

x.type="password";

}

}

</script>

</body>
</html>