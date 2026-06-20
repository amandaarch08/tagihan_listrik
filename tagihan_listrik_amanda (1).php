<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Percabangan Dengan Form - Tagihan Listrik</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
        }

        .container {
            width: 100%;
            max-width: 520px;
        }

        .header {
            text-align: center;
            margin-bottom: 28px;
        }

        .header h1 {
            color: #e94560;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .header p {
            color: #a8b2d8;
            font-size: 0.78rem;
            margin-top: 6px;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 18px;
            padding: 32px 36px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        .card legend-title {
            display: block;
            color: #e94560;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(233, 69, 96, 0.3);
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            color: #a8b2d8;
            font-size: 0.78rem;
            font-weight: 500;
            margin-bottom: 7px;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 11px 16px;
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-size: 0.88rem;
            outline: none;
            transition: border-color 0.3s, background 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-color: #e94560;
            background: rgba(233, 69, 96, 0.07);
        }

        select option {
            background: #1a1a2e;
            color: #ffffff;
        }

        input[type="number"]::placeholder {
            color: rgba(168, 178, 216, 0.4);
        }

        .btn-submit {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #e94560, #c62a47);
            border: none;
            border-radius: 10px;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 8px;
            transition: transform 0.2s, box-shadow 0.2s;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(233, 69, 96, 0.4);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Result Card */
        .result-card {
            margin-top: 24px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            padding: 24px 28px;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .result-card h3 {
            color: #e94560;
            font-size: 0.82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 16px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(233, 69, 96, 0.25);
        }

        .result-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 7px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .result-row:last-child {
            border-bottom: none;
        }

        .result-row .label {
            color: #a8b2d8;
            font-size: 0.82rem;
        }

        .result-row .value {
            color: #ffffff;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .result-row.highlight .label,
        .result-row.highlight .value {
            color: #e94560;
            font-size: 0.95rem;
            font-weight: 700;
        }

        .footer-note {
            text-align: center;
            margin-top: 22px;
            color: rgba(168, 178, 216, 0.45);
            font-size: 0.7rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>⚡ Tagihan Listrik PLN</h1>
        <p>Latihan Percabangan Dengan Form &nbsp;|&nbsp; Amanda Damayanti &nbsp;|&nbsp; 202432027</p>
    </div>

    <div class="card">
        <legend-title>Form Input Data Pelanggan</legend-title>

        <form method="post">
            <div class="form-group">
                <label>ID Pelanggan</label>
                <input type="text" name="id_pelanggan" placeholder="Masukkan ID Pelanggan"
                    value="<?php echo isset($_POST['id_pelanggan']) ? htmlspecialchars($_POST['id_pelanggan']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan"
                    value="<?php echo isset($_POST['nama_pelanggan']) ? htmlspecialchars($_POST['nama_pelanggan']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Golongan</label>
                <select name="golongan">
                    <option value="">-- Pilih Golongan --</option>
                    <option value="A" <?php echo (isset($_POST['golongan']) && $_POST['golongan']=='A') ? 'selected' : ''; ?>>A</option>
                    <option value="B" <?php echo (isset($_POST['golongan']) && $_POST['golongan']=='B') ? 'selected' : ''; ?>>B</option>
                    <option value="C" <?php echo (isset($_POST['golongan']) && $_POST['golongan']=='C') ? 'selected' : ''; ?>>C</option>
                </select>
            </div>

            <div class="form-group">
                <label>Pemakaian (watt)</label>
                <input type="number" name="pemakaian" placeholder="0"
                    value="<?php echo isset($_POST['pemakaian']) ? htmlspecialchars($_POST['pemakaian']) : ''; ?>">
            </div>

            <input type="submit" name="proses" value="Hitung Tagihan" class="btn-submit">
        </form>

        <?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

        if (isset($_POST['proses'])) {
            $id_pelanggan   = $_POST['id_pelanggan'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $golongan       = $_POST['golongan'];
            $pemakaian      = (float) $_POST['pemakaian'];

            // Biaya per kWh tetap
            $biaya_per_kwh = 12000;

            // Biaya administrasi berdasarkan golongan
            if ($golongan == "A") {
                $biaya_admin = 20000;
            } elseif ($golongan == "B") {
                $biaya_admin = 50000;
            } elseif ($golongan == "C") {
                $biaya_admin = 130000;
            } else {
                $biaya_admin = 0;
            }

            // Biaya pemakaian = Biaya per kWh * Pemakaian (watt)
            $biaya_pemakaian = $biaya_per_kwh * $pemakaian;

            // Total tagihan = Biaya Administrasi + Biaya Pemakaian
            $biaya_tagihan = $biaya_admin + $biaya_pemakaian;

            // Format rupiah
            function rupiah($angka) {
                return "Rp " . number_format($angka, 0, ',', '.');
            }

            echo '
            <div class="result-card">
                <h3>📄 Hasil Perhitungan Tagihan</h3>
                <div class="result-row">
                    <span class="label">ID Pelanggan</span>
                    <span class="value">' . htmlspecialchars($id_pelanggan) . '</span>
                </div>
                <div class="result-row">
                    <span class="label">Nama Pelanggan</span>
                    <span class="value">' . htmlspecialchars($nama_pelanggan) . '</span>
                </div>
                <div class="result-row">
                    <span class="label">Golongan</span>
                    <span class="value">' . htmlspecialchars($golongan) . '</span>
                </div>
                <div class="result-row">
                    <span class="label">Biaya per kWh</span>
                    <span class="value">' . rupiah($biaya_per_kwh) . '</span>
                </div>
                <div class="result-row">
                    <span class="label">Pemakaian</span>
                    <span class="value">' . number_format($pemakaian, 0, ',', '.') . ' watt</span>
                </div>
                <div class="result-row">
                    <span class="label">Biaya Administrasi</span>
                    <span class="value">' . rupiah($biaya_admin) . '</span>
                </div>
                <div class="result-row">
                    <span class="label">Biaya Pemakaian</span>
                    <span class="value">' . rupiah($biaya_pemakaian) . '</span>
                </div>
                <div class="result-row highlight">
                    <span class="label">Total Tagihan</span>
                    <span class="value">' . rupiah($biaya_tagihan) . '</span>
                </div>
            </div>';
        }
        ?>
    </div>

    <p class="footer-note">Amanda Damayanti &nbsp;·&nbsp; NIM 202432027 &nbsp;·&nbsp; Latihan Percabangan Dengan Form</p>
</div>

</body>
</html>
