<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mahasiswa</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
         
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
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mhs/cari">
                            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                             <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Search</button>
                            </form>
                    </div>
                    <div class="card-body">
                        <form action="/mhs/simpan" method="POST" class="pt-2 pb-2">
                            @csrf
                        <table>
                            <tr><td>NIM</td><td><input type="text" name="nim" value=""></td></tr>
                            <tr><td>Nama</td><td><input type="text" name="nama" value=""></td></tr>
                            <tr><td> Gender </td><td>
                            <input type="radio" value="Pria" name="gender"> Laki - Laki<br>
                            <input type="radio" value="Wanita" name="gender">Perempuan</td><tr>
                            <tr><td> Jurusan </td><td>
                            <select name="jurusan">
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Informatika">Informatika</option>
                                <option value="Biologi">Biologi</option>
                                <option value="Kedokteran">Kedokteran</option>
                            </select>
                            </td><tr>
                            <tr><td> Bidang Minat </td><td>
                            <input type="checkbox" name="bidang_minat[]" value="Musik" > Musik <br> 
                            <input type="checkbox" name="bidang_minat[]" value="Olahraga"> Olahraga <br> 
                            <input type="checkbox" name="bidang_minat[]" value="Akademik"> Akademik <br>  
                            </td><tr> 
                    </table>
                    <div class="form-group pt-4">
                    <input type="submit" value="SIMPAN" class="btn btn-outline-primary"></div>
                    </div>  
                </form>  
                    </div>
                </div>
            </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
    </body>
</html>