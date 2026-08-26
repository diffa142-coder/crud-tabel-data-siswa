<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tambah Data Siswa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
    :root {
        --bg: #0f1115;
        --surface: #171a21;
        --surface-2: #1e222b;
        --border: #2a2f3a;
        --text: #e7e9ee;
        --text-dim: #8b8f9c;
        --accent: #00d4a0;
        --radius: 14px;
    }
    * { box-sizing: border-box; }
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 40px 20px;
        background: radial-gradient(circle at top left, #1a1d29, var(--bg) 60%);
        color: var(--text);
        min-height: 100vh;
        display: flex;
        justify-content: center;
    }
    .wrap { width: 100%; max-width: 480px; }
    a.back {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: var(--text-dim);
        text-decoration: none;
        font-size: 14px;
        margin-bottom: 18px;
        transition: color 0.15s ease;
    }
    a.back:hover { color: var(--accent); }
    .card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 32px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    }
    .card h2 {
        margin: 0 0 4px;
        font-size: 22px;
        font-weight: 700;
    }
    .card p.sub {
        margin: 0 0 24px;
        color: var(--text-dim);
        font-size: 13px;
    }
    label {
        font-weight: 600;
        font-size: 13px;
        display: block;
        margin-bottom: 6px;
        margin-top: 16px;
        color: var(--text-dim);
    }
    label:first-of-type { margin-top: 0; }
    input {
        width: 100%;
        padding: 12px 14px;
        background: var(--surface-2);
        color: var(--text);
        border: 1px solid var(--border);
        border-radius: 10px;
        font-family: inherit;
        font-size: 14px;
        transition: border-color 0.15s ease, background 0.15s ease;
    }
    input::placeholder { color: #5a5f6b; }
    input:focus {
        outline: none;
        border-color: var(--accent);
        background: #232833;
    }
    button {
        width: 100%;
        margin-top: 26px;
        padding: 13px;
        background: linear-gradient(135deg, var(--accent), #55efc4);
        color: #0b1f18;
        border: none;
        border-radius: 10px;
        font-family: inherit;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 6px 16px rgba(0, 212, 160, 0.3);
        transition: transform 0.15s ease;
    }
    button:hover { transform: translateY(-2px); }
</style>
</head>
<body>
<div class="wrap">
    <a href="index.php" class="back">&larr; Kembali ke daftar</a>
    <div class="card">
        <h2>➕ Tambah Data Siswa</h2>
        <p class="sub">Isi form di bawah untuk menambahkan siswa baru</p>
        <form action="proses_tambah.php" method="POST">
            <label>NIS</label>
            <input type="text" name="nis" placeholder="Contoh: 2024001" required>

            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Contoh: Budi Santoso" required>

            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Contoh: XII" required>

            <label>Jurusan</label>
            <input type="text" name="jurusan" placeholder="Contoh: RPL" required>

            <button type="submit">Simpan Data</button>
        </form>
    </div>
</div>
</body>
</html>
