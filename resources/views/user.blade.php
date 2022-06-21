<!doctype html>
<html lang="en">
  <head>
    <title>USERS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </head>
  <head>
        <body>
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 bg-primary py-2">
          <div class="dropdown float-right">
            <button class="btn btn-primary dropdown-toggle bg-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false"><i class="bi bi-person"></i> User</button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">{{ Auth::user()-> nama_user ?? ''}}</a>
              <a class="dropdown-item" href="/mhs">Data Mahasiswa</a>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          </div>
        </div>
    </div>

        <div class="row">
        @include('layout/main')
          </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                    <a name="" id="" class="btn btn-primary" href="/users/formtambah" role="button"><i class="bi bi-plus-circle-fill"></i> ADD PENGGUNA</a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Search</button>
                        </form>
                    </div>

                    <div class="card-body">
                        @if (session('alertsimpan'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('alertsimpan') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @elseif (session('alertupdate'))
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>{{ session('alertupdate') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @elseif (session('alerthapus'))
                            <div class="alert alert-danger alert-dismijssible fade show" role="alert">
                            <strong>{{ session('alerthapus') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama Pengguna</th>
                                <th scope="col">No Handphone</th>
                                <th scope="col">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $no => $us)
                                    <tr>
                                    <th scope="row">{{ $user->firstItem() + $no }}</th>
                                    <td>{{ $us->nik_user }}</td>
                                    <td>{{ $us->nama_user }}</td>    
                                    <td>{{ $us->no_hp }}</td>                       
                                    <td>
                                    <a name="" id="" class="btn btn-outline-primary" href="/user/ubah/{{ $us -> id }}" 
                                    role="button"><i class="bi bi-pencil-square"></i></a>
                                    <a name="" id="" class="btn btn-outline-danger" href="/users/hapususer/{{ $us -> id }}" 
                                    role="button">
                                    <i class="bi bi-trash"></i></i></a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> 
                            <span class="float-right">{{$user->links()}}</span>
                            <span class="float-left mr-5 text-danger">Total Keseluruhan Data = {{$user->total()}}</span>
                            <span class="float-right mr-5 text-success">Total Data Per halaman = {{$user->perPage()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>