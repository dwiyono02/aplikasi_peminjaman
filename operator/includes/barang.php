<div class="container mt-5">
 
  <h2>Data Barang</h2>
  <hr>


  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Kondisi</th>
        <th>Jumlah</th>
        <th>Jenis</th>
        <th>Tgl. Regis</th>
        <th>Ruang</th>
        <th>Petugas</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $barang): ?>
      
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $barang['nama_barang']; ?>
        <td><?= $barang['kondisi']; ?>
        <td><?= $barang['jumlah']; ?>
        <td><?= $barang['jenis']; ?>
        <td><?= $barang['tgl_regis']; ?>
        <td><?= $barang['ruang']; ?>
        <td><?= $barang['nama']; ?>

      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>