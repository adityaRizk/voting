<?php
    require 'function.php';
    $calon = query('SELECT * FROM calon');

    if( isset($_POST['submit'])){
        if(votes($_POST) > 0){
            echo "
            <script type='text/javascript'>
                alert('Pemilihan berhasil')
            </script>
            ";
            
        }else{
            echo "
            <script type='text/javascript'>
                alert('Pemilihan gaga')
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

        <label for="nama_pemilih">Nama</label>
        <input type="text" name="nama_pemilih" id="nama_pemilih"><br><br>

        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas">

        <p>Silahkan pilih calon ketua</p>
        <select name="voting" id="">
            <?php foreach($calon as $calo) : ?>
            <option value="<?= $calo['calon_ketua']; ?>"><?= $calo['calon_ketua']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <button type="submit" name="submit">Pilih</button>
    </form>
    <table>
        <th>Nama calon</th>
        <th>Total Voting</th>
        <?php foreach($calon as $calo) : ?>
            <tr>
                <td><?= $calo['calon_ketua'] ?></td>
                <td><?= $calo['total_voting'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>