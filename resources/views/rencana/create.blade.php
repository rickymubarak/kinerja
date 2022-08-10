@extends('layouts.main')

@section('content')
    
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
                        
                        <form role="form" action="/rencana/store" method="POST">
                            
                        @csrf
                        
                        <div class="form-group">
                            <label for="NIP">NIP</label>
                            <input name="nip" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type = "number"
                            maxlength = "18" placeholder="Masukan NIP tanpa spasi !" required class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" name="nama" placeholder="Masukan Nama Anda" required class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="rencana">RENCANA</label>
                            <input type="text" name="rencana" placeholder="Masukkan Rencana Kinerja" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="target">TARGET</label>
                            <input type="number" name="target" min="1"  required class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="hasil">Output / Hasil</label>
                            <select class="form-control" type="text" name="hasil" required>
                                <option value="">-</option>
                                <option value="LAPORAN">LAPORAN</option>
                                <option value="DOKUMEN">DOKUMEN</option>
                                <option value="DATA">DATA</option>
                                <option value="KEGIATAN">KEGIATAN</option>
                              </select>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="target">WAKTU (Bulan)</label>
                                    <div class="input-group">
                                        <input type="number" name="waktu" min="1" max="12" placeholder="maximal 12 Bulan" required class="form-control">
                                        <div class="col-sm-4">
                                            <label for="" >Bulan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" name="submit" value="save" class="subscribe btn btn-success btn-block rounded-pill shadow-sm"> Simpan  </button>
                    </form>
                    </div>
                
                </div>
            </div>
            </div>
        </div>

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

@endsection