<div class="content-wrapper">
    <section class="content-header">
      <h1>
       Data Mahasiswa
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mahasiswa</li>
      </ol>
    </section>

    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus"></i> Tambah Data</button>

        <table class="table">
            <tr>
            <th>NO</th>
                <th>NAMA</th>
                <th>NPM</th>
                <th>TANGGAL LAHIR</th>
                <th>DOSEN</th>
                <th>JURUSAN</th>
          <th colspan="2">AKSI</th>
            </tr>
    <?php
  $count = 0;
  foreach ($mahasiswa as $row) {
      $count = $count +1;
    ?>
              <tr>
                <td><?php echo $count?></td>
                <td><?php echo $row ->nama?></td>
                <td><?php echo $row ->npm?></td>
                <td><?php echo $row ->tgl_lahir?></td>
                <td><?php echo $row ->dosen?></td>
                <td><?php echo $row ->jurusan?></td>
          <td onclick="javascript: return confirm('anda yakin ingin menghapus?')"><?php echo anchor('mhs/hapus/'.$row->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i><div>') ?></td>
            <td><?php echo anchor('mhs/ubad/'.$row->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>
            </tr>
        <?php } ?>
        </table>

    </section>
    <section>
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="<?php echo base_url().'index.php/mhs/fungsitambah';?>" method="POST">

        <div class="form-group">
            <label> Nama </label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label> Npm </label>
            <input type="text" name="npm" class="form-control">
        </div>
        <div class="form-group">
      <label >Tanggal Lahir</label>
      <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
  </div>
        <input type="text" name ="tgl_lahir"class="form-control" id="date">     
    
  </div>

        <div class="form-group">
            <label> Dosen </label>
            <input type="text" name="dosen" class="form-control">
        </div>
        <div class="form-group">
            <label> Jurusan</label>
            <input type="text" name="jurusan" class="form-control">
        </div>

                <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">simpan</button>
      </form>
      </div>
      
    </div>
  </div>
</div>
    </section>
</div>