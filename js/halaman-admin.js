function readURL(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+id)
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
function CKupdate(){
    for ( instance in CKEDITOR.instances ){
        CKEDITOR.instances[instance].updateElement();
        CKEDITOR.instances[instance].setData('');
    }
}
function showPass(obj,show,hide) {
    var object = document.getElementById(obj);
    if(object.type == "password"){
        object.type = "text";
        show.style.display = "none";
        document.getElementById(hide).style.display = "block";
    }
}
function hidePass(obj,show,hide){
    var object = document.getElementById(obj);
    if(object.type == "text"){
        object.type = "password";
        show.style.display = "none";
        document.getElementById(hide).style.display = "block";
    }
}

function emptyError(parEl){
    $(".err."+ parEl +"").html("");
}
function showError(parEl, parMsg) {
    $("."+ parEl +"").html(parMsg);
}
function emptyErrMod(){
    arr = ['edit_currPSWD', 'edit_newPSWD', 'edit_repPSWD'];
    for (i=0;i<arr.length;i++) {
        emptyError(arr[i]);
    }
}

$(document).ready(function(){
    var _url = $("#_url").val();
    var id_user = $("#id_user").val();
    var kdcab = $("#kdcab").val();
    var role = $("#role").val();
    load_data();
    function load_data(content){
        $.post("ajax/halaman-admin.php",{content:content,_url:_url,id_user:id_user,kdcab:kdcab,role:role},function(data){
            $("#content-ajax").html(data);
        });
    }
    
//    function load_price(table){
//        $.post("ajax/type_price.php",{table:table},function(data){
//            $("tbody#"+table).html(data);
//        });
//    }
    
    //MODAL RESET & AUTOFOCUS
    $(document).on('hidden.bs.modal', '.modal', function () {
        $(this).find('form').trigger('reset');
    });
    $('.modal').on('shown.bs.modal', function() {
        $(this).find('[autofocus]').focus();
    });
    
    //DROPDOWN ACTIVE
    $(function() {
        $("li").click(function() {
            // remove classes from all
            $("li").removeClass("active");
            // add class to the one we clicked
            $(this).addClass("active");
            // remove classes from dropdown-item if dashboard active
            if($("#nav-dashboard").hasClass("active")){
               $("a.dropdown-item").removeClass("active");
            }
        });
        $("a.dropdown-item").click(function() {
            // remove classes from all
            $("a.dropdown-item").removeClass("active");
            // add class to the one we clicked
            $(this).addClass("active");
        });
    });
    
    //CLEAR ERROR
    $(document).on('hidden.bs.modal', '.modal', function () {
        emptyErrMod();
    });
    
    //VIEW-DETAILS
    $(document).on('click','#vd_data_cu',function(){
        $("a#contact_us").click();
    });
    $(document).on('click','#vd_data_booking',function(){
        $("a#data_booking").click();
    });
    $(document).on('click','#vd_data_penawaran',function(){
        $("a#data_penawaran").click();
    });
    $(document).on('click','#vd_data_tdrive',function(){
        $("a#data_tdrive").click();
    });
    
    //DROPDOWN-ITEM
    $("#dashboard").click(function(){
        var content = "dashboard";
        load_data(content);
    });
    $("#manage_user").click(function(){
        var content = "manage_user";
        load_data(content);
    });
    $("#about_us").click(function(){
        var content = "about_us";
        load_data(content);
    });
    $("#announcement").click(function(){
        var content = "announcement";
        load_data(content);
    });
    $("#dealer").click(function(){
        var content = "dealer";
        load_data(content);
    });
    $("#slideshow").click(function(){
        var content = "slideshow";
        load_data(content);
    });
    $("#promo_list").click(function(){
        var content = "promo_list";
        load_data(content);
    });
    $("#product_main").click(function(){
        var content = "product_main";
        load_data(content);
    });
    $("#product_banner").click(function(){
        var content = "product_banner";
        load_data(content);
    });
    $("#product_color").click(function(){
        var content = "product_color";
        load_data(content);
    });
    $("#product_price").click(function(){
        var content = "product_price";
        load_data(content);
    });
    $("#product_spec").click(function(){
        var content = "product_spec";
        load_data(content);
    });
    $("#product_tool").click(function(){
        var content = "product_tool";
        load_data(content);
    });
    $("#news_list").click(function(){
        var content = "news_list";
        load_data(content);
    });
    $("#contact_service").click(function(){
        var content = "contact_service";
        load_data(content);
    });
    $("#data_booking").click(function(){
        var content = "data_booking";
        load_data(content);
    });
    $("#contact_us").click(function(){
        var content = "contact_us";
        load_data(content);
    });$("#contact_penawaran").click(function(){
        var content = "contact_penawaran";
        load_data(content);
    });
    $("#data_penawaran").click(function(){
        var content = "data_penawaran";
        load_data(content);
    });
    $("#data_tdrive").click(function(){
        var content = "data_tdrive";
        load_data(content);
    });
    $("#unit_tdrive").click(function(){
        var content = "unit_tdrive";
        load_data(content);
    });
    
    
    //MODAL CLOSE AND REFRESH CONTENT
    $(document).on('hidden.bs.modal', "#edit_profileRes", function(){
        location.reload();
    });
    $(document).on('hidden.bs.modal', "#edit_profile_paswdRes", function(){
        var content = "dashboard";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#edit_profile_paswd", function(){
        var cp = document.getElementById("show_curr");
        var np = document.getElementById("show_new");
        var rp = document.getElementById("show_rep");
        hidePass('edit_currPSWD',cp,'hide_curr');
        hidePass('edit_newPSWD',np,'hide_new');
        hidePass('edit_repPSWD',rp,'hide_rep');
    });
    
    
    $(document).on('hidden.bs.modal', "#edit_manage_userRes", function(){
        var content = "manage_user";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#delete_manage_userRes", function(){
        var content = "manage_user";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#add_about_us", function(){
        CKupdate();
    });
    $(document).on('hidden.bs.modal', "#add_about_usRes", function(){
        var content = "about_us";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#edit_about_usRes", function(){
        var content = "about_us";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#delete_about_usRes", function(){
        var content = "about_us";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#add_announcementRes", function(){
        var content = "announcement";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#edit_announcementRes", function(){
        var content = "announcement";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#delete_announcementRes", function(){
        var content = "announcement";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#add_dealerRes", function(){
        var content = "dealer";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#edit_dealerRes", function(){
        var content = "dealer";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#delete_dealerRes", function(){
        var content = "dealer";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#add_data", function(){
        $("#load_imgADD").attr("src",""); 
    });
    $(document).on('hidden.bs.modal', '#add_dataRes', function () {
        var content = "slideshow";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#edit_dataRes', function () {
        var content = "slideshow";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#delete_dataRes', function () {
        var content = "slideshow";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#add_promo_list", function(){
        $("#load_imgPL").attr("src",""); 
    });
    $(document).on('hidden.bs.modal', '#add_promo_listRes', function () {
        var content = "promo_list";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#edit_promo_listRes', function () {
        var content = "promo_list";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#delete_promo_listRes', function () {
        var content = "promo_list";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', "#add_product_main", function(){
        $("#load_imgPM").attr("src",""); 
    });
    $(document).on('hidden.bs.modal', '#add_product_mainRes', function () {
        var content = "product_main";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#edit_product_mainRes', function () {
        var content = "product_main";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#delete_product_mainRes', function () {
        var content = "product_main";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', '#add_product_banner', function () {
        $("#load_imgPB").attr("src",""); 
    });
    $(document).on('hidden.bs.modal', '#add_product_bannerRes', function () {
        var product = $("#produk_banner").val();
        $("#add_idPB").val(product);
        $.ajax({
            url: "ajax/product_banner.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_banner").html(data);
            }
        });    
    });
    $(document).on('hidden.bs.modal', '#edit_product_bannerRes', function () {
        var product = $("#produk_banner").val();
        $("#add_idPB").val(product);
        $.ajax({
            url: "ajax/product_banner.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_banner").html(data);
            }
        });    
    });
    $(document).on('hidden.bs.modal', '#delete_product_bannerRes', function () {
        var product = $("#produk_banner").val();
        $("#add_idPB").val(product);
        $.ajax({
            url: "ajax/product_banner.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_banner").html(data);
            }
        });    
    });
    
    $(document).on('hidden.bs.modal', '#add_product_colorRes', function () {
        var product = $("#produk_color").val();
        $("#add_idPC").val(product);
        $.ajax({
            url: "ajax/product_color.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_color").html(data);
            }
        });    
    });
    $(document).on('hidden.bs.modal', '#edit_product_colorRes', function () {
        var product = $("#produk_color").val();
        $.ajax({
            url: "ajax/product_color.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_color").html(data);
            }
        });    
    });
    $(document).on('hidden.bs.modal', '#delete_product_colorRes', function () {
        var product = $("#produk_color").val();
        $.ajax({
            url: "ajax/product_color.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_color").html(data);
            }
        });    
    });
    
    $(document).on('hidden.bs.modal', '#edit_product_priceRes', function () {
        if(role == 1)
            var cabang = $("#cabang_price").val();
        else
            var cabang = $("#kdcab").val();
        var produk = $("#produk_price").val();
        $.ajax({
            url: "ajax/type_price.php",
            method: "POST",
            data: {cabang:cabang,produk:produk,role:role},
            success: function(data){
                $("#load_price").html(data);
            }
        });
    });
    
     $(document).on('hidden.bs.modal', "#add_product_specRes", function(){
        var product = $("#produk_spec").val();
        $.ajax({
            url: "ajax/product_spec.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_spec").html(data);
            }
        });
    });
    $(document).on('hidden.bs.modal', "#edit_product_specRes", function(){
        var product = $("#produk_spec").val();
        $.ajax({
            url: "ajax/product_spec.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_spec").html(data);
            }
        });
    });
    $(document).on('hidden.bs.modal', "#delete_product_specRes", function(){
        var product = $("#produk_spec").val();
        $.ajax({
            url: "ajax/product_spec.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_spec").html(data);
            }
        });
    });
    
    $(document).on('hidden.bs.modal', "#add_product_tool", function(){
        $("#load_imgPT").attr("src",""); 
        CKupdate();
    });
    $(document).on('hidden.bs.modal', "#add_product_toolRes", function(){
        var product = $("#produk_tool").val();
        var tool = $("#kd_tool").val();
        $.ajax({
            url: "ajax/product_tool.php",
            method: "POST",
            data: {product:product,tool:tool},
            success: function(data){
                $("#load_tool").html(data);
            }
        });
    });
    $(document).on('hidden.bs.modal', "#edit_product_toolRes", function(){
        var product = $("#produk_tool").val();
        var tool = $("#kd_tool").val();
        $.ajax({
            url: "ajax/product_tool.php",
            method: "POST",
            data: {product:product,tool:tool},
            success: function(data){
                $("#load_tool").html(data);
            }
        });
    });
    $(document).on('hidden.bs.modal', "#delete_product_toolRes", function(){
        var product = $("#produk_tool").val();
        var tool = $("#kd_tool").val();
        $.ajax({
            url: "ajax/product_tool.php",
            method: "POST",
            data: {product:product,tool:tool},
            success: function(data){
                $("#load_tool").html(data);
            }
        });
    });
    
    $(document).on('hidden.bs.modal', "#add_news_list", function(){
        $("#load_imgNL").attr("src",""); 
        CKupdate();
    });
    $(document).on('hidden.bs.modal', "#add_news_listRes", function(){
        var content = "news_list";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#edit_news_listRes", function(){
        var content = "news_list";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', "#delete_news_listRes", function(){
        var content = "news_list";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', '#add_contact_serviceRes', function () {
        var content = "contact_service";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#edit_contact_serviceRes', function () {
        var content = "contact_service";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#delete_contact_serviceRes', function () {
        var content = "contact_service";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', '#add_contact_penawaranRes', function () {
        var content = "contact_penawaran";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#edit_contact_penawaranRes', function () {
        var content = "contact_penawaran";
        load_data(content);
    });
    $(document).on('hidden.bs.modal', '#delete_contact_penawaranRes', function () {
        var content = "contact_penawaran";
        load_data(content);
    });
    
    
    $(document).on('hidden.bs.modal', '#add_unit_tdriveRes', function () {
        if(role == 1){
            var cabang = $("#cabang_tdrive").val();
            $.ajax({
                url: "ajax/unit_test_drive.php",
                method: "POST",
                data: {cabang:cabang},
                success: function(data){
                    $("#load_unit").html(data);
                }
            });
        }
        else{
            var content = "unit_tdrive";
            load_data(content);   
        }
    });
    $(document).on('hidden.bs.modal', '#delete_unit_tdriveRes', function () {
        if(role == 1){
            var cabang = $("#cabang_tdrive").val();
            $.ajax({
                url: "ajax/unit_test_drive.php",
                method: "POST",
                data: {cabang:cabang},
                success: function(data){
                    $("#load_unit").html(data);
                }
            });
        }
        else{
            var content = "unit_tdrive";
            load_data(content);   
        }
    });
    
    //DELETE JS
    $(document).on('click','#delMU',function(){
        var id = $(this).data('id');
        $("#delete_manage_user").modal("show");
        $("#del_idMU").val(id);
    });
    $(document).on('click','#delAU',function(){
        var id = $(this).data('id');
        $("#delete_about_us").modal("show");
        $("#del_idAU").val(id);
    });
    $(document).on('click','#delAN',function(){
        var id = $(this).data('id');
        $("#delete_announcement").modal("show");
        $("#del_idAN").val(id);
    });
    $(document).on('click','#delDL',function(){
        var id = $(this).data('id');
        $("#delete_dealer").modal("show");
        $("#del_idDL").val(id);
    });
    $(document).on('click','#delHS',function(){
        var id = $(this).data('id');
        $("#delete_data").modal("show");
        $("#del_idHS").val(id);
    });
    $(document).on('click','#delPL',function(){
        var id = $(this).data('id');
        $("#delete_promo_list").modal("show");
        $("#del_idPL").val(id);
    });
    $(document).on('click','#delPM',function(){
        var id = $(this).data('id');
        $("#delete_product_main").modal("show");
        $("#del_idPM").val(id);
    });
    $(document).on('click','#delPB',function(){
        var id = $(this).data('id');
        $("#delete_product_banner").modal("show");
        $("#del_idPB").val(id);
    });
    $(document).on('click','#delPC',function(){
        var id = $(this).data('id');
        $("#delete_product_color").modal("show");
        $("#del_idPC").val(id);
    });
    $(document).on('click','#delPS',function(){
        var id = $(this).data('id');
        $("#delete_product_spec").modal("show");
        $("#del_idPS").val(id);
    });
    $(document).on('click','#delPT',function(){
        var id = $(this).data('id');
        $("#delete_product_tool").modal("show");
        $("#del_idPT").val(id);
    });
    $(document).on('click','#delNL',function(){
        var id = $(this).data('id');
        $("#delete_news_list").modal("show");
        $("#del_idNL").val(id);
    });
    $(document).on('click','#delCS',function(){
        var id = $(this).data('id');
        $("#delete_contact_service").modal("show");
        $("#del_idCS").val(id);
    });
    $(document).on('click','#delCP',function(){
        var id = $(this).data('id');
        $("#delete_contact_penawaran").modal("show");
        $("#del_idCP").val(id);
    });
    $(document).on('click','#delUT',function(){
        var id = $(this).data('id');
        $("#delete_unit_tdrive").modal("show");
        $("#del_idUT").val(id);
    });
    
    //LOAD TABLE PRICE
    if(role == 1){
        $(document).on('click','#filter_price',function(){
            var cabang = $("#cabang_price").val();
            var produk = $("#produk_price").val();
            $("#edit_cabangPP").val(cabang);
            $.ajax({
                url: "ajax/type_price.php",
                method: "POST",
                data: {cabang:cabang,produk:produk,kdcab:kdcab,role:role},
                success: function(data){
                    $("#load_price").html(data);
                }
            });    
        });    
    }else{
        $(document).on('change','#produk_price',function(){
            var cabang = kdcab;
            var produk = $("#produk_price").val();
            $("#edit_cabangPP").val(cabang);
            $.ajax({
                url: "ajax/type_price.php",
                method: "POST",
                data: {cabang:cabang,produk:produk,kdcab:kdcab,role:role},
                success: function(data){
                    $("#load_price").html(data);
                }
            });    
        });   
    }
    
    
    //LOAD UNIT TEST DRIVE
    $(document).on('change','#cabang_tdrive',function(){
        var cabang = $("#cabang_tdrive").val();
        $.ajax({
            url: "ajax/unit_test_drive.php",
            method: "POST",
            data: {cabang:cabang},
            success: function(data){
                $("#load_unit").html(data);
            }
        });
    });
    $(document).on('click','#addUT',function(){
        var id = $(this).data('id');
        $("#add_cabangUT").val(id);
        $("#add_unit_tdrive").modal("show");
    });
    
    //LOAD PRODUCT COLOR
    $(document).on('change','#produk_color',function(){
        var product = $("#produk_color").val();
        $("#add_idPC").val(product);
        $.ajax({
            url: "ajax/product_color.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_color").html(data);
            }
        });    
    });  
    $(document).on('shown.bs.modal','#add_product_color',function(){
        var product = $("#produk_color").val();
        $("#add_idPC").val(product);
    });  
    
    //LOAD PRODUCT BANNER
    $(document).on('change','#produk_banner',function(){
        var product = $("#produk_banner").val();
        $("#add_idPB").val(product);
        $.ajax({
            url: "ajax/product_banner.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_banner").html(data);
            }
        });    
    });
    $(document).on('shown.bs.modal','#add_product_banner',function(){
        var product = $("#produk_banner").val();
        $("#add_idPB").val(product);
    }); 
    
    //LOAD PRODUCT SPEC
    $(document).on('change', '#produk_spec',function(){
        var product = $("#produk_spec").val();
        $("#add_productPS").val(product);
        $.ajax({
            url: "ajax/product_spec.php",
            method: "POST",
            data: {product:product},
            success: function(data){
                $("#load_spec").html(data);
            }
        });
    });
    $(document).on('shown.bs.modal','#add_product_spec',function(){
        var product = $("#produk_spec").val();
        $("#add_productPS").val(product);
    });
    
    //LOAD PRODUCT TOOL
    $(document).on('click', '#filter_tool', function(){
        var product = $("#produk_tool").val();
        var tool = $("#kd_tool").val();
        $.ajax({
            url: "ajax/product_tool.php",
            method: "POST",
            data: {product:product,tool:tool},
            success: function(data){
                $("#load_tool").html(data);
            }
        });
    });
    
    $(document).on('shown.bs.modal','#add_product_tool',function(){
        var product = $("#produk_tool").val();
        var tool = $("#kd_tool").val();
        $("#add_productPT").val(product);
        $("#add_toolPT").val(tool);
    });
});