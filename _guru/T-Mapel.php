<div class="row">

    <div class="col-md-8 offset-md-3 mr-auto ml-auto">
        <div class="card" style="border-radius:10px;">
            <div class="card-header">
                <strong class="card-title"><span class="fa fa-plus"></span> Tambah Pelajaran</strong>

            </div>
            <div class="card-body">
                <form action="?page=act" method="post" accept-charset="utf-8">


                    <div class="form-group">
                        <!-- <label>ID Guru</label> -->
                        <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']; ?>" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama Mata Pelajaran</label>
                        <select name="nama_mapel" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                            <option value=""></option>
                            <option value="" selected>- Pilih Matapelajaran -</option>
                            <?php
                            $sqlGuru = mysqli_query($con, "SELECT * FROM tb_mastermapel");
                            while ($g = mysqli_fetch_array($sqlGuru)) {
                                echo "<option value='$g[mapel]'>$g[id_mMapel] | $g[mapel]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                            <option value=""></option>
                            <option value="" selected>- Pilih kelas -</option>
                            <?php
                            $sqlGuru = mysqli_query($con, "SELECT * FROM tb_kelas ORDER BY idkelas ASC");
                            while ($g = mysqli_fetch_array($sqlGuru)) {
                                echo "<option value='$g[idkelas]'> $g[idkelas] | $g[kelas]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rombel/Jurusan</label>
                        <select name="jurusan" data-placeholder="Choose a country..." multiple class="standardSelect">
                            <option value=""></option>
                            <option value="SD/MI"> SD/MI</option>
                            <option value="SMP/MTs"> SMP/MTs</option>
                            <option value="SMA/MK"> SMA/MK</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Tingkat</label>
                        <select name="tingkat" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                            <option value="" selected>- Pilih Tingkat -</option>
                            <option value="1"> Tingkat 1 (VII)</option>
                            <option value="2"> Tingkat 2 (VIII)</option>
                            <option value="3"> Tingkat 3 (IX)</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="Tmapel"> <span class="fa fa-save"></span> Simpan</button>
                        <button class="btn btn-danger" type="reset"> <span class="fa fa-close"></span> Reset</button>
                        <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>