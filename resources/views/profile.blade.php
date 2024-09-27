<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: pink;
        }
        .container {
            text-align: center;
            background-image: url('https://i.pinimg.com/564x/2a/ff/1f/2aff1f4e6d74eb211a88f00e0be7dd50.jpg');
            background-color: #fff;
            padding: 50px; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            background-image: url('https://i.pinimg.com/236x/34/43/7d/34437da9272435f1a0c55afebbdebc6e.jpg');
            background-size: cover;
            border-radius: 50%;
            margin: 0 auto;
            border: 1.5px solid;
        }
        .info {
            margin-top: 20px;
        }
        .info div {
            background-color: #e0e0e0;
            padding: 10px;
            margin: 10px 0;
            width: 200px; 
            margin: 10px auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="profile-pic"></div>
        <div class="info">
            <div>{{$nama}}</div>
            <div>Kelas: {{ $nama_kelas ?? 'Kelas Tidak Ditemukan' }}</div> 
            <div>{{$npm}}</div>
        </div>
    </div>

</body>
</html>