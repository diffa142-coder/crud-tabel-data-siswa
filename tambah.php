<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
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

        .form-control {
            background-color: #303441;
            border-color: #3a3e4a;
            color: #dfe1e6;
        }

        .form-control:focus {
            background-color: #363b48;
            border-color: #00d4a0;
            color: #dfe1e6;
            box-shadow: 0 0 0 0.25rem rgba(0, 212, 160, 0.15);
        }

        .form-control::placeholder {
            color: #6b7080;
        }

        a.text-muted,
        p.text-muted {
            color: #9498a3 !important;
        }
    </style>
</head>

<body data-bs-theme="dark">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <a href="index.php" class="text-decoration-none text-muted d-inline-block mb-3">
                    <i class="bi bi-arrow-left"></i> Kembali ke daftar
                </a>
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="card-title mb-1"><i class="bi bi-plus-circle"></i> Tambah Data Siswa</h4>
                        <p class="text-muted small mb-4">Isi form di bawah untuk menambahkan siswa baru</p>

                        <form action="proses_tambah.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="text" name="nis" class="form-control" placeholder="Contoh: 2024001" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Contoh: Budi Santoso" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" name="kelas" class="form-control" placeholder="Contoh: XII" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="Contoh: RPL" required>
                            </div>

                            <button type="submit" class="btn btn-success w-100 mt-2">
                                <i class="bi bi-save"></i> Simpan Data
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>