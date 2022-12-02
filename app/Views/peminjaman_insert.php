<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('peminjaman/insert') ?>">
  <?= csrf_field() ?>
  <table class="table table-striped">
    <tr>
      <td>Nama Anggota</td>
      <td>
        <input type="text" name="nama" value="" class="form-control" />
      </td>
    </tr>
    <tr>
      <td>Tanggal</td>
      <td>
        <input type="date" name="tanggal" value="" class="form-control" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
        <button type="submit" class="btn btn-info"><i class="fas fa-edit"></i> Save</button>
      </td>
    </tr>
  </table>
</form>

<?= $this->endSection('content'); ?>