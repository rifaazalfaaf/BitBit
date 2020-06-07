<script>
    function changeLink(value) {
        // var searchValue = $('#search-value').val();
        $("#search-button").attr("href", "search?keyword=" + value);
    }
</script>

<div class="bitbit-navbar navbar navbar-expand-sm fixed-top navbar-bitbit" style="background: #ffffff;box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.16);">>
    <div class="container">
         <!-- Brand/logo -->
        <a class="navbar-brand col-md-2" href="/"><img class="logo-bitbit mb-2" src="assets/img/logo.png" style="width: 80px;" alt=""></a>
        
        
        <div class="input-group col-md-10 mb-3 p-0" style="margin-top: 10px;">
            <input id="search-value" type="text" onkeyup="changeLink(this.value)" class="form-control" style="color: #6b8a3c" placeholder="Cari produk atau jasa disini...">
                <div class="input-group-append" id="myDIV">
                    <a id="search-button" class="btn border border-left-0" style="background: #ffffff;" href="">
                        <i class="fa fa-search" style="color: #66990c"></i>
                    </a>
                </div>
        </div>
        </a>

    </div>
</div>