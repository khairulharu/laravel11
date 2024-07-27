<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Ini Adalah Halaman About</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
     <a href="/">Home</a>
     <a href="/about">About</a>
     <a href="/blog">Blog</a>
     <a href="/kontak">Kontak</a>
     
     <h1>Halaman About</h1>

     <h3>Owner yang sekarang: {{ $name }} </h3>

     <p>ini adalah halaman about yang di parsing menggunakan template engine nya php</p>

     <h4>Ini adalah foto Dari aktris {{ $fotoTitle }}</h4>
     <img src="img/gyj.jpg" alt="" width="300">
</body>
</html>