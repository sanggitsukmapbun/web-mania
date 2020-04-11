<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Hasil Tabel</title>
    <style>
        #utama {
            background: lavenderblush;
            width: 1000px;
            height: 1000px;
            margin: auto;
        }
        #form1{
            background: lightgray;
            border: 3px solid white;
            margin: 5px;
            padding: 10px;
            float: left;
        }
    </style>
</head>

<body>
    <div id="utama">
        <div id="form1">
    <?php
    if (isset($_POST['kirim'])) {
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        $nilai_akhir = (0.4 * $nilai_tugas) + (0.3 * $nilai_uts) + (0.3 * $nilai_uas);
        if ($nilai_akhir > 84) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 70) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 60) {
            $status = 'Lulus';
        } elseif ($nilai_akhir > 50) {
            $status = 'Tidak Lulus';
        } else {
            $status = "Tidak Lulus";
        }

        $selected_catatan = array();
        if (!empty($_POST['catatan'])) {
            foreach ($_POST['catatan'] as $catatan) {
                array_push($selected_catatan, $catatan);
            }
        }
    ?>
        <table border=2; style= text-align:center>
            <thead>
                <tr>
                    <th>Program Studi</th>
                    <th>NIM</th>
                    <th>Nilai AKhir</th>
                    <th>Status</th>
                    <th>Catatan Khusus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $prodi ?></td>
                    <td><?= $nim ?></td>
                    <td><?= $nilai_akhir ?></td>
                    <td><?= $status ?></td>
                    <td>
                        <?php
                        foreach ($selected_catatan as $catatan_data) {
                            echo $catatan_data . "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

    <?php
    }
    ?>
    </div>
    </div>
</body>

</html>