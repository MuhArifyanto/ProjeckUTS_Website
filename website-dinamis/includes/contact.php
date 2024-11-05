<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            line-height: 1.6;
            color: #666;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kontak Kami</h1>
        <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan isi formulir di bawah ini. Kami akan segera merespon pesan Anda.</p>
        
        <form action="proses_kontak.php" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="pesan">Pesan</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
