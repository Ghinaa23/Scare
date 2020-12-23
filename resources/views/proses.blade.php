<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="imgae/png" href="logo.png">
    <title>Self Data Scare</title>
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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
<style>
      body {
        background-image: url('lululu.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
   }
    </style>
</head>
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="my-4">Data Yang Di Input : </h3>
 
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{ $datas->nama }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>{{ $datas->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{ $datas->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Usia</td>
                                <td>{{ $datas->usia }}</td>
                            </tr>
                        </table>
                        <h5>CHECK-UP</h5>
                        <div class="form-group">
                                    <label for="keluhan">Keluhan</label>
                                    <input class="form-control" type="text" name="keluhan" placeholder="isi keluhan anda" value="{{ old('keluhan') }}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="tinggi_badan">Tinggi Badan</label>
                                    <div class="col-md-4">
                                      <input class="form-control" type="number" placeholder="Kg" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label" for="berat_badan">Berat Badan</label>
                                    <div class="col-md-4">
                                      <input class="form-control" type="number" placeholder="Kg" name="berat_badan" value="{{ old('berat_badan') }}">
                                    </div>
                                </div>
                                    <form>
                                      <div class="form-group row">
                                          <label for="name" class="col-md-4 col-form-label">Golongan Darah</label>
                                          <div class="col-md-6">
                                              <select name="gol_darah" id="gol_darah" class="form-control">
                                              </select>
                                          </div>
                                      </div>
                                    </form>
                        <a href="/table" class="btn btn-primary">Check-Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</body>
</html>