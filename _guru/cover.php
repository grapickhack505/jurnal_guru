<div class="col-md-12">
    <div class="feed-box text-center">
        <section class="card">
            <div class="card-body">
                <div class="corner-ribon blue-ribon">
                    <i class="fa fa-book"></i>
                </div>
                <!-- <P>
                                        <b>Bagaimana kalau Agenda di isi setelah Guru/ admin menginputkan mapel.. lalu tampil ke hal Agenda guru .. Lalu guru menambahkan agenda berdasarkan mapel yg dia inginkan </b>
                                    </P> -->
                <h2>APLIKASI KEGIATAN HARIAN GURU</h2>
                <h3>TAHUN AJARAN
                    <!-- Manampilkan Tahun ajaran -->
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM tb_tajaran WHERE status='Y' ");
                    while ($g = mysqli_fetch_array($sql)) {
                        echo " $g[tahun_ajaran]";
                    }
                    ?>




                </h3>

                <hr style="border: 1.5px dashed;">
                <a href="#">
                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="../images/OZAN_1.png">
                </a>
                <br>
                <br>
                <center>
                    <table>
                        <thead>
                            <tr>
                                <th> Nama </th>
                                <th width="20"></th>
                                <th width="20"> : </th>
                                <th> <?php echo $data['nama_guru']; ?> </th>
                            </tr>
                            <tr>
                                <th> NIP/NUPTK </th>
                                <th></th>
                                <th> : </th>
                                <th> <?php echo $data['nip']; ?></th>
                            </tr>
                    </table>
                </center>
                <hr>
                <h2>SMK PLUS KARYA BHAKTI PERTIWI</h2>

                <p>Kp. Pasirjambu Desa Pasirdalem Kec. Kadupandak Kab. Cianjur Jawa Barat<br> Email : <a href="#">ozanproject@gmail.com</a></p>
            </div>
        </section>
    </div>
</div>