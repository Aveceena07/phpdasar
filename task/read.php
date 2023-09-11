<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center mb-5">Data Film</h3>
        <a class="btn btn-sm btn-success mb-3" href="create.php">Add</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Sutradara</th>
                    <th>Genre</th>
                    <th>Tahun Rilis</th>
                    <th>Negara</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $sql = 'select * from films';
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data['id'];
                        $title = $data['title'];
                        $genre = $data['genre'];
                        $rilis = $data['rilis'];
                        $sutradara = $data['sutradara'];
                        $negara = $data['negara'];
                        echo '
                                <tr>
                                    <td>' .
                            $title .
                            '</td>
                                    <td>' .
                            $sutradara .
                            '</td>
                                    <td>' .
                            $genre .
                            '</td>
                                    <td>' .
                            $rilis .
                            '</td>
                                    <td>' .
                            $negara .
                            '</td>
                            <td class="text-center">
                            <a href="update.php?id=' .
                            $id .
                            '" class="btn btn-sm btn-warning">Update</a>
                            <button onClick="hapus(' .
                            $id .
                            ')" class="btn btn-sm btn-danger">Delete</button>
                        </td>
                                </tr>
                            ';
                    }
                }
                ?>
            </tbody>
            <a class="btn btn-sm btn-danger" onclick="confirmLogout()" href="logout.php">Logout</a>
        </table>
    </div>
    <script>
    function hapus(id) {
        var yes = confirm('Yakin Di Hapus?');
        if (yes == true) {
            window.location.href = "delete.php?id=" + id;
        }
    }
    </script>
    <script>
        function confirmLogout() {
            if (confirm("Yakin ingin logout?")) {
                document.getElementById("logoutForm").submit();
            }
        }
    </script>
</body>

</html>