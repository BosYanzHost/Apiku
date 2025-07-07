
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>-</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      color: #333;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px 20px;
    }
    header {
      text-align: center;
      margin-bottom: 40px;
    }
    header h1 {
      font-size: 2.8em;
      color: #1e2a78;
      background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    header p {
      color: #555;
      font-size: 1.2em;
      max-width: 600px;
      margin: 10px auto 0;
    }
    .store-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      width: 100%;
      max-width: 1100px;
    }
    .product-card {
      background: linear-gradient(to bottom right, #ffffff, #f4f7ff);
      border-radius: 16px;
      padding: 25px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.08);
      text-align: center;
      transition: all 0.3s ease;
      border: 1px solid #dce1f5;
    }
    .product-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(0,0,0,0.12);
      background: linear-gradient(to bottom right, #e3f2fd, #f0f5ff);
      border-color: #c8d6ff;
    }
    .product-card h3 {
      margin-bottom: 12px;
      font-size: 1.3em;
      color: #2e3a59;
    }
    .product-card p {
      font-size: 0.98em;
      color: #666;
      line-height: 1.6;
    }
    .wa-button {
      position: fixed;
      bottom: 25px;
      right: 25px;
      background: linear-gradient(45deg, #00b156, #00d084);
      color: white;
      border: none;
      padding: 12px 18px;
      border-radius: 50px;
      font-weight: 500;
      text-decoration: none;
      box-shadow: 0 6px 16px rgba(0,0,0,0.2);
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.95em;
      transition: background 0.3s ease;
    }
    .wa-button:hover {
      background: linear-gradient(45deg, #019a4d, #00c473);
    }
    .wa-button img {
      width: 20px;
      height: 20px;
    }
  </style>
</head>
<body>

  <header>
    <h1>MAS YANZ</h1>
    <p>Solusi Otomatisasi & Layanan Digital Modern</p>
  </header>

  <div class="store-container">
    <div class="product-card">
      <h3>Script Premium</h3>
      <p>Dapatkan script berkualitas tinggi untuk otomatisasi, bot, tools marketing, dan keperluan digital lainnya. Support update & dokumentasi.</p>
    </div>
    <div class="product-card">
      <h3>Sewa API Web</h3>
      <p>Layanan API siap pakai untuk WhatsApp Gateway, login otomatis, sistem notifikasi, dan banyak lagi. Cepat, stabil, dan mudah integrasi.</p>
    </div>
    <div class="product-card">
      <h3>Copy Tampilan Web</h3>
      <p>Ingin tampil profesional? Kami bantu salin atau buat ulang tampilan website modern sesuai referensi atau kebutuhan Anda.</p>
    </div>
  </div>

  <a class="wa-button" href="https://wa.me/6283831720505" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WA Icon">
    Hubungi Kami
  </a>

</body>
</html>
