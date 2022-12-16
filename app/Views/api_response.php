<a href="<?= site_url('api/request') ?>">Back</a>
<br /><br />

<table>
  <tr>
    <td>Kota Asal:</td>
    <td><?=$data_origin['city_name']?></td>
  </tr>
  <tr>
    <td>Kota Tujuan:</td>
    <td><?=$data_destination['city_name']?></td>
  </tr>
</table>
<br /><br />

<table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Layanan</th>
        <th>Biaya</th>
        <th>Estimasi Sampai</th>
      </tr>
    </thead>
    <tbody>
      <?php $num=1 ?>
      <?php foreach ($data_ongkir as $ongkir) : ?>
        <tr>
          <td><?= $num++; ?></td>
          <td><?= $ongkir['service'];?></td>
          <td><?= number_format($ongkir['cost'][0]['value']);?></td>
          <td><?= $ongkir['cost'][0]['etd'];?> Hari</td>
      <?php endforeach ?>
    </tbody>
</table>