<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Judul</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($list as $row) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $row['kategori_nama']; ?></td>
          <td><?= $row['judul']; ?></td>
      <?php endforeach ?>
    </tbody>
</table>