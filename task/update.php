<?php
include 'connect.php';
$id = $_GET['id'];
$get_data = "select * from films where id=$id";
$result_data = mysqli_query($conn, $get_data);
$row = mysqli_fetch_assoc($result_data);
$title = $row['title'];
$genre = $row['genre'];
$rilis = $row['rilis'];
$sutradara = $row['sutradara'];
$negara = $row['negara'];
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $rilis = $_POST['rilis'];
    $sutradara = $_POST['sutradara'];
    $negara = $_POST['negara'];
    $sql = "update films set id=$id, title='$title', genre='$genre', rilis='$rilis', sutradara='$sutradara', negara='$negara' where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:read.php');
    } else {
        die($conn->$connect_error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class='card w-50 m-auto p-3'>
        <h3 class="text-center ">Update</h3>
        <form method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Film</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="mb-3">
                <label for="sutradara" class="form-label">Sutradara</label>
                <input type="text" class="form-control" id="sutradara" name="sutradara" value="<?php echo $sutradara; ?>">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $genre; ?>">
            </div>
            <div class="mb-3">
                <label for="rilis" class="form-label">Tahun Rilis</label>
                <input type="date" class="form-control" id="rilis" name="rilis" value="<?php echo $rilis; ?>">
            </div>
            <div class="mb-3">
                <label for="negara" class="form-label">Negara</label>
                <input type="text" class="form-control" id="negara" name="negara" value="<?php echo $negara; ?>">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Update</button>
        </form>
    </div>
</body>
</html>