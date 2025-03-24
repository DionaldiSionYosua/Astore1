<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Website AStore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="wrapper">
        <div class="info-text login">
            <img src="gambar/ASTORE.png" width="65%" alt="AStore Logo">
            <h2>Selamat Datang</h2>
            <p>Daftarkan diri Anda dan mulai gunakan layanan kami</p>
        </div>
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>Register</h2>
            <form action="#" method="POST">
                <div class="input-box">
                    <input type="text" name="username" id="username" required>
                    <label for="username">Username</label>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" id="password" required>
                    <label for="password">Password</label>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="confirm_password" id="confirm_password" required>
                    <label for="confirm_password">Confirm Password</label>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" required>
                    <label>Masukkan Email</label>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="pembeli">Pembeli</option>
                    </select>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
</body>
</html>