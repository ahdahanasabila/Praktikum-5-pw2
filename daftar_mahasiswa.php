    <?php

    require_once './class_mahasiswa.php';

    $faiz = new Mahasiswa('02011', 'Faiz Fikri');
    $alissa = new Mahasiswa('02012', 'Alissa Khairunisa');
    $rosa = new Mahasiswa('02013', 'Rosalie Naurah');
    $defi = new Mahasiswa('02014', 'Defano Nugraha ');

    $faiz->prodi = 'TI';
    $faiz->thn_angkatan = '2012';
    $faiz->ipk = '3.8';

    $alissa->prodi = 'TI';
    $alissa->thn_angkatan = '2012';
    $alissa->ipk = '2.8';

    $rosa->prodi = 'TI';
    $rosa->thn_angkatan = '2012';
    $rosa->ipk = '3.0';

    $defi->prodi = 'TI';
    $defi->thn_angkatan = '2012';
    $defi->ipk = '2.0';

    $ar_mahasiswa = new Mahasiswa($faiz, $alissa, $rosa, $defi);

    echo $faiz->nim;
    echo "<br>" .$faiz->nama;
    echo "<br>" .$faiz->prodi;
    echo "<br>" .$faiz->ipk;
    echo "<br>" .$faiz->thn_angkatan;
    ?>

