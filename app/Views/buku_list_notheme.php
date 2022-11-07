<a href="<?= site_url('buku/insert') ?>">Insert</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Stok</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['kategori_nama']; ?></td>
          <td><?= $row['judul']; ?></td>
          <td><?= $row['stok']; ?></td>
          <td nowrap>
            <a href="<?= site_url('buku/'.$row['id']) ?>" >Update</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>

<br />
<a href="<?= site_url('buku_export_xls') ?>">Export Excel</a>
<a href="<?= site_url('buku_export_pdf') ?>">Export PDF</a>