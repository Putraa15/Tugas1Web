<?php
// kontak.php - form kontak sederhana
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kontak - Amanda Computer</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="container header-inner">
    <h1 class="logo">Amanda Computer</h1>
    <nav>
      <ul>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="produk.html">Produk & Layanan</a></li>
        <li><a href="kontak.php" class="active">Kontak</a></li>
      </ul>
    </nav>
  </div>
</header>

<section class="container">
  <h2>Hubungi Kami</h2>
  <form method="POST" action="">
    <label>Nama</label>
    <input type="text" name="nama" required>
    <label>Email</label>
    <input type="email" name="email" required>
    <label>Jenis Layanan</label>
    <select name="layanan">
      <option value="percetakan">Percetakan</option>
      <option value="service">Service Komputer</option>
      <option value="hardware">Penjualan Hardware</option>
      <option value="lainnya">Lainnya</option>
    </select>
    <label>Pesan</label>
    <textarea name="pesan" rows="5" required></textarea>
    <button type="submit">Kirim</button>
  </form>

<?php
if (\$_SERVER["REQUEST_METHOD"] == "POST") {
    \$nama = htmlspecialchars(\$_POST['nama']);
    \$email = htmlspecialchars(\$_POST['email']);
    \$layanan = htmlspecialchars(\$_POST['layanan']);
    \$pesan = htmlspecialchars(\$_POST['pesan']);
    echo "<div class='hasil'>";
    echo "<h3>Terima kasih, ".\$nama."!</h3>";
    echo "<p>Kami menerima permintaan untuk: <b>".\$layanan."</b></p>";
    echo "<blockquote>".\$pesan."</blockquote>";
    echo "<p>Balasan akan dikirim ke: <b>".\$email."</b></p>";
    echo "</div>";
}
?>
</section>

<footer>
  <div class="container">
    <p>© 2025 Amanda Computer</p>
  </div>
</footer>
</body>
</html>
