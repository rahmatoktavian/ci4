<form method="post" action="<?= site_url('buku/'.$data['id']) ?>">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Kategori</td>
      <td>
        <select name="kategori_id">
          <?php foreach($data_kategori as $kategori):?>
          <?php if($kategori['id'] == $data['kategori_id']):?>
            <option value="<?= $kategori['id'] ?>" selected><?= $kategori['nama'] ?></option>
          <?php else:?>
            <option value="<?= $kategori['id'] ?>"><?= $kategori['nama'] ?></option>
          <?php endif?>
          <?php endforeach?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Judul</td>
      <td>
        <input type="text" name="judul" value="<?= $data['judul'] ?>" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Save</button>
        <a href="<?= site_url('buku/delete/'.$data['id']) ?>" >Delete</a>
      </td>
    </tr>
  </table>
</form>