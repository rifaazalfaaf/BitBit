<div style="margin-top: 100px">
    <div class="container pppl-home" id=""> 
        <div class="col-md-12 col-sm-12">
    <!-- {{-- Bagian Produk --}} -->
            <div style="margin-bottom: 20px;">
                <span class="pppl-search-title" style=" color: #6c757d;">catatan : cari dengan kata kunci arsitektur atau tukang untuk mencari jasa</span>
            </div>
            <div>
                <h2 class="pppl-home-title">Hasil pencarian untuk produk</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <?php for ($i=0; $i < sizeof($tanaman); $i++) :?>
                        <div class="col-md-3 col-sm-3">
                            <a href="<?php echo $tanaman[$i]->link ?>"  target="_blank">
                                <div class="card mt-2">
                                <div class="container">
                                    <img class="card-img-top" src="<?php echo $tanaman[$i]->linkfoto ?>" alt="Lidah mertua"  style="width:100%; margin-top:10px;margin-bottom: 20px;width: 215px;height: 190px;background-position: center center;background-repeat: no-repeat;">
                                    <span class="nama-produk"><?php echo $tanaman[$i]->name ?></span>
                                    <h5 class="mt-2" style="font-family: Poppins;font-size: 20px;color: #ffa737;"><?php echo $tanaman[$i]->harga ?></h5>
                                    <label class="alamat mt-1" for="alamat"><?php echo $tanaman[$i]->tempat ?></label>
                                    <div class="nilai_rating mb-3">Rating: <?php echo $tanaman[$i]->rating ?> (<?php echo $tanaman[$i]->jumlah ?>)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endfor?>
                    </div>
                </div>

    <!-- {{-- Bagian Jasa --}} -->
        <div>
            <h2 class="pppl-home-title">Hasil pencarian untuk tukang kebun</h2>
        </div>
            <div class="card-produk">
                <div class="row">
                    <?php for ($i=0; $i < sizeof($jasa); $i++) :?>
                        <div class="col-md-3">
                            <div class="card mt-2">
                                <div class="container m-2">
                                    <img class="card-img-top" src="<?php echo $jasa[$i]->linkfoto ?>" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px;width: 200px;height: 200px;background-position: center;background-repeat: no-repeat;"><br>
                                    <div class="nama-produk"><?php echo $jasa[$i]->name ?></div>
                                    <div class="alamat" for="alamat"><?php echo $jasa[$i]->tempat ?></div>
                                    <div class="nilai_rating mb-1">Rating: <?php echo $jasa[$i]->rating ?> (<?php echo $jasa[$i]->jumlah ?>)</div>
                                </div>
                            </div>
                        </div>
                    <?php endfor?>
                </div>
            </div>
        </div>
    </div>
</div>