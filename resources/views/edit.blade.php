<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT</title>

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
                    </div>
                    <div class="card-body">
                        @php
                        $bidang_minat = explode(', ',$mhs->bidang_minat);
                        @endphp
                        <form action="/mhs/update/{{ $mhs->id }}" method="POST" class="pt-2 pb-2">
                            @csrf
                            @method('PUT')
                    <table>
                        <tr><td>NIM</td><td><input type="text" name="nim" value="{{ $mhs->nim }}"></td></tr>
                        <tr><td>Nama</td><td><input type="text" name="nama" value="{{ $mhs->nama }}"></td></tr>
                        <tr><td> Gender </td><td>
                        <input type="radio" name="gender" value="Pria" {{ $mhs->gender == 'Laki - Laki'?'checked':'' }} class="form-check-input"> Laki - Laki<br>
                        <input type="radio" value="Wanita" name="gender"{{ $mhs->gender == 'Perempuan'?'checked':'' }} class="form-check-input">Perempuan
                        </td><tr>
                        <tr><td> Jurusan </td><td>
                        <select name="jurusan">
                            <option value="Sistem Informasi"{{ $mhs->jurusan == 'Sistem Informasi'?'selected':'' }}>Sistem Informasi</option>
                            <option value="Informatika"{{ $mhs->jurusan == 'Informatika'?'selected':''}}>Informatika</option>
                            <option value="Biologi"{{ $mhs->jurusan == 'Biologi'?'selected':''}}>Biologi</option>
                            <option value="Kedokteran"{{ $mhs->jurusan == 'Kedokteran'?'selected':''}}>Kedokteran</option>
                        </select>
                        </td><tr>
                        <tr><td> Bidang Minat </td><td>
                        <input type="checkbox" name="bidang_minat[]" value="Musik" {{ in_array('Musik',$bidang_minat) ? 'checked':''}} class="form-check-input"> Musik <br> 
                        <input type="checkbox" name="bidang_minat[]" value="Olahraga" {{ in_array('Olahraga',$bidang_minat) ? 'checked':''}} class="form-check-input"> Olahraga <br> 
                        <input type="checkbox" name="bidang_minat[]" value="Akademik" {{ in_array('Akademik',$bidang_minat) ? 'checked':''}} class="form-check-input"> Akademik <br>  
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