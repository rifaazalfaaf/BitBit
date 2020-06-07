<div style="margin-top: 100px">
    <div class="container pppl-home" id="myDIV"> 
        <div class="col-md-12 col-sm-12">
            <div class="jumbotron bitbit-jumbotron rounded-0" style="background-image: url(assets/img/jumbotron.png);">
                <div class="background-jumbotron" style="background-color: #a7e421;">
                    <h1 class="title-jumbotron" style="text-align: center;font-family: Poppins;font-size: 30px;color: #456c0a;">Temukan Tanaman Hias di BitBit !</h1>
                </div>
            </div>
<!-- {{-- Bagian Produk --}} -->
            <div>
                <h2 class="pppl-home-title">Produk Pilihan Terbaik</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <?php for ($i=0; $i < 4; $i++) :?>
                        <div class="col-md-3 col-sm-3">
                            <a href="<?php echo $tanaman[$i]->link ?>"  target="_blank">
                                <div class="card">
                                    <div class="container">
                                        <img class="center-cropped card-img-top" src="<?php echo $tanaman[$i]->linkfoto ?>" alt="Lidah mertua" style="width:100%; margin-top:10px;margin-bottom: 20px;width: 215px;height: 190px;background-position: center center;background-repeat: no-repeat;">
                                        <span class="nama-produk"><?php echo $tanaman[$i]->name ?></span>
                                        <h5 class="mt-3" style="font-family: Poppins;font-size: 20px;color: #ffa737;"><?php echo $tanaman[$i]->harga ?></h5>
                                        <label class="alamat mt-0" for="alamat"><?php echo $tanaman[$i]->tempat ?></label>
                                        <div class="nilai_rating mb-3">Rating: <?php echo $tanaman[$i]->rating ?> (<?php echo $tanaman[$i]->jumlah ?>)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
<!-- {{-- Bagian tukang kebun --}} -->
            <div>
                <h2 class="pppl-home-title">Tukang Kebun Terbaik</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <?php for ($i=0; $i < 4; $i++) :?>
                        <div class="col-md-3 col-sm-3">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="<?php echo $jasa[$i]->linkfoto ?>" alt="Tukang Kebun" style="width:100%; margin-top:10px;margin-bottom: 20px;width: 200px;height: 200px;background-position: center;background-repeat: no-repeat;"><br>
                                    <span class="nama-produk"><?php echo $jasa[$i]->name ?></span><br>
                                    <label class="alamat" for="alamat"><?php echo $jasa[$i]->tempat ?></label>
                                    <div class="nilai_rating mb-3">Rating: <?php echo $tanaman[$i]->rating ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
<!-- {{-- bagian arsitektur --}} -->
            <div>
                <h2 class="pppl-home-title mt-5">Arsitektur Taman Terbaik</h2>
            </div>
            <div class="card-produk">
                <div class="row">
                    <?php for ($i=0; $i < 4; $i++) :?>
                        <div class="col-md-3 col-sm-3">
                            <div class="card">
                                <div class="container">
                                    <img class="card-img-top" src="<?php echo $jasa[$i]->linkfoto ?>" alt="Arsitektur" style="width:100%; margin-top:10px;margin-bottom: 20px;width: 200px;height: 200px;background-position: center;background-repeat: no-repeat;"><br>
                                    <span class="nama-produk"><?php echo $jasa[$i]->title ?></span><br>
                                    <label class="alamat" for="alamat"><?php echo $jasa[$i]->tempat ?></label>
                                    <div class="nilai_rating mb-3">Rating: <?php echo $tanaman[$i]->rating ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div> 
</div>  