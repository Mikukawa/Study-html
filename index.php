<?PHP
    session_start();
    if($_SESSION['user_id'] == "") {
        echo "<script type='text/javascript'>";
        echo "alert('Please Login');";
        echo "window.location = 'login.html'; ";
        echo "</script>";
    }
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee World</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f8f8f8;
}

/* Navbar */

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 80px;
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
}

.logo{
    font-size:28px;
    font-weight:bold;
    color:#6f4e37;
}

.menu{
    display:flex;
    list-style:none;
    gap:30px;
}

.menu a{
    text-decoration:none;
    color:#333;
    font-weight:500;
}

.menu a:hover{
    color:#6f4e37;
}

/* Hero */

.hero{
    height:420px;
    background:linear-gradient(
        rgba(111,78,55,.15),
        rgba(111,78,55,.15)
    );
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero-content h1{
    font-size:52px;
    margin-bottom:20px;
    color:#3d2b1f;
}

.hero-content p{
    font-size:18px;
    color:#555;
    margin-bottom:30px;
}

.hero button{
    padding:14px 35px;
    border:none;
    border-radius:30px;
    background:#6f4e37;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:.3s;
}

.hero button:hover{
    background:#5a3f2c;
}

/* Services */

.services{
    padding:80px 10%;
    text-align:center;
}

.services h2{
    font-size:42px;
    color:#3d2b1f;
}

.underline{
    width:80px;
    height:4px;
    background:#6f4e37;
    margin:15px auto 50px;
}

.card-container{
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
}

.card{
    width:320px;
    background:white;
    padding:35px;
    border-radius:15px;
    box-shadow:0 0 15px rgba(0,0,0,.08);
    text-align:left;
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.icon{
    font-size:40px;
    margin-bottom:15px;
}

.card h3{
    margin-bottom:15px;
    color:#3d2b1f;
}

.card p{
    color:#666;
    line-height:1.6;
}
    </style>

</head>
<body>

    <!-- Navbar -->
    <header>
        <nav class="navbar">
            <div class="logo">☕ CoffeeWorld</div>

            <ul class="menu">
                <li><a href="#">หน้าแรก</a></li>
                <li><a href="#">เมนู</a></li>
                <li><a href="#">โปรโมชั่น</a></li>
                <li><a href="#">เกี่ยวกับเรา</a></li>
                <li><a href="#">ติดต่อ</a></li>
                <li><a href="login.html">เข้าสู่ระบบ</a></li>
                <li><a href="register.html">สมัครสมาชิก</a></li>
                <li><a href="index.html">ออกจากระบบ</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>กาแฟแก้วโปรดของคุณ เริ่มต้นที่นี่</h1>
            <p>
                คัดสรรเมล็ดกาแฟคุณภาพดี พร้อมเสิร์ฟความหอมกรุ่น
                ให้ทุกเช้าของคุณพิเศษยิ่งขึ้น
            </p>

            <button>สั่งซื้อเลย</button>
        </div>
    </section>

    <!-- Services -->
    <section class="services">
        <h2>บริการของเรา</h2>
        <div class="underline"></div>

        <div class="card-container">

            <div class="card">
                <div class="icon">☕</div>
                <h3>กาแฟพรีเมียม</h3>
                <p>
                    เมล็ดกาแฟคัดพิเศษจากแหล่งปลูกชั้นนำ
                    ให้รสชาติหอมเข้มทุกแก้ว
                </p>
            </div>

            <div class="card">
                <div class="icon">🥐</div>
                <h3>เบเกอรี่สดใหม่</h3>
                <p>
                    ครัวซองต์และขนมอบสดใหม่ทุกวัน
                    เข้ากันได้ดีกับกาแฟทุกเมนู
                </p>
            </div>

            <div class="card">
                <div class="icon">🚚</div>
                <h3>จัดส่งรวดเร็ว</h3>
                <p>
                    บริการส่งถึงบ้านภายในเวลาอันรวดเร็ว
                    สะดวกและปลอดภัย
                </p>
            </div>

        </div>
    </section>

</body>
</html>