<!DOCTYPE html>
<html lang="en">
<head>
    <title>Biodata</title>
    <link rel="stylesheet type="text/css" href="one.css">
</head>
<body>
<div class="head">
        <?php
            $nama_lengkap = "Diaz Prisheila Dharmawan";
            $npm = "21081010027";
            $tempat = "Surabaya";
            $tanggal_lahir = "15-03-2003";
            $agama = "Islam";
            $JK = "Perempuan";
            $alamat = "Jl. Karangrejo Balong No. 20";
            $hobi = "Traveling";
            $jurusan = "Teknik Informatika";
            $fakultas = "Fakultas Ilmu Komputer";
            $telp = "+62 896 8718 xxxx";
            $mail = "diazdharmawan03@gmail.com";
            $ig = "@pprisparkle";
            $tw = "Diaz Dharmawan";
            $tk = "TK Aisyah Muhammadyah";
            $sd = "SDN II Sedati Gede";
            $smp = "SMPN 49 Surabaya";
            $smk = "SMKN 12 Surabaya";
            $selisih = date_diff(date_create($tanggal_lahir), date_create('today'))->y;
        ?>
        <div class="kotak"></div>
        <img class="one" src="one.png"/> 
        <h5> <?php echo "Who Am I"; ?> </h5>
        <p class="hello"> <?php echo "HELLO"; ?> </p>
        <p class="isi">
            <?php
            echo "$nama_lengkap, seorang mahasiswa semester 4 yang sedang menjalani studi S1 jurusan $jurusan di Universitas Pembangunan Nasional Veteran Jawa Timur. Anak kedua dari tiga bersaudara, memiliki sifat yang pemalu membuat saya tidak bisa menonjol. Cenderung lebih senang berdiskusi atau bertukar argumen untuk menyelesaikan masalah dan pekerjaan dan dapat bekerja sama dalam sebuah tim.";
            ?>
        </p>
    </div>

    <div class="profil">
        <h2> <?php echo "PROFILE"; ?> </h2>
        <img class="two" src="two.jpeg"/>
        <table class="center"> 
            <tr>
                <td>Nama </td>
                <td> <?php echo " : $nama_lengkap"; ?></td>
            </tr>
            <tr>
                <td> NPM  </td>
                <td> <?php echo " : $npm"; ?></td>
            </tr>
            <tr>
                <td> Tempat, Tanggal Lahir </td>
                <td> <?php echo " : $tempat, $tanggal_lahir"; ?></td>
            </tr>
            <tr>
                <td> Umur </td>
                <td> <?php echo " : $selisih tahun"; ?> </td>
            </tr>
            <tr>
                <td> Agama  </td>
                <td> <?php echo " : $agama"; ?></td>
            </tr>
            <tr>
                <td> Jenis Kelamin  </td>
                <td> <?php echo " : $JK"; ?></td>
            </tr>
            <tr>
                <td> Alamat  </td>
                <td> <?php echo " : $alamat"; ?></td>
            </tr>
            <tr>
                <td> Hobi  </td>
                <td> <?php echo " : $hobi"; ?></td>
            </tr>
            <tr>
                <td> Program Studi  </td>
                <td> <?php echo " : $jurusan"; ?></td>
            </tr>
            <tr>
                <td> Fakultas  </td>
                <td> <?php echo " : $fakultas"; ?></td>
            </tr>
        </table>
    </div>

    <div class="edu">
        <h2> <?php echo "EDUCATION"; ?> </h2>
        <div class="tk"> <?php echo "KINDERGARTEN<br> 2007 - 2009<br>  $tk"; ?> </div>
        <div class="sd"> <?php echo "ELEMENTARY SCHOOL<br> 2009 - 2015<br> $sd"; ?> </div>
        <div class="smp"> <?php echo "JUNIOR HIGH SCHOOL<br> 2015 - 2018<br> $smp"; ?> </div>
        <div class="smk"> <?php echo "SENIOR HIGH SCHOOL<br> 2018 - 2021<br> $smk"; ?> </div>
    </div>

    <div class="kontak">
        <h3> <?php echo "Contact Person"; ?> </h3>
        <p class="cp">
            <?php echo "$alamat <br>
            Telp : $telp <br>
            Mail : $mail <br>
            IG : $ig <br>
            Twit : $tw"; 
            ?>
        </p>
        <div class="quote"> <?php echo ' " Remind yourself; life is a test " '; ?> </div>
    </div>

    <div class="by">
        <h4 class="footer"> <?php echo "Created by Diaz"; ?> </h4>
    </div>

</body>
</html>