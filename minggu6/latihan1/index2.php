<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #utama {
            background: lavenderblush;
            width: 1000px;
            height: 1000px;
            margin: auto;
        }
        #form1{
            background: lightgrey;
            border: 3px solid white;
            margin: 5px;
            padding: 10px;
        }
        #simpan{
            position: absolute ;
            bottom: -180px;
            left: 30;
        }
    </style>    
</head>

<body>
    
    <div id="utama">
        <div id="form1">
    <form action="proses2.php" method="post">
    <table>
        <tr>
            <td><label>NIM </label></td>
            <td>:</td>
            <td><input type="text" name="nim"></td>
            <br>
        </tr>    
        <tr>
            <td><label>Program Studi</label></td>
            <td>:</td>
            <td><select name="prodi">
            <option value="Teknik Informatika S1">Teknik Informatika S1</option>
            <option value="Sistem Informasi S1">Sistem Informasi S1</option>
            <option value="Teknik Informatika D3">Teknik Informatika D3</option>
            </select></td>
            <br>
        </tr>
        <tr>
            <td><label>Nilai Tugas</label></td>
            <td>:</td>
            <td><input type="text" name="nilai_tugas"></td>
        </tr>
        <tr>
            <td><label>Nilai UTS</label></td>
            <td>:</td>
            <td><input type="text" name="nilai_uts"></td>
        </tr>  
        <tr>  
            <td><label>Nilai UAS</label></td>
            <td>:</td>
            <td><input type="text" name="nilai_uas"></td>
        </tr>
        <tr>
            <td><label>Catatan Khusus</label></td>
            <td>:</td>
            <td><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</td>
            <tr>
            <td><td><td><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</td></td></td>
            </tr>
            <td><td><td><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</td></td></td>
        </tr>
        <tr>
    <div id="simpan">    
        <td><button type="submit" name="kirim" style="padding: 6px;width: 3cm;">Submit</button></td>
        </tr>
    </div>
    </form>
    </table>
    </div>
    </div>
</body>

</html>