<form method="post" action="<?= site_url('kategori/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td width="20%">Nama</td>
      <td>
        <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('kategori/delete/'.$data['id']) ?>" >Delete</a>
      </td>
    </tr>
  </table>
</form>