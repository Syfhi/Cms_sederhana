<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/sidebar.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Admin</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admin">Beranda</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="profile">Profil</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="ekstras">Ekstra</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="kegiatans">Kegiatan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="guru">Guru</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="galeris">Galeri</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="kontaks">Kontak</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="komentar">Komentar</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="carousel">Carousel</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="regis">Registrasi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="logout">Logout</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="beranda">Beranda</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                    @if(Session::has('pesan'))
                    <div class="alert alert-success" data-bs-dismiss="alert">
                        {{Session::get('pesan')}}
                    </div>
                    @endif

<h2>Data Admin</h2>
<button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#tambah">+ Tambah</button>
<div class="modal fade" id="tambah" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Tambah Admin</h3>
                <button class="btn-close close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{route('regis.store')}}">
    @csrf
    @method('POST')
    <div class="container-al46">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" class="form-control" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" class="form-control" required>

        <label for="password2"><b>Password</b></label>
        <input type="password" placeholder="Konfirmasi Password" name="password2" class="form-control" required>

        <br><button type="submit" class="btn btn-primary btn-sm">Simpan</button><br>
        <br><input type="checkbox" checked="checked"><span>remember me</span><br>
    </div>
</form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<table class="table table-hover table-border table-striped">
    <tr>
        <td>NO</td>
        <td>USERNAME</td>
        <td>TINDAKAN</td>
    </tr>
    <?php $no=1; ?>
    @foreach($tampiluser as $admin)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$admin->username}}</td>
            <td>
                <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{$admin->id_admin}}">Edit</button> 
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus{{$admin->id_admin}}">Hapus</button>

    <div class="modal fade" id="edit{{$admin->id_admin}}" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Edit Admin {{$admin->username}}</h3>
                <button class="btn-close close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{route('regis.update', $admin->id_admin)}}">
    @csrf
    @method('PUT')
    <div class="container-al46">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Username" name="username" class="form-control" value="{{$admin->username}}" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" class="form-control" required>

        <label for="password2"><b>Password</b></label>
        <input type="password" placeholder="Konfirmasi Password" name="password2" class="form-control" required>

        <br><button type="submit" class="btn btn-primary btn-sm">Simpan</button><br>
        <br><input type="checkbox" checked="checked"><span>remember me</span><br>
    </div>
</form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="hapus{{$admin->id_admin}}" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Hapus Admin {{$admin->username}}</h3>
                <button class="btn-close close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('regis.destroy', $admin->id_admin)}}">
                    @csrf
                    @method('DELETE')
                    <p>Yakin menghapus data ini ?</p>
                    <button class="btn btn-danger btn-md" type="submit">Ya</button> 
                    <button class="btn btn-secondary btn-md" type="reset" data-bs-dismiss="modal">Tidak</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
            </td>
        </tr>
    @endforeach
</table>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/jquery_3.6.3.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>















