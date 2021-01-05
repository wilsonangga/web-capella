new WOW().init();
function hover(element,source) {
    element.setAttribute('src',source);
}
function unhover(element,source) {
    element.setAttribute('src', source);
}
function loaderPW(){
    var a = $("#namaPW").val();
    var b = $("#no_hpPW").val();
    var c = $("#emailPW").val();
    var d = $("#jkPW").val();
    var e = $("#kotaPW").val();
    var f = $("#cabangPW").val();
    var g = $("#mobilPW").val();
    if(a !='' && b !='' && c !='' && d !='' && e !='' && f !='' && g !=''){
        $('#loader').show();    
    }
}
function loader_td(){
    var a = $("#nama_td").val();
    var b = $("#no_hp").val();
    var c = $("#email_td").val();
    var d = $("#kota_td").val();
    var e = $("#cabang_td").val();
    var f = $("#tgl_td").val();
    var g = $("#wkt_td").val();
    var h = $("#mobil_td").val();
    if(a !='' && b !='' && c !='' && d !='' && e !='' && f !='' && g !='' && h !=''){
        $('#loader').show();    
    }
}
function loaderCU(){
    var a = $("#namaCU").val();
    var b = $("#jkCU").val();
    var c = $("#kotaCU").val();
    var d = $("#emailCU").val();
    var e = $("#no_hpCU").val();
    var f = $("#pesanCU").val();
    if(a !='' && b !='' && c !='' && d !='' && e !='' && f !=''){
        $('#loader').show();    
    }
}
function loaderBS(){
    var a = $("#nama").val();
    var b = $("#status").val();
    var c = $("#kota").val();
    var d = $("#no_handphone").val();
    var e = $("#email").val();
    var f = $("#no_polisi").val();
    var g = $("#model").val();
    var h = $("#tahun").val();
    var i = $("#kilometer").val();
    var j = $("#jenis_servis").val();
    var k = $("#tanggal").val();
    var l = $("#waktu").val();
    var m = $("#cabang").val();
    if(a !='' && b !='' && c !='' && d !='' && e !='' && f !='' && g !='' && h !='' && i !='' && j !='' && k !='' && l !='' && m !=''){
        $('#loader').show();    
    }
}
function loader_nl(){
    var a = $("#nama_nl").val();
    var b = $("#no_hp_nl").val();
    var c = $("#email_nl").val();
    var d = $("#kota_nl").val();
    if(a !='' && b !='' && c !='' && d !=''){
        $('#loader').show();    
    }
}
function hideloader(){
    $("#loader").hide();
}
function reloadCaptcha(id){
    $("div#"+id+" #refresh_btn").click();
}
function emptyError(parEl){
    $(".err."+ parEl +"").html("");
}
function showError(parEl, parMsg) {
    $("."+ parEl +"").html(parMsg);
}
function emptyErrMod(){
    arr = ['nama_td','no_hp','email_td','kota_td','cabang_td','tgl_td','wkt_td','mobil_td','captcha_code_tdrive','namaCU','jkCU','kotaCU','emailCU','no_hpCU','pesanCU','captcha_code_cus','namaPW','no_hpPW','emailPW','jkPW','kotaPW','cabangPW','mobilPW','captcha_code_pw', 'nama_nl', 'no_hp_nl', 'email_nl', 'kota_nl', 'captcha_code_nletter'];
    for (i=0;i<arr.length;i++) {
        emptyError(arr[i]);
    }
    $("#kota_td").select2("val","");
    $("#kotaCU").select2("val", "");
    $("#kotaPW").select2("val", "");
    $("#kota_nl").select2("val", "");
    $("#mobil_td").prop('disabled',true);
}
function pw(){
    $("#penawaran").modal("hide");
    $("#pwRes").modal("show");
}
function tdrive(varmsg){
    $("#testdrive").modal("hide");
    var isi="Terimakasih telah melakukan booking test drive. Informasi sudah kami terima. Anda akan segera dihubungi oleh pihak kami untuk konfirmasi. No. Booking Anda : <br>"+"<p class='text-danger font-weight-bold'>"+varmsg+"</p>";
    $("#isi_tdriveRes").html(isi);
    $("#tdriveRes").modal("show");
}
function cus(){
    $("#contactus").modal("hide");
    $("#cusRes").modal("show");
}
function nletter(){
    $("#nletter").modal("hide");
    $("#nletterRes").modal("show");
}

