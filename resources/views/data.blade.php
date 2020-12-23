<html>
  <head>
        <link rel="icon" type="imgae/png" href="logo.png">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="Header.blade.css" rel="stylesheet" type="text/css" />
    <title>SCare</title>
    <style>
      body {
        background-image: url('lilili.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
   }
    </style>
  </head>
  <body>
  <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h3 class="text-center">Self Data Scare</h3>
                            <br/>
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                            <form action="/proses" method="post">
                                {{ csrf_field() }}
   
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Usia</label>
                                    <input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Confirm">
                                </div>
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>
</html>