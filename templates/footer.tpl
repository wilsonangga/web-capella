    </div>    
    <button onclick="topFunction()" id="myBtn" title="Go to top"></button>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInUp">
                    <div class="judul">Newsletter</div>
                    <div class="isi">Dapatkan update terbaru mengenai informasi produk dan promosi langsung di email anda.</div>
                    <button class="btn btn-primary btn-sm my-2" data-target="#nletter" data-toggle="modal" onclick="emptyErrMod()">Berlangganan</button>                             
                </div>
                {*<div class="col-md-4">
                    <div class="font-weight-bold">PRODUK</div>
                    <ul style="margin: 0;padding: 0;list-style: none;font-weight: bold;">
                        <li><a href="#" style="color: white;">New Ayla</a></li>
                        <li><a href="#" style="color: white;">Sigra</a></li>
                        <li><a href="#" style="color: white;">a</a></li>
                        <li><a href="#" style="color: white;">a</a></li>
                        <li><a href="#" style="color: white;">a</a></li>
                    </ul>
                </div>*}
                <div class="col-md-6">
                    <div class="font-weight-bold wow slideInUp">IKUTI KAMI DI</div>
                    <a href="https://www.facebook.com/PTCapella-Medan-752944848419405" target="_blank" class="text-decoration-none">
                        <img src="images/logo-facebook.png" alt="" width="30" class="mt-1 mr-2 wow fadeIn"  data-wow-delay="0.3s"onmouseover="hover(this,'images/logo-facebook2.png')" onmouseout="unhover(this,'images/logo-facebook.png')">
                    </a>
                    <a href="https://www.instagram.com/capelladaihatsu_official" target="_blank">
                        <img src="images/logo-instagram.png" alt="" width="30" class="mt-1 wow fadeIn" data-wow-delay="0.3s" onmouseover="hover(this,'images/logo-instagram2.png')" onmouseout="unhover(this,'images/logo-instagram.png')">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center p-3 wow fadeIn">&copy; 2019 PT Capella Medan. All rights reserved</div>
            </div>
        </div>
    </div>
    
    <script src="{$_url}js/wow.min.js"></script>
    <script src="{$_url}slick/slick/slick.min.js"></script>
    <script src="{$_url}js/test-drive.js"></script>
    <script src="{$_url}js/custom.js"></script>
</body>
</html>