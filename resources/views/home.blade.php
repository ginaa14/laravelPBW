<!doctype html>
<html lang="en">
  <head>
    <title>ittle</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container bg-secondary w-50 text-light mt-20">
     <form action="/home/add" method="POST">
        @csrf
         <div class="form-group">
           <h2 for=""> DATA MAHASISWA</h2>
           <label for="">Nama Mahasiswa : </label>
           <input type="text" name="text" class="form-control" id="text" placeholder="Masukkan Nama" aria-describedby="helpId">
         </div>
         <div class="form-group">
           <label for="">Nim Anda : </label>
           <input type="number" class="form-control" name="number" id="number" aria-describedby="helpId" placeholder="Masukkan Nim">
         </div>
         <label for="">Jenis Kelamin : </label>
         <div class="form-check">
            <label class="form-check-label">
             <input type="radio" class="form-check-input" name="gender" id="" value="Perempuan">
             Perempuan
           </label>
         </div>
         <div class="form-check">
            <label class="form-check-label">
             <input type="radio" class="form-check-input" name="gender" id="" value="Laki Laki">
             Laki Laki
           </label>
         </div>
         <div class="form-group">
         <label for="">Asal Daerah : </label>
           <select class="form-control" name="kota" id="">
           <option value="Jawa Barat">Jawa Barat</option>
           <option value="Jawa Timur">Jawa Timur</option>
           <option value="DKI Jakarta">Jakarta</option>
           <option value="DI Yogyakarta">Yogyakarta</option>
           </select>
         </div> 
         <label for="">Bahasa  : </label>
         <div class="form-check">
            <label class="form-check-label">
             <input type="checkbox" class="form-check-input" name="bahasa[]" value="checkedValue">
             Indonesia
           </label>
         </div>
         <div class="form-check">
           <label class="form-check-label">
             <input type="checkbox" class="form-check-input" name="bahasa[]" value="checkedValue">
             Perancis
           </label>
         </div>
         <div class="form-check">
           <label class="form-check-label">
             <input type="checkbox" class="form-check-input" name="bahasa[]" value="checkedValue">
             Inggris
           </label>
         </div>
         <div class="form-check">
           <label class="form-check-label">
             <input type="checkbox" class="form-check-input" name="bahasa[]" value="checkedValue">
             Korea
           </label>
         </div>
         <button type="submit" class="btn mt-3 mb-3 btn-success">KIRIM</button>
         </form>
     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>