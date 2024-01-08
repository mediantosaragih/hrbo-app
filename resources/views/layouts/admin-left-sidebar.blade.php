@php
  $current_route=request()->route()->getName();
  @endphp
  <!-- Main Sidebar Container -->
          <!-- Sidebar -->
          <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
        <i class="fas fa-users"></i>
    </div>
    <div class="sidebar-brand-text mx-3">HRIS</div>
</a>
 
<!-- Divider -->
<hr class="sidebar-divider my-0">
 
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a href="{{route('dashboard')}}" class="nav-link {{$current_route=='dashboard'?'active':''}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>
 
<!-- Divider -->
<hr class="sidebar-divider">
 
<!-- Heading -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaster"
        aria-expanded="true" aria-controls="collapseMaster">
        <i class="fas fa-fw fa-database"></i>
        <span>Master Data</span>
    </a>
    <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('employee') }}">Data Employe</a>
            <a class="collapse-item" href="{{ route('divisi') }}">Data Divisi</a>
            <a class="collapse-item" href="{{ route('sallary') }}">Data Gaji</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseJadwal"
        aria-expanded="true" aria-controls="collapseJadwal">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Data Jadwal</span>
    </a>
    <div id="collapseJadwal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('roster') }}">Roster</a>
            <a class="collapse-item" href="{{ route('roster') }}">Lembur</a>
            <a class="collapse-item" href="{{ route('roster') }}">Cuti</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbsensi"
        aria-expanded="true" aria-controls="collapseAbsensi">
        <i class="fas fa-fw fa-clock"></i>
        <span>Data Absensi</span>
    </a>
    <div id="collapseAbsensi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('roster') }}">Kehadiran Hari Ini</a>
            <a class="collapse-item" href="{{ route('roster') }}">Kehadiran</a>
            <a class="collapse-item" href="{{ route('roster') }}">Cuti/Izin</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLembur"
        aria-expanded="true" aria-controls="collapseLembur">
        <i class="fas fa-fw fa-clock"></i>
        <span>Data Lemburan</span>
    </a>
    <div id="collapseLembur" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('roster') }}">Jumlah Harga Lembur</a>
            <a class="collapse-item" href="{{ route('roster') }}">Data Lembur</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompensation"
        aria-expanded="true" aria-controls="collapseCompensation">
        <i class="fas fa-fw fa-clock"></i>
        <span>Compensation & Benefit</span>
    </a>
    <div id="collapseCompensation" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('roster') }}">Tunjangan</a>
            <a class="collapse-item" href="{{ route('roster') }}">Asuransi</a>
        </div>
    </div>
</li>
</ul>
<!-- End of Sidebar -->