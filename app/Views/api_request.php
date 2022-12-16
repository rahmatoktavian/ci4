<form method="post" action="<?= site_url('api/response') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Kota Asal</td>
      <td>
        <select name="origin">
          <?php foreach($data_kota as $kota):?>
          <option value="<?= $kota['city_id'] ?>"><?= $kota['city_name'] ?></option>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Kota Tujuan</td>
      <td>
        <select name="destination">
          <?php foreach($data_kota as $kota):?>
          <option value="<?= $kota['city_id'] ?>"><?= $kota['city_name'] ?></option>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Tampilkan Ongkir</button>
      </td>
    </tr>
  </table>
</form>