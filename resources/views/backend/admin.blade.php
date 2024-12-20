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
                <div class="sidebar-heading border-bottom bg-light"><h5><b>Selamat Datang {{Auth::user()->username}}</b></h5></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="dashboard">Dashboard</a>
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
                <!-- Page content-->
                <div class="container-fluid">
                @foreach($tampilberanda as $beranda)
            <h3 class="judulkelas">Data Beranda</h3>
            @if(Session::has('pesan'))
                    <div class="alert alert-success" data-bs-dismiss="alert">
                        {{Session::get('pesan')}}
                    </div>
                    @endif
            <button class='btn btn-secondary' style="margin-bottom:10px;" type='button' data-bs-toggle='modal' data-bs-target='#modaledit{{$beranda->id_beranda}}'>Edit</button>
            <div class="containers">
                <table class="table table-striped">
                    <tr>
                        
                        <td>No</td>
                        <td>Logo</td>
                        <td>Judul Beranda</td>
                        <td>Nama carousel</td>
                        <td>Deskripsi carousel</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>{{$beranda->id_beranda}}</td>
                        <td>{{$beranda->pict}}</td>
                        <td>{{$beranda->judul_beranda}}</td>
                        <td>{{$beranda->nama_beranda}}</td>
                        <td>{{$beranda->deskripsi_beranda}}</td>
                        <td>
                       

                <div class="modal fade" id="modaledit{{$beranda->id_beranda}}" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data beranda {{$beranda->judul_beranda}}</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('admin.update',$beranda->id_beranda)}}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                        <table border="0">
                        <tr>
                            <td>Logo</td>
                            <td></td>
                            <td><input class="form-control" type="file" name="gambarr" accept="image/png, image/gif, image/jpeg"></td>
                          </tr>
                          <tr>
                            <td>Judul beranda</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="judul" value="{{$beranda->judul_beranda}}"></td>
                          </tr>
                          <tr>
                            <td>Nama Carousel</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="nama" value="{{$beranda->nama_beranda}}"></td>
                          </tr>
                          <tr>
                            <td>Deskripsi Carousel</td>
                            <td></td>
                            <td><textarea class="form-control" type="text" name="deskripsi">{{$beranda->deskripsi_beranda}}</textarea></td>
                          </tr>
                          
                          <tr>
                          <td>Lokasi</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="lokasi" value="{{$beranda->lokasi}}"></td>
                          </tr>
                          <tr>
                            <td>Link Instagram</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="instagram" value="{{$beranda->instagram}}"></td>
                          </tr>
                          <tr>
                            <td>Link youtube</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="youtube" value="{{$beranda->youtube}}"></td>
                          </tr>
                          <tr>
                            <td>Link facebook</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="facebook" value="{{$beranda->facebook}}"></td>
                          </tr>
                          <tr>
                            <td>Tentang</td>
                            <td></td>
                            <td><textarea class="form-control" type="text" name="tentang">{{$beranda->tentang}}</textarea></td>
                          </tr>
                            
                            
                          </tr>
                          <tr>
                            <td><button type="submit" class="btn btn-success">Masukan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></td>
                          </tr>
                        </table>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
              </div>
              </div>
                     </td>
                    </tr>
                    <tr>
                 </div>
                
                 </table>
                </div>
                </div>

                <div class="containers">
                <table class="table table-striped">
                    <tr>
                        
                        <td>-</td>
                        <td>Lokasi</td>
                        <td>Instagram</td>
                        <td>Youtube</td>
                        <td>Facebook</td>
                        <td>Tentang</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        
                        <td></td>
                        <td>{{$beranda->lokasi}}</td>
                        <td>{{$beranda->instagram}}</td>
                        <td>{{$beranda->youtube}}</td>
                        <td>{{$beranda->facebook}}</td>
                        <td>{{$beranda->tentang}}</td>
                        <td>
                        
                 </div>
                 @endforeach
                 </table>
                </div>
                </div>
    

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js\jquery_3.6.3.min.js"></script>
    <script src="js\bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>









