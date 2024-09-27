<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3</title>
    <style>
        body {
            background-image: url('/assets/img/bg.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f2c9d6; /* Light pastel background */
            display: flex;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .form-container {
            background-color: #ffffff;
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            width: 350px;
            margin-left: 100px; /* Positioned to the left side */
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centers the content vertically */
            align-items: center; /* Centers the content horizontally */
        }

        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .input-field {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 50px;
            border: 1px solid #ddd;
            background-color: #f7f7f7;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .input-field:focus {
            outline: none;
            border-color: #f080a0;
        }

        .submit-btn {
            background-color: #f080a0;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 50px;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            margin-top: 20px;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #e66787;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
            width: 100%; 
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Form Data</h2>
        <form action="{{ route('user.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input class="input-field" type="text" name="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="npm">NPM :</label>
                <input class="input-field" type="text" name="npm" placeholder="Masukkan NPM">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <input class="input-field" type="text" name="kelas" placeholder="Masukkan Kelas">
            </div>
            <button class="submit-btn" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>