<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah by Syaila Fa Agna</title>
    <style>
        /* Gaya Dasar */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #FDF5E6; /* Warna Krem Lembut */
            color: #4B0082; /* Teks Ungu Tua */
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(75, 0, 130, 0.15);
            border-top: 10px solid #6A5ACD; /* Aksen Ungu di Atas */
        }

        /* Header & Nama Pembuat */
        header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            margin: 0;
            color: #6A5ACD;
            letter-spacing: 1px;
        }

        .creator-info {
            margin-top: 5px;
            font-size: 0.95em;
            color: #9370DB;
        }

        .creator-info strong {
            color: #4B0082;
            text-decoration: underline;
        }

        /* Styling Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            overflow: hidden;
            border-radius: 10px;
        }

        thead {
            background-color: #6A5ACD; /* Ungu Royal */
            color: white;
        }

        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        td {
            padding: 12px 15px;
            border-bottom: 1px solid #F5F5DC; /* Garis Krem Halus */
        }

        /* Warna baris selang-seling */
        tbody tr:nth-child(even) {
            background-color: #FDFCF0;
        }

        /* Efek saat mouse di atas baris */
        tbody tr:hover {
            background-color: #E6E6FA; /* Ungu Sangat Muda */
            transition: 0.2s;
        }

        .empty-msg {
            text-align: center;
            color: #a0aec0;
            font-style: italic;
        }

        footer {
            text-align: center;
            margin-top: 25px;
            font-size: 0.8em;
            color: #9370DB;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Daftar Mata Kuliah</h1>
            <div class="creator-info">
                Programmed by: <strong>Syaila Fa Agna</strong>
            </div>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Matkul</th>
                    <th>Jurusan/SKS</th>
                </tr>
            </thead>
            <tbody>
                @forelse($matkul as $mk)
                <tr>
                    <td><strong>{{ $mk->kode }}</strong></td>
                    <td>{{ $mk->nama }}</td>
                    <td>{{ $mk->jurusan }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="empty-msg">Belum ada data matkul yang ditemukan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <footer>
            &copy; 2026 Crafted with love for Web Programming Project
        </footer>
    </div>
</body>

</html>