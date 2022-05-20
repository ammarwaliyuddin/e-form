<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>e-Form Tambah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/app.css')}}" /> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body{
                background-color: rgba(241,245,248);
            }
            
            .btn-blue {
                color: rgba(255,255,255);
                border-color: rgba(28,63,170);
                background-color: rgba(28,63,170);
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-6 mt-4">
                    <a href="{{route('cetak')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                    <div class="card">
                        <img class="card-img-top" style="height: 300px" src="https://source.unsplash.com/random/150x100" alt="unplash">
                        <div class="card-body">
                            <form action="{{route('inputData')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <h2 align="center">e Form</h2>
                
                                <div class="form-group">
                                    <label for="nama" class="label-control">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control">
                                </div>
                
                                <div class="form-group">
                                    <label for="alamat" class="label-control">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="ktp" class="label-control">Nomor KTP</label>
                                    <input type="number" name="ktp" id="ktp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="telp" class="label-control">Nomor telp</label>
                                    <input type="number" name="telp" id="telp" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Harga" class="label-control">Harga</label>
                                    <input type="number" name="Harga" id="Harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="komisi" class="label-control">Pembagian Komisi jika terjual</label>
                                    <input type="number" name="komisi" id="komisi" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="detail" class="label-control">Detail</label>
                                    <textarea name="detail"  class="form-control" id="detail" cols="20" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="file" class="label-control">Upload KTP</label>
                                    <input type="file" name="file" id="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="surat" class="label-control">Surat Legal Property</label>
                                    <input type="file" name="surat" id="surat" class="form-control">
                                </div>
                                <input type="submit" value="Simpan" class="btn btn-md btn-blue float-right">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

