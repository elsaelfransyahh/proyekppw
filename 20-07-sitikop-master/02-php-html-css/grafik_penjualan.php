<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Pembelian Tiket</title>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>
    <style>

    </style>

    <center><h2>Grafik Penjualan Tiket</h2></center>

    <?php
    include 'koneksi.php'
    ?>

    <div style="width: 800px; margin:0px;">
        <canvas id="myChart"></canvas>
    </div>

    <br/>
    <br/>

    <table border="1">
        <thead>
            <tr>
                <th>id_penjualan</th>
                <th>id_penjualan</th>
                <th>kode_film</th>
                <th>title</th>
            </tr>
        </thead> 
        <body>
            <?php
            $id_penjualan = 1;
            $data=mysqli_query($koneksi, "select * from penjualan");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $id_penjualan ?></td>
                    <td><?php echo $d['id_penjualan'] ?></td>
                    <td><?php echo $d['kode_film'] ?></td>
                    <td><?php echo $d['title'] ?></td>
                </tr>           
            }            
            
        </body>

    </table>
    
</body>
</html>