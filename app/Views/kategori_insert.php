<form method="post" action="<?= site_url('kategori/insert') ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td width="20%">Nama</td>
      <td>
        <input class="form-control" type="text" name="nama" value="" />
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