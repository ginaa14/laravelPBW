<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah User</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <head>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 bg-primary py-4"></div>
        </div>

        <div class="row">
            <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Dosen</a>
                    <a class="nav-link active" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Mahasiswa</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Skripsi</a>
                </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>

                    <div class="card-body">
                    <div class="container-fluid rounded mt-4 ">
                <form action="/users/simpanuser" method="POST" class="pt-2 pb-2">
                    @csrf
                    <div class="form-group w-25">
                        <label>NIK</label>
                        <input type="text" name="nik_user" class="form-control" placeholder="Masukan NIK" required>
                    </div>

                    <div class="form-group w-25">
                        <label>Nama</label>
                        <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama Pengguna" required>
                    </div>

                    <div class="form-group w-25">
                        <label>No Handphone</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Masukan No Handphone" required>
                    </div>

                    <div class="form-group w-25">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                    </div>
                    

                    <div class="form-group w-25 mt-4">
                        <input type="submit" value="SIMPAN" class="btn btn-outline-primary">     
                    </div>
                </form>
            </div>
                        
                </div>
        </div>
    </div>
</div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </body>
</html>