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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #23262f;
            color: #dfe1e6;
        }

        .card {
            background-color: #2a2e38;
            border: 1px solid #383c47;
        }

        .table {
            --bs-table-bg: transparent;
            --bs-table-color: #dfe1e6;
            --bs-table-hover-bg: #333744;
            --bs-table-hover-color: #dfe1e6;
            --bs-table-striped-bg: #2f333d;
        }

        .table thead th {
            background-color: #303441;
            color: #a7abb7;
            border-bottom: 1px solid #3a3e4a;
        }

        .table td,
        .table th {
            border-color: #383c47;
        }

        .badge.text-bg-light {
            background-color: #383c47 !important;
            color: #c9cdd6 !important;
        }

        a.text-muted,
        p.text-muted {
            color: #9498a3 !important;
        }
    </style>
</head>

<body data-bs-theme="dark">
    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h2 class="mb-0"><i class="bi bi-clipboard-data"></i> Data Siswa</h2>
                <p class="text-muted mb-0">Kelola data siswa dengan mudah</p>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="badge text-bg-success fs-6"><?= $total ?> siswa</span>
                <a href="tambah.php" class="btn btn-primary">
                    <i class="bi bi-plus-lg"></i> Tambah Siswa
                </a>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <?php if ($total > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                while ($row = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><span class="badge text-bg-light border"><?= htmlspecialchars($row['nis']) ?></span></td>
                                        <td class="fw-semibold"><?= htmlspecialchars($row['nama']) ?></td>
                                        <td><?= htmlspecialchars($row['kelas']) ?></td>
                                        <td><?= htmlspecialchars($row['jurusan']) ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>
                                                <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">
                                                    <i class="bi bi-trash"></i> Hapus
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="text-center text-muted py-5">
                        <i class="bi bi-journal-x" style="font-size: 2.5rem;"></i>
                        <p class="mt-3 mb-0">Belum ada data siswa. Klik <strong>+ Tambah Siswa</strong> untuk mulai.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>