/*Button JS*/
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$(document).ready(function(){
    /*Button JS*/
    window.onscroll = function() {scrollFunction()};
    
    /*All JS*/
    $(function () {
        $('.marquee').marquee({
            duration: 10000,
            duplicate: true,
            pauseOnHover:true
        });
    });
    $(document).on('hidden.bs.modal', '.modal', function () {
        $(this).find('form').trigger('reset');
    });
    $("#kota_td").select2({
        placeholder: 'Select an option'
    }); 
    $("#kotaPW").select2({
        placeholder: 'Select an option'
    }); 
    $("#kota_nl").select2({
        placeholder: 'Select an option'
    });
    $("#menuPromo").click(function(){
        var x = $("#local").val();
        if(x == "home"){
            $('html, body').animate({
                scrollTop: $(".headerPromo").offset().top-95
            });    
        }
        else{
            localStorage.setItem("animation", "headerPromo")
            window.location.href = "?ng=home";  
        }
    });
    $("#menuProduk").click(function(){
        var x = $("#local").val();
        if(x == "home"){
            $('html, body').animate({
                scrollTop: $(".headerProduk").offset().top-95
            });    
        }
        else{
            localStorage.setItem("animation", "headerProduk")
            window.location.href = "?ng=home";  
        }
    });
    $("#berita").click(function(){
        var x = $("#local").val();
        if(x == "home"){
            $('html, body').animate({
                scrollTop: $(".berita").offset().top-95
            });  
        }
        else{
            localStorage.setItem("animation", "berita")
            window.location.href = "?ng=home";  
        }
    });
    $("#ttgKami").click(function(){
        var x = $("#local").val();
        if(x == "home"){
            $('html, body').animate({
                scrollTop: $(".about").offset().top-95
            });   
        }
        else{
            localStorage.setItem("animation", "about")
            window.location.href = "?ng=home";  
        }
    });
    $("#menuLokasi").click(function(){
        var x = $("#local").val();
        if(x == "home"){
            $('html, body').animate({
                scrollTop: $(".headerLokasi").offset().top-95
            });  
        }
        else{
            localStorage.setItem("animation", "headerLokasi")
            window.location.href = "?ng=home";  
        }
    });

    if (localStorage.animation && localStorage.getItem("animation")=="headerPromo") {
        setTimeout(function () {
            $('html, body').animate({
                scrollTop: $(".headerPromo").offset().top-95
            });
         }, 0);
        localStorage.removeItem("animation");
    }
    else if (localStorage.animation && localStorage.getItem("animation")=="headerProduk") {
        setTimeout(function () {
            $('html, body').animate({
                scrollTop: $(".headerProduk").offset().top-95
            });
         }, 0);
        localStorage.removeItem("animation");
    }
    else if (localStorage.animation && localStorage.getItem("animation")=="berita") {
        setTimeout(function () {
            $('html, body').animate({
                scrollTop: $(".berita").offset().top-95
            });
        }, 0);
        localStorage.removeItem("animation");
    }
    else if (localStorage.animation && localStorage.getItem("animation")=="about") {
        setTimeout(function () {
            $('html, body').animate({
                scrollTop: $(".about").offset().top-95
            });
        }, 0);
        localStorage.removeItem("animation");
    }
    else if (localStorage.animation && localStorage.getItem("animation")=="headerLokasi") {
        setTimeout(function () {
            $('html, body').animate({
                scrollTop: $(".headerLokasi").offset().top-95
            });
        }, 0);
        localStorage.removeItem("animation");
    }
});

