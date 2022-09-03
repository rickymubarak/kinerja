<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kinerja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div class="container py-5">

        <!-- For demo purpose -->
        <div class="row mb-4">
          <div class="col-lg-8 mx-auto text-center">
            <p class="lead mb-0">KINERJA PONTIANAK KOTA</p>
          </div>
        </div>
        <!-- End -->
      
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <div class="bg-white nav-pills rounded-lg nav-fill p-5">
                <div class="row">
                    <a data-toggle="pill" href="/rencana/" class="nav-link active rounded-pill mb-3 col-sm-3 text-center">KEMBALI
                    <a data-toggle="pill" href="" class="nav-link active rounded-pill mb-3 col-sm-9 text-center">
                        FORM INPUT RENCANA KERJA
                    </a>
                </div>
              
                <div class="tab-content">
                    <div id="nav-tab-card" class="tab-pane fade show active">
                    <p class="alert alert-success">Some text success or error</p>
                    
                    <form role="form" action="/rencana/{{ $rencana->id }}" method="POST">

                        @method('put')
                        @csrf

                        <div class="form-group">
                        <label for="NIP">NIP</label>
                        <input name="nip" value="{{ $rencana->nip }}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        type = "number"
                        maxlength = "18" placeholder="Masukan NIP tanpa spasi !" required class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" name="nama" value="{{ $rencana->nama }}" placeholder="Masukan Nama Anda" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="rencana">RENCANA</label>
                            <input type="text" name="rencana" value="{{ $rencana->rencana }}" placeholder="Masukkan Rencana Kinerja" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="target">TARGET</label>
                            <input type="number" name="target" value="{{ $rencana->target }}" min="1"  required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="hasil">Output / Hasil</label>
                            <select class="form-control" type="text" name="hasil" required>
                                <option value="">-</option>
                                <option value="LAPORAN" 
                                    @if ($rencana->hasil == "LAPORAN")
                                        selected
                                    @endif>
                                LAPORAN
                                </option>
                                <option value="DOKUMEN"
                                    @if ($rencana->hasil == "DOKUMEN")
                                        selected
                                    @endif>
                                DOKUMEN
                                </option>
                                <option value="DATA"
                                    @if ($rencana->hasil == "DATA")
                                        selected
                                    @endif>
                                DATA
                                </option>
                                <option value="KEGIATAN"
                                    @if ($rencana->hasil == "KEGIATAN")
                                        selected
                                    @endif>
                                KEGIATAN
                                </option>
                              </select>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="target">WAKTU (Bulan)</label>
                                    <div class="input-group">
                                        <input type="number" name="waktu" value="{{ $rencana->waktu }}" min="1" max="12" required class="form-control">
                                        <div class="col-sm-4">
                                            <label for="" >Bulan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" value="update" class="subscribe btn btn-success btn-block rounded-pill shadow-sm"> Simpan  </button>
                    </form>
                    </div>
                
                </div>
            </div>
            </div>
        </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script>
        $(document).ready(function(){
            //Menu Toggle Script
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            // For highlighting activated tabs
            $("#tab1").click(function () {
                $(".tabs").removeClass("active1");
                $(".tabs").addClass("bg-light"); 
                $("#tab1").addClass("active1");
                $("#tab1").removeClass("bg-light");
            });
            $("#tab2").click(function () {
                $(".tabs").removeClass("active1");
                $(".tabs").addClass("bg-light");
                $("#tab2").addClass("active1");
                $("#tab2").removeClass("bg-light");
            });
            $("#tab3").click(function () {
                $(".tabs").removeClass("active1");
                $(".tabs").addClass("bg-light");
                $("#tab3").addClass("active1");
                $("#tab3").removeClass("bg-light");
            });
        })
    </script>

  </body>
