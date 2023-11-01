<!DOCTYPE html>
<html lang="en">

<head>
    <title>form tamu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kotak">
        <h1>ini form</h1>
        <form action="addtamu.php" method="post">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" class="form-input" maxlength="100" required>

            <label for="email">EMAIL</label>
            <input type="email" name="email" class="form-input" maxlength="100" required>

            <button type="submit" id="btn-kirim">
                KIRIM ❤
            </button>
        </form>
    </div>
</body>

</html>