<a href="<?= site_url('kategori/insert') ?>">Insert</a>
<br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['nama']; ?></td>
          <td nowrap>
            <a href="<?= site_url('kategori/'.$row['id']) ?>" >Update</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
</table>