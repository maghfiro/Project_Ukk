<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
    <link rel="stylesheet" href="<?= $_SERVER['DOCUMENT_ROOT'] ?>/spp3/assets/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header img {
            position: absolute;
            top: 5px;
        }

        header h2 {
            position: absolute;
            top: -15px;
            left: 50px;
            font-size: 18px;
            line-height: 25px;
            text-transform: uppercase;
        }

        header h2 span {
            font-size: 12px;
            font-style: regular;
            line-height: 15px;
            text-transform: capitalize;
        }

        section#konten {
            position: absolute;
            top: 125px;
        }

        span.email {
            text-transform: lowercase;
        }

        .hr1 {
            margin-top: 15px;
            border-color: grey;
        }


        .hr2 {
            border: 1px solid black;
            margin-top: -15px;
        }

        .ttd p {
            position: relative;
            left: 70%;
        }
    </style>
</head>

<body>
    <header class="p-0">
    <!-- <h2 class="ml-5 text-center">DATA PETUGAS<br></h2> -->      
    </header>
    <h2 class="ml-5 text-center">DATA TRANSAKSI<br></h2>


    <!-- <section id="konten"> -->
        <hr class="hr1">
        <hr class="hr2">
       

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tgl Bayar</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th>Pembayaran Bulan</th>
                    <th>Jumlah Bayar</th>
                </tr>
            </thead>
            <tbody>

                <?php $no = 1;
                $total = 0;
                foreach ($transaksi as $t) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $t->TGL_BAYAR ?></td>
                        <td><?= $t->NISN ?></td>
                        <td><?= $t->NAMA ?></td>
                        <td><?= $t->nama_kelas ?></td>
                        <td><?= $t->TAHUN ?></td>
                        <td><?= $t->BULAN_DIBAYAR ?></td>
                        <td colspan="4" align="right">Rp.<?= number_format($t->JUMLAH_BAYAR, 0, ",", ".") ?></td>
                    </tr>
                <?php
                    $total += $t->JUMLAH_BAYAR;
                endforeach; ?>
                <tr>
                    <td colspan="7" align="right"><b>Total : </b></td>
                    <td colspan="5" align="right"><b>Rp.<?= number_format($total, 0, ",", "."); ?></b></td>
                </tr>
            </tbody>
        </table>

    </section>
</body>

</html>