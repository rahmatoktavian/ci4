<?php $validation = session()->getFlashdata('validation') ?>

<form method="post" action="<?= site_url('buku2/upload/'.$data['id']) ?>" enctype="multipart/form-data">
  <?= csrf_field() ?>
  <table>
    <tr>
      <td>Judul: </td>
      <td><?= $data['judul'] ?></td>
    </tr>
    <tr>
      <td>Cover: </td>
      <td>
        <input type="file" name="cover" />  
        <small><?= $validation ? $validation->showError('cover') : '' ?></small>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit">Upload</button>
      </td>
    </tr>
  </table>
</form>