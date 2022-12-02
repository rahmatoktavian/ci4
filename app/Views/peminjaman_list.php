<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Data Peminjaman</h1>

<a href="<?= site_url('peminjaman/insert') ?>" class="btn btn-primary"><i class="fas fa-plus"></i> Insert</a>
<br /><br />

<table class="table table-striped" id="dataTable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Pinjam</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          <td><?= $row['tanggal']; ?></td>
          <td nowrap>
            <a href="<?= site_url('peminjaman_buku/'.$row['id']) ?>" class="btn btn-info"><i class="fas fa-edit"></i> Buku</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>

<?= $this->endSection('content'); ?>