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
    body{
        font-family: calibri;
    }

    table{
        margin:0px;
    }   
    </style>

    <center><h2>Grafik Pembelian Tiket</h2></center>

    <?php
    include 'koneksi.php';
    ?>

    <div style="width: 800px; margin:0px;">
        <canvas id="myChart"></canvas>
    </div>

    <br/>
    <br/>

    <table border="1">
        <thead>
            <tr>
                <th>id_pemesanan</th>
                <th>id_daftar</th>
                <th>kode_film</th>
                <th>title</th>
            </tr>
        </thead> 
        <tbody>
            <?php
            $id_pemesanan = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM pemesanan");
            while($d=mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $id_pemesanan ?></td>
                    <td><?php echo $d['id_daftar'] ?></td>
                    <td><?php echo $d['kode_film'] ?></td>
                    <td><?php echo $d['title'] ?></td>
                </tr>
                <?php
            }
            ?>                       
        </tbody>
    </table>

    <script>
        var ctx = document.getElemenById("myChart").getContext('2d');
        var myChart = new Chart(ctx, { 
            type:"bar",
            data: {
                labels: ["Millers", "Kimi no na wa", "Notice"],
                database: [{
                    label: '',
                    data: [
                        <?php
                        $jumlah_film = mysqli_query($koneksi, "select * from pemesanan where title='Millers'");
                        echo mysqli_num_row($jumlah_film); 
                        ?>,
                        <?php
                        $jumlah_film = mysqli_query($koneksi, "select * from pemesanan where title='Kimi no na wa'");
                        echo mysqli_num_row($jumlah_film); 
                        ?>,
                        <?php
                        $jumlah_film = mysqli_query($koneksi, "select * from pemesanan where title='Notice'");
                        echo mysqli_num_row($jumlah_film); 
                        ?>
                    ], 
                    backgroundColor: ['rgba(255, 99, 132, 1)',
                                      'rgba(54, 162, 235, 0.2)', 
                                      'rgba(255, 192, 86, 0.2)',
                                     ],
                    
                    backgroundColor: ['rgba(255, 99, 132, 1)',
                                      'rgba(54, 162, 235, 0.2)', 
                                      'rgba(255, 192, 86, 0.2)',
                                     ],
                                     borderWidth: 1                     
                }]
            },
            options: {
                scales:{
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>   
</body>
</html>