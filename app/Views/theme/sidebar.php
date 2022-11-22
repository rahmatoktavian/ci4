<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon">
        <i class="fas fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3"><sup>e</sup>Library</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="<?=site_url('chart');?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<?php if(session()->get('tipe') == 'admin'):?>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Setting
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Katalog</span>
    </a>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=site_url('buku')?>">Buku</a>
            <a class="collapse-item" href="<?=site_url('kategori')?>">Kategori</a>
        </div>
    </div>
</li>
<?php endif?>

<?php if(session()->get('tipe') == 'staff'):?>
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStok"
        aria-expanded="true" aria-controls="collapseStok">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Chart</span>
    </a>
    <div id="collapseStok" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=site_url('chart/pie')?>">Pie</a>
            <a class="collapse-item" href="<?=site_url('chart/line')?>">Line</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan"
        aria-expanded="true" aria-controls="collapseLaporan">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Laporan</span>
    </a>
    <div id="collapseLaporan" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?=site_url('chart/pie')?>">BUku</a>
            <a class="collapse-item" href="<?=site_url('chart/line')?>">Peminjaman</a>
        </div>
    </div>
</li>
<?php endif?>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->