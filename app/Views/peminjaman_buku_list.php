<a href="<?= site_url('peminjaman') ?>">Lihat Peminjaman</a>
<br />

<table border="1">
  <tr>
    <td>Nama</td>
    <td><?= $peminjaman['nama']?></td>
  </tr>
  <tr>
    <td>Tanggal Pinjam</td>
    <td><?= $peminjaman['tanggal']?></td>
  </tr>
</table>

<br />
<a href="<?= site_url('peminjaman_buku/insert/'.$peminjaman_id) ?>">Insert Buku</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($peminjaman_buku as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['judul']; ?></td>
          <td nowrap>
            <a href="<?= site_url('peminjaman_buku/delete/'.$row['id']) ?>" onClick="return confirm('Yakin Bro?')" >Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>