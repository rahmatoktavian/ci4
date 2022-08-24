<a href="<?= site_url('buku2/insert') ?>">Insert</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Nama</th>
        <th>Cover</th>
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
          <td>
            <?php if($row['cover']):?>
            <img src="<?= base_url('upload/'.$row['cover'])?>" width="100" />
            <?php endif?>
          </td>
          <td nowrap>
            <a href="<?= site_url('buku2/upload/'.$row['id']) ?>" >Upload</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>