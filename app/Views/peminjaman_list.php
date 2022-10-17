<table border="1">
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
            <a href="<?= site_url('peminjaman_buku/'.$row['id']) ?>" >Buku</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>