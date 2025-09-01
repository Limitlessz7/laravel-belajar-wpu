<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard tikus kantor</title>
    <style>     .marquee-container {
      position: relative;
      width: 100%;
      overflow: hidden;
      background: black;
      color: red;
      font-weight: bold;
      white-space: nowrap;
    }

    .marquee-text {
      display: inline-block;
      padding-left: 100%;
      animation: marquee-right 15s linear infinite;
    }

    .marquee-track {
      display: inline-block;
      white-space: nowrap;
    }

    @keyframes marquee-right {
      0% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(100%);
      }
    }
    
  </style>
</head>
<body>
    <h1>TIKUS KANTOR WEBSITE</h1>
    <a href="/">kembali ke landing page</a>
    <a href="/blog">blogspot</a>
    <a href="/tentang">tentang website</a>


</head>
<body>

  <div class="marquee-container">
    <div class="marquee-text">
      <span class="marquee-track">
        BAHAYA INDONESIA GELAP!! KRISIS BEBAS PENDAPAT !! DEMOKRASI HAMPIRR TIADA !! &nbsp;&nbsp;
      </span>
      <span class="marquee-track">
        BAHAYA INDONESIA GELAP!! KRISIS BEBAS PENDAPAT !! DEMOKRASI HAMPIRR TIADA !! &nbsp;&nbsp;
      </span>
    </div>
  </div>

    {{-- <h4>selamat datang tamu terhormat, <?= $nama ?></h4> --}}
    <h4>selamat datang tamu terhormat, {{$nama}}</h4>
</body>
</html>