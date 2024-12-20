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
                <div style="margin-top:2%" class="container-sm">
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#mymodal" style='margin-top:15px; margin-bottom:5%;'>+ Tambah Data Ekstra</button><br>
                    Cari : <br>
                    <input type="text" name="cari" placeholder="Cari data ekstra" class="form-control" style="width:90%; float:left;" required>
                    <button class="btn btn-primary" type="submit" name="cari">Cari</button><br>
    
                    
                    
                    @if(Session::has('pesan'))
                    <div class="alert alert-success" data-bs-dismiss="alert">
                        {{Session::get('pesan')}}
                    </div>
                    @endif



                    <div class="modal fade" id="mymodal" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Input Data ekstra</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('ekstras.store')}}">
                            @csrf
                            @method('post')
                        <table style="margin:0% 0% 0% 8%;" border="0">
                          <tr>
                            <td>Nama Ekstra</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="nama"></td>
                          </tr>
                          <tr>
                            <td>Deskripsi Ekstra</td>
                            <td></td>
                            <td><textarea class="form-control"  name="deskripsi"></textarea></td>
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
        

            <h3 class="judulkelas">Data Ekstra</h3>
            <div class="containerf">
                <table class="table table-striped">
                    <tr>
                        
                        <td>No</td>
                        <td>Nama Ekstra</td>
                        <td>Deskripsi Ekstra</td>
                        <td></td>

                    </tr>
                    <?php $i=1; ?>
                    @foreach($tampilekstra as $ekstra)
                    <tr>
                        
                        <td><?php echo $i++; ?></td>
                        <td>{{$ekstra->nama_ekstra}}</td>
                        <td>{{$ekstra->deskripsi_ekstra}}</td>
                        <td>
                        <button class='btn btn-secondary' type='button' data-bs-toggle='modal' data-bs-target='#modaledit{{$ekstra->id_ekstra}}'>Edit</button>
                        <button class='btn btn-danger' type='button' data-bs-toggle='modal' data-bs-target='#modalhapus{{$ekstra->id_ekstra}}'>Hapus</button>

                <div class="modal fade" id="modaledit{{$ekstra->id_ekstra}}" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Ekstra {{$ekstra->judul_ekstra}}</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('ekstras.update',$ekstra->id_ekstra)}}">
                            @csrf
                            @method('put')
                        <table border="0">
                
                          <tr>
                            <td>Nama Ekstra</td>
                            <td></td>
                            <td><input class="form-control" type="text" name="nama" value="{{$ekstra->nama_ekstra}}"></td>
                          </tr>
                          <tr>
                            <td>Deskripsi Ekstra</td>
                            <td></td>
                            <td><textarea class="form-control" type="text" name="deskripsi">{{$ekstra->deskripsi_ekstra}}</textarea></td>
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
                 </div>
                 <div class="modal fade" id="modalhapus{{$ekstra->id_ekstra}}" role="dialog">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><h4 class="modal-title">Hapus Data Ekstra {{$ekstra->nama_ekstra}}</h4></div>
                        <div class="modal-body">
                            <form action="{{route('ekstras.destroy',$ekstra->id_ekstra)}}" method="post">
                                @csrf
                                @method('delete')
                              
                                <p>Yakin untuk menghapus data ini?</p>
                                <button class="btn btn-danger" type="submit">Ya</button>
                            </form>
                        </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>

                         </div>
                      </div>
                 </div>
                 @endforeach
                </div>
                </div>
    
                <!--End Konten -->
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















