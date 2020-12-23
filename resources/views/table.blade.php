<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg  navbar-fixed-top navbar-light bg-transparent">
  <a class="navbar-brand" href="#"><img src="logo.png" height="40px" width="px"> SCare</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item ">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="data">Self Data</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="cek">Check-Up</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="table">List</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="video">Videos</a>
      </li>
      
    </ul>
    </div>
  </div>
</nav>
    <title>Scare</title>
  </head>
  <body>
    <div class="container mt-4">
    <h3>Self Care Data</h3>
        <div class="row mt-4">
            <div class="col-md-12">
                <table class="table display" id="tablesiswa"> 
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>NIS</td>
                            <td>NAMA SISWA</td>
                            <td>ALAMAT</td>
                            <td>KELAS</td>
                            <td>AKSI</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1 ?>
                       
                            <tr>
                                <td>  </td>
                                <td>  </td>
                                <td> </td>
                                <td>  </td>
                                <td> </td>
                                <td>
                                    <a href="/penanganan " class="btn btn-outline-primary">HANDLING</a>
                                    <a href="/edit " class="btn btn-outline-success">UBAH</a>
                                    <a href="/delete" onclick="return confirm('anda yakin ingin menghapus??')" class="btn btn-outline-danger" >HAPUS</a>
                                </td>
                            </tr>
                       
                    </tbody>
                </table>
                <a href="/create" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>