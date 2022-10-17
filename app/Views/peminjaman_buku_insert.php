<form method="post" action="<?= site_url('peminjaman_buku/insert/'.$peminjaman_id) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Buku</td>
      <td>
        <select name="buku_id">
          <?php foreach($buku as $row):?>
          <option value="<?= $row['id'] ?>"><?= $row['judul'] ?></option>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
      </td>
    </tr>
  </table>
</form>