<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id DESC");
$total = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Siswa</title>
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
        --accent: #6c5ce7;
        --accent-2: #00d4a0;
        --warning: #ff9f43;
        --danger: #ff5e57;
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
    }
    .wrap { max-width: 1000px; margin: 0 auto; }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
        margin-bottom: 28px;
    }
    .header h2 {
        margin: 0;
        font-size: 26px;
        font-weight: 700;
        letter-spacing: -0.5px;
    }
    .header p {
        margin: 4px 0 0;
        color: var(--text-dim);
        font-size: 14px;
    }
    .badge {
        background: var(--surface-2);
        border: 1px solid var(--border);
        color: var(--accent-2);
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
    }
    .btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 10px 18px;
        text-decoration: none;
        color: white;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: transform 0.15s ease, box-shadow 0.15s ease, opacity 0.15s ease;
    }
    .btn:hover { transform: translateY(-2px); }
    .tambah {
        background: linear-gradient(135deg, var(--accent), #a29bfe);
        box-shadow: 0 6px 16px rgba(108, 92, 231, 0.35);
    }
    .card {
        background: var(--surface);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    }
    table { border-collapse: collapse; width: 100%; }
    th, td {
        padding: 14px 16px;
        text-align: left;
        font-size: 14px;
    }
    thead th {
        background: var(--surface-2);
        color: var(--text-dim);
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.5px;
        font-weight: 600;
        border-bottom: 1px solid var(--border);
    }
    tbody tr { border-bottom: 1px solid var(--border); transition: background 0.15s ease; }
    tbody tr:last-child { border-bottom: none; }
    tbody tr:hover { background: rgba(108, 92, 231, 0.06); }
    .nama-cell { font-weight: 600; }
    .pill {
        display: inline-block;
        padding: 3px 10px;
        border-radius: 20px;
        background: var(--surface-2);
        border: 1px solid var(--border);
        font-size: 12px;
        color: var(--text-dim);
    }
    .aksi { display: flex; gap: 8px; }
    .aksi .btn { padding: 7px 12px; font-size: 13px; }
    .edit { background: rgba(255, 159, 67, 0.15); color: var(--warning); }
    .edit:hover { background: rgba(255, 159, 67, 0.28); }
    .hapus { background: rgba(255, 94, 87, 0.15); color: var(--danger); }
    .hapus:hover { background: rgba(255, 94, 87, 0.28); }
    .empty {
        text-align: center;
        padding: 60px 20px;
        color: var(--text-dim);
    }
    .empty .icon { font-size: 40px; margin-bottom: 10px; }
</style>
</head>
<body>
<div class="wrap">
    <div class="header">
        <div>
            <h2>📋 Data Siswa</h2>
            <p>Kelola data siswa dengan mudah</p>
        </div>
        <div style="display:flex; align-items:center; gap:12px;">
            <span class="badge"><?= $total ?> siswa</span>
            <a href="tambah.php" class="btn tambah">+ Tambah Siswa</a>
        </div>
    </div>

    <div class="card">
        <?php if ($total > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><span class="pill"><?= htmlspecialchars($row['nis']) ?></span></td>
                    <td class="nama-cell"><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['kelas']) ?></td>
                    <td><?= htmlspecialchars($row['jurusan']) ?></td>
                    <td>
                        <div class="aksi">
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn edit">✏ Edit</a>
                            <a href="hapus.php?id=<?= $row['id'] ?>" class="btn hapus" onclick="return confirm('Yakin hapus data ini?')">🗑 Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php else: ?>
        <div class="empty">
            <div class="icon">🗒️</div>
            <p>Belum ada data siswa. Klik <b>+ Tambah Siswa</b> untuk mulai.</p>
        </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