/*Home JS*/
function delete_cookies(){
    $.removeCookie("modal");
}
$(window).on("load", function(){
    var x = $("#local").val();
    $("div#sectionLokasi div:nth-child(odd) table").addClass("fadeInUp");
    $("div#sectionLokasi div:nth-child(even) table").addClass("fadeInDown");
    //close navbar onclick
    $('.navbar-nav>li>a').on('click', function(){
        setTimeout(function () {
            $('.navbar-collapse').collapse('hide');
        },2500);
    });
    if(x == "home"){
        $(window).on("scroll", function(){
            var sssx = $(window).scrollTop();

            //Section Promo
            var spromo = $(".carousel-indicators").offset().top-95;
            var promo = $("#promo_list").position().top-95 + $("#promo_list").outerHeight(true);
            if ((sssx) <= promo && sssx >= spromo) {
                $('ul.navbar-nav li.nav-item a#menuPromo').addClass("now");
                $('head').append('<style>ul.navbar-nav li.nav-item a#menuPromo.now:after{transform: scaleX(1)};');
            }
            if((sssx) >= promo || sssx <= spromo){
                $('ul.navbar-nav li.nav-item a#menuPromo').removeClass("now");
            }

            //Section Product
            var product = $("#product_list").position().top-95 + $("#product_list").outerHeight(true);
            if ((sssx) <= product && sssx >= promo) {
                $('ul.navbar-nav li.nav-item a#menuProduk').addClass("now");
                $('head').append('<style>ul.navbar-nav li.nav-item a#menuProduk.now:after{transform: scaleX(1)};');
            }
            if((sssx) >= product || sssx <= promo){
                $('ul.navbar-nav li.nav-item a#menuProduk').removeClass("now");
            }

            //Section News
            var jumbotron = $(".jumbotron").position().top-95 + $(".jumbotron").outerHeight(true);
            var news = $("#news_list").position().top-95 + $("#news_list").outerHeight(true);
            if ((sssx) <= news && sssx >= jumbotron) {
                $('ul.navbar-nav li.nav-item a#berita').addClass("now");
                $('head').append('<style>ul.navbar-nav li.nav-item a#berita.now:after{transform: scaleX(1)};');
            }
            if((sssx) >= news || sssx <= jumbotron){
                $('ul.navbar-nav li.nav-item a#berita').removeClass("now");
            }

            //Section Aboutus
            var aboutus = $("#aboutus_list").position().top-95 + $("#aboutus_list").outerHeight(true);
            if ((sssx) <= aboutus && sssx >= news) {
                $('ul.navbar-nav li.nav-item a#ttgKami').addClass("now");
                $('head').append('<style>ul.navbar-nav li.nav-item a#ttgKami.now:after{transform: scaleX(1)};');
            }
            if((sssx) >= aboutus || sssx <= news){
                $('ul.navbar-nav li.nav-item a#ttgKami').removeClass("now");
            }

            //Section Dealer
            var dealer = $("#dealer_list").position().top-95 + $("#dealer_list").outerHeight(true);
            if ((sssx) <= dealer && sssx >= aboutus) {
                $('ul.navbar-nav li.nav-item a#menuLokasi').addClass("now");
                $('head').append('<style>ul.navbar-nav li.nav-item a#menuLokasi.now:after{transform: scaleX(1)};');
            }
            if((sssx) >= dealer || sssx <= aboutus){
                $('ul.navbar-nav li.nav-item a#menuLokasi').removeClass("now");
            }
        });
    }
}); 
$(document).ready(function(){
    if(!($.cookie("modal"))){
        $.cookie("modal", "show",{ expires : 1 });      
        $("#kotak_promo").modal("show");
    }
    $('[data-toggle="popover"]').popover();
    $("div.about_us p").addClass("text-justify text-secondary font-italic");
    $(document).on('click', '#getPenawaran' ,function(){
        var data = $(this).data('id');
        $("#mobilPW").val(data);
        $("#penawaran").modal('show');
    });
    $(document).on('click', '#getDealer' ,function(){
        var data = $(this).data('id');
        $("#maps").attr("src", data);
        $("#maps_dealer").modal('show');
    });
    $(document).on('click', '#getInfo' ,function(){
        var data = $(this).data('id');
        $("#info_content").html(data);
        $("#info_dealer").modal('show');
    });
    $("#kotaCU").select2({
        placeholder: 'Select an option'
    });
});

//Product JS
var product_page = $("#page").val();
if(product_page == "product"){
    $(window).on("load", function(){
        $(window).on("scroll", function(){
            var sssx = $(window).scrollTop();
            var sss7 = $(".scrollMenu").offset().top-3;
            var wH = $(window).height();
            
            if ((sssx) <= sss7) {
                $(".navigation").show();
            }
            if ((sssx) >= sss7) {
                $(".navigation").hide();
            }
        });
    });    
}
// function reloadCaptcha(){
//     document.getElementById("refresh_btn").click();
// }
$(document).ready(function(){
    
    $(document).on('click', '#getTestdrive' ,function(){
        var data = $(this).data('id');
        $("#mobil_td").val(data);
        $('#testdrive').modal('show');
    });
    $('.slick-one').slick({
        arrows:true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay:true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    $('.slick-two').slick({
        arrows:true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay:true
        /*responsive: [
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]*/
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
    });
    $('#interiorMenu').on("click",function(){
        $('html,body').animate({
             scrollTop: $("#interiorSect").offset().top-52
        });
    });
    $('#exteriorMenu').click(function(){
        $('html,body').animate({
             scrollTop: $("#exteriorSect").offset().top-52
        });
    });
    $('#360Menu').click(function(){
        $('html,body').animate({
             scrollTop: $("#360Sect").offset().top-52
        });
    });
    $('#colourMenu').click(function(){
        $('html,body').animate({
             scrollTop: $("#colourSect").offset().top-52
        });
    });
    $('#performanceMenu').click(function(){
        $('html,body').animate({
             scrollTop: $("#performanceSect").offset().top-52
        });
    });
    $('#safetyMenu').click(function(){
        $('html,body').animate({
             scrollTop: $("#safetySect").offset().top-52
        });
    });
    $('#variantMenu').click(function(){
        $('html,body').animate({
             scrollTop: $("#variantSect").offset().top-52
        });
    });
    $('#specMenu').click(function(){
        $('html,body').animate({
             scrollTop: $("#specSect").offset().top-100
        });
    });
});