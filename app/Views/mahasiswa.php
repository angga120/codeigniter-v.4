<!doctype html>
<html>
    <head>
        <title>Halaman Mahasiswa</title>
    </head>
    <body>
        <h2>Halo Administrator</h2>
        <h6>Data Mahasiswa</h6>
        
        <table border=1 cellspacing=0 cellpadding=0>
            <tr>
                <th>no</th>
                <th>nim</th>
                <th>nama</th>
                <th>action</th>
            </tr>
            <?php
                $i = 1;
                foreach($mhs->getResult() as $datamhs)
                {
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $datamhs->nim ?></td>
                    <td><?php echo $datamhs->nama ?></td>
                    <td><a href="/mahasiswa/edit">Edit</a> | Delete</td>
                </tr>
            <?php
                $i++;
                }
            ?>
        </table>

    </body>
</html>