<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <table class="table">
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>NPM</th>
        <th>TANGGAL LAHIR</th>
        <th>DOSEN</th>
        <th>JURUSAN</th>

      </tr>
      <?php
      $count = 0;
      foreach ($mahasiswa as $row) {
        $count = $count + 1;
      ?>
        <tr>
          <td><?php echo $count ?></td>
          <td><?php echo $row->nama ?></td>
          <td><?php echo $row->npm ?></td>
          <td><?php echo $row->tgl_lahir ?></td>
          <td><?php echo $row->dosen ?></td>
          <td><?php echo $row->jurusan ?></td>

        </tr>
      <?php } ?>
    </table>
  </section>
</div>

  </body>

  </html>