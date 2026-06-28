<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coffee World</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Prompt',sans-serif;
}

body{
    background:#eef1ff;
}

/* Navbar */
.navbar{
    background:#fff;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,.05);
}

.logo{
    font-size:24px;
    font-weight:bold;
    color:#5b54f5;
}

.nav-links a{
    text-decoration:none;
    color:#111827;
    margin-left:20px;
    font-weight:500;
}

/* Hero */
.hero{
    text-align:center;
    padding:80px 20px;
}

.hero h1{
    font-size:48px;
    color:#111827;
}

.hero p{
    margin-top:15px;
    color:#64748b;
    font-size:18px;
}

.hero button{
    margin-top:25px;
    padding:12px 25px;
    border:none;
    border-radius:50px;
    background:#5b54f5;
    color:#fff;
    cursor:pointer;
    font-size:16px;
}

/* Menu */
.section-title{
    text-align:center;
    margin:40px 0 20px;
    color:#111827;
}

.menu-container{
    display:flex;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
    padding:20px;
}

.card{
    width:220px;
    background:#fff;
    border-radius:15px;
    padding:20px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.card img{
    width:100%;
    border-radius:10px;
}

.card h3{
    margin-top:15px;
}

.card p{
    color:#64748b;
    margin:10px 0;
}

.card button{
    padding:10px 20px;
    border:none;
    border-radius:30px;
    background:#5b54f5;
    color:white;
    cursor:pointer;
}

/* Promotion */
.promo{
    width:80%;
    margin:40px auto;
    background:#fff;
    padding:25px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

/* Footer */
.footer{
    margin-top:50px;
    background:#fff;
    text-align:center;
    padding:20px;
    color:#64748b;
}

</style>
</head>
<body>

<div class="navbar">
    <div class="logo">☕ Coffee World</div>

    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Menu</a>
        <a href="#">Promotion</a>
        <a href="#">Welcome <?php echo $_SESSION['user_id']; ?></a>
        <a href="logout.php">Logout</a>
    </div>
</div>

<div class="hero">
    <h1>Fresh Coffee Every Day ☕</h1>
    <p>สัมผัสรสชาติกาแฟคุณภาพจากเมล็ดคัดพิเศษ</p>

    <button>ดูเมนูทั้งหมด</button>
</div>

<h2 class="section-title">เมนูแนะนำ</h2>

<div class="menu-container">

    <div class="card">
        <img src="https://via.placeholder.com/220x150" alt="">
        <h3>Espresso</h3>
        <p>ราคา 60 บาท</p>
        <button>สั่งซื้อ</button>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/220x150" alt="">
        <h3>Americano</h3>
        <p>ราคา 65 บาท</p>
        <button>สั่งซื้อ</button>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/220x150" alt="">
        <h3>Latte</h3>
        <p>ราคา 75 บาท</p>
        <button>สั่งซื้อ</button>
    </div>

    <div class="card">
        <img src="https://via.placeholder.com/220x150" alt="">
        <h3>Cappuccino</h3>
        <p>ราคา 80 บาท</p>
        <button>สั่งซื้อ</button>
    </div>

</div>

<div class="promo">
    <h2>🎉 โปรโมชั่นพิเศษ</h2>
    <p>ซื้อ 2 แก้ว ลดทันที 10%</p>
    <p>สมาชิกใหม่รับส่วนลด 20%</p>
</div>

<div class="footer">
    <p>Coffee World © 2026</p>
    <p>Open Daily 08:00 - 20:00</p>
</div>

</body>
</html>

