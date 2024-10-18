<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffc0cb; 
        }

        .container {
            text-align: center;
            background-image: url('https://i.pinimg.com/564x/2a/ff/1f/2aff1f4e6d74eb211a88f00e0be7dd50.jpg');
            background-size: cover;
            background-position: center;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            background-color: #ccc;
            background-image: url('https://i.pinimg.com/236x/34/43/7d/34437da9272435f1a0c55afebbdebc6e.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 50%;
            border: 2px solid #555;
            margin: 0 auto 20px;
        }

        .profile-info {
            margin-top: 20px;
        }

        .profile-info div {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin: 10px auto;
            border-radius: 8px;
            width: 240px;
            font-weight: bold;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .img-bx {
        width: 200px;               /* Circle size */
        height: 200px;
        margin: 0 auto 20px;
        border-radius: 50%;          /* Make the container circular */
        overflow: hidden;            /* Keep the image within the circle */
        border: 3px solid #555;      /* Optional border */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Depth effect */
        position: relative;
        background-color: #f0f0f0;  /* Fallback color */
    }

    .img-bx img {
        position: absolute;          /* Position the image inside the circle */
        top: 50%;
        left: 50%;
        width: 100%;                 /* Ensure image fills the width */
        height: 100%;                /* Ensure image fills the height */
        object-fit: cover;           /* Maintain aspect ratio and cover the area */
        transform: translate(-50%, -50%); /* Center the image perfectly */
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <div class="img-bx">
                <!-- Tampilkan foto user atau gambar default -->
                <img style="width: 100%" src="{{asset('upload/img/'.$user->foto) }}" alt="img">
            </div>

            <div class="profile-info">
                <div>Nama : {{ $user->nama }}</div>
                <div>Kelas : {{ $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan'}}</div>
                <div>NPM : {{ $user->npm }}</div>
            </div>
        </div>
    </div>
</body>
</html>