<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Edit Data Mahasiswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>
    <section class="content">
        <?php foreach ($mahasiswa as $row) {?>

        <form action="<?php echo base_url().'index.php/mhs/update';?>" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $row->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $row->nama ?>">
            </div>
                <div class="form-group">
                <label>Npm</label>
                <input type="text" name="npm" class="form-control" value="<?php echo $row->npm ?>">
            </div>
                <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $row->tgl_lahir ?>">
                </div>
                <div class="form-group">
                <label>Dosen</label>
                <input type="text" name="dosen" class="form-control" value="<?php echo $row->dosen ?>">
                </div>
                <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="<?php echo $row->jurusan ?>">
                </div>
                

            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
    <?php } ?>

    </section>
</div>