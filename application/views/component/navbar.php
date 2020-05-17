<div class="navbar navbar-expand-sm navbar-bitbit">
    <div class="container">
         <!-- Brand/logo -->
        <a class="navbar-brand navbar-brand-bitbit col-md-1" href="/">BitBit</a>
        
        
        <div class="input-group col-md-8 mb-3" style="margin-top: 10px;">
            <input type="text" class="form-control" style="color: #6b8a3c" placeholder="Cari produk atau jasa...">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
        </div>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="#">
                    <i class="fa fa-shopping-cart fa-2x" href="#"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">
                    <button type="button" class="btn btn-light" style="background-color: #ffffff; color: #548611">Masuk</button>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}">
                    <button type="button" class="btn btn-success" style="background-color:  #66990c">Daftar</button>
                </a>
            </li>
        </ul>
    </div>
</div>