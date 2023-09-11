<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  Name: <input type="text" name="fname">
  <br>
  <br>
  Umur: <input type="text" name="umur">
  <br>
  <br>
  Gender:
  <input type="radio" name="gender" value="pria">Laki Laki
  <input type="radio" name="gender" value="wanita">Perempuan
  <br><br>
  Makanan Kesukaan: 
  <input type="checkbox" name='makanan[]' value='Rendang'>Rendang
  <input type="checkbox" name='makanan[]' value='Sate'>Sate
  <input type="checkbox" name='makanan[]' value='Ayam'>Ayam
  <br>
  <br>
  <input type="submit">

</form>

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // collect value of input field
    $makananKesukaan = ['Rendang', 'Ayam', 'Sate'];
    $name = $_POST['fname'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $makanan = $_POST['makanan'];
    if (empty($name) && empty($umur)) {
        echo 'Name is empty';
    } else {
        echo 'Nama Saya Adalah ' . $name . '<br/>';
        echo 'Umur Saya Sekarang ' . $umur . '<br/>';
        echo 'Saya Seorang ' . $gender . '<br/>';
        echo 'Dan Makanan Kesukaan Saya Adalah ';
        foreach ($makanan as $makananFav) {
            echo ' ' . "$makananFav";
        }
    }
} ?>
</body>
</html>