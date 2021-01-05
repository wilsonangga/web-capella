$(document).ready(function(){
    var role= $("#role").val();
    var kdcab = $("#kdcab").val();
    $(document).on('click','#getPF',function(){
        var idPF = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php" ,
            method:"POST",
            data:{idPF:idPF},
            dataType:"JSON",
            success:function(data){
                $("#edit_idPF").val(data.id);
                $("#edit_namePF").val(data.name);
                $("#edit_usernamePF").val(data.username);
                $("#edit_cabangPF").val(data.cabang);
                $("#edit_rolePF").val(data.role);
            }
        });
        $('#edit_profile').modal('show');
    });
    $(document).on('click','#getPSWD',function(){
        var idPSWD = $(this).data('id');
        $("#edit_idPSWD").val(idPSWD)
        $('#edit_profile_paswd').modal('show');
    });
    $(document).on('click','#getMU',function(){
        var idMU = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php" ,
            method:"POST",
            data:{idMU:idMU},
            dataType:"JSON",
            success:function(data){
                $("#edit_idMU").val(data.id);
                $("#edit_nameMU").val(data.name);
                $("#edit_usernameMU").val(data.username);
                $("#edit_cabangMU").val(data.cabang);
                $("#edit_roleMU").val(data.role);
            }
        });
        $('#edit_manage_user').modal('show');
    });
    $(document).on('click','#getAU',function(){
        var idAU = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php" ,
            method:"POST",
            data:{idAU:idAU},
            dataType:"JSON",
            success:function(data){
                $("#edit_idAU").val(data.id);
                $("#edit_titleAU").val(data.title);
                $("#edit_subAU").val(data.sub);
                CKEDITOR.instances["edit_contentAU"].setData(data.content); 
                $("#edit_statusAU").val(data.status);
            }
        });
        $('#edit_about_us').modal('show');
    });
    $(document).on('click','#getAN',function(){
        var idAN = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php" ,
            method:"POST",
            data:{idAN:idAN},
            dataType:"JSON",
            success:function(data){
                $("#edit_idAN").val(data.id);
                $("#edit_contentAN").val(data.content);
                $("#edit_statusAN").val(data.status);
            }
        });
        $('#edit_announcement').modal('show');
    });
    $(document).on('click','#getDL',function(){
        var idDL = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php" ,
            method:"POST",
            data:{idDL:idDL},
            dataType:"JSON",
            success:function(data){
                $("#edit_idDL").val(data.id);
                $("#edit_sortDL").val(data.sort);
                $("#edit_kdcabDL").val(data.kdcab);
                $("#edit_cabangDL").val(data.cabang);
                $("#edit_alamatDL").val(data.address);
                $("#edit_noshDL").val(data.nosh);
                $("#edit_nosvDL").val(data.nosv);
                $("#edit_layananDL").val(data.layanan);
                $("#edit_mapsDL").val(data.maps);
                $("#edit_statusDL").val(data.status);
                CKEDITOR.instances["edit_infoDL"].setData(data.info); 
            }
        });
        $('#edit_dealer').modal('show');
    });
    $(document).on('click','#getHS',function(){
        var id = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php",
            method:"POST",
            data: {id:id},
            dataType:"JSON",
            success:function(data)
            {
                $("#edit_idHS").val(data.id);
                $("#edit_sortHS").val(data.sort);
                $("#edit_titleHS").val(data.title);
                $("#old_img").val(data.image);
                $("#edit_statusHS").val(data.status);
                $("#load_edit_imgHS").attr("src",'images/slideshow/'+ data.image);
            }
        });
        $('#edit_data').modal('show');
    });
    $(document).on('click','#getPL',function(){
        var idd = $(this).data('id');
        $.ajax({
            url:"ajax/edit_data.php",
            method:"POST",
            data: {idd:idd},
            dataType:"JSON",
            success:function(data)
            {
                $("#edit_idPL").val(data.id);
                $("#old_imgPL").val(data.image);
                $("#edit_dealerPL").val(data.dealer);
                $("#load_edit_imgPL").attr("src","images/promo/"+data.image);
                $("#edit_expPL").val(data.exp);
                $("#edit_titlePL").val(data.title);
                CKEDITOR.instances["edit_contentPL"].setData(data.content); 
                $("#edit_statusPL").val(data.status);
            }
        });
        $('#edit_promo_list').modal('show');
    });
    $(document).on('click','#getPM',function(){
        var idPM = $(this).data('id') ;
        $.ajax({
            url: "ajax/edit_data.php" ,
            method: "POST",
            data: {idPM:idPM},
            dataType: "JSON",
            success: function(data){
                $("#old_idPM").val(data.id);
                $("#edit_idPM").val(data.id);
                $("#old_imgPM").val(data.images);
                $("#load_edit_imgPM").attr("src","images/product/"+data.name+"/"+data.images);
                $("#edit_namePM").val(data.name);
                $("#edit_pricePM").val(data.price);
                $("#edit_seatersPM").val(data.seaters);
                $("#old_brosurPM").val(data.brosur);
            }
        });
        $('#edit_product_main').modal('show');
    });
    $(document).on('click','#getPB',function(){
        var idPB = $(this).data('id') ;
        $.ajax({
            url: "ajax/edit_data.php" ,
            method: "POST",
            data: {idPB:idPB},
            dataType: "JSON",
            success: function(data){
                $("#edit_idPB").val(data.id);
                $("#old_imgPB").val(data.images); 
                $("#edit_jbannerPB").val(data.kd_ban);
                $("#load_edit_imgPB").attr("src","images/product/"+data.name+"/banner/"+data.images);
            }
        });
        $('#edit_product_banner').modal('show');
    });
    $(document).on('click','#getPP',function(){
        var idPP = $(this).data('id');
        if(role == 1){
            var cabangPP = $("#edit_cabangPP").val();
            $.ajax({
                url: "ajax/edit_data.php",
                method: "POST",
                data: {idPP:idPP,cabangPP:cabangPP},
                dataType: "JSON",
                success: function(data){
                    $("#edit_idPP").val(idPP);
                    $("#edit_namaPP").val(data.product_id);
                    $("#edit_tipePP").val(data.tipe);
                    $("#edit_hargaPP").val(data.harga);
                }
            });    
        }
        else{
            var cabangPP = "";
            if(kdcab == "BDA")
                cabangPP = "bda";
            else if(kdcab == "GT1")
                cabangPP = "smt";
            else if(kdcab == "PDG")
                cabangPP = "sbr";
            else if(kdcab == "DRI")
                cabangPP = "dri";
            else if(kdcab == "SDR")
                cabangPP = "pbr";
            $.ajax({
                url: "ajax/edit_data.php",
                method: "POST",
                data: {idPP:idPP,cabangPP:cabangPP},
                dataType: "JSON",
                success: function(data){
                    $("#edit_idPP").val(idPP);
                    $("#edit_namaPP").val(data.product_id);
                    $("#edit_cabangPP").val(cabangPP)
                    $("#edit_tipePP").val(data.tipe);
                    $("#edit_hargaPP").val(data.harga);
                }
            });    
        }
        
        $('#edit_product_price').modal('show');
    });
    $(document).on('click','#getPC',function(){
        var idPC = $(this).data('id');
        $.ajax({
            url: "ajax/edit_data.php",
            method: "POST",
            data: {idPC:idPC},
            dataType: "JSON",
            success: function(data){
                $("#edit_idPC").val(idPC);
                $("#edit_nwarnaPC").val(data.nwarna);
                $("#edit_warnaPC").val(data.warna);
            }
        });
        $('#edit_product_color').modal('show');
    });
    $(document).on('click','#getPS',function(){
        var idPS = $(this).data('id');
        $.ajax({
            url: "ajax/edit_data.php",
            method: "POST",
            data: {idPS:idPS},
            dataType: "JSON",
            success: function(data){
                $("#edit_idPS").val(idPS);
                $("#edit_productPS").val(data.product_id);
                $("#edit_specPS").val(data.kd_spec);
                CKEDITOR.instances["edit_dscPS"].setData(data.dsc);
            }
        });
        $('#edit_product_spec').modal('show');
    });
    $(document).on('click','#getPT',function(){
        var idPT = $(this).data('id');
        $.ajax({
            url: "ajax/edit_data.php",
            method: "POST",
            data: {idPT:idPT},
            dataType: "JSON",
            success: function(data){
                $("#edit_idPT").val(idPT);
                $("#edit_productPT").val(data.product_id);
                $("#edit_toolPT").val(data.tool);
                $("#old_imgPT").val(data.images);
                $("#load_edit_imgPT").attr("src","images/product/"+data.nama+"/"+data.images);
                CKEDITOR.instances["edit_judulPT"].setData(data.judul);
                $("#edit_desPT").val(data.dsc);
            }
        });
        $('#edit_product_tool').modal('show');
    });
    $(document).on('click','#getNL',function(){
        var idNL = $(this).data('id');
        $.ajax({
            url: "ajax/edit_data.php",
            method: "POST",
            data: {idNL:idNL},
            dataType: "JSON",
            success: function(data){
                $("#edit_idNL").val(data.idNL);
                $("#old_imgNL").val(data.gambar);
                $("#load_edit_imgNL").attr("src","images/news/"+data.gambar);
                $("#edit_cabangNL").val(data.cabang);
                $("#edit_judulNL").val(data.judul);
                CKEDITOR.instances["edit_contentNL"].setData(data.isi); 
            }
        });
        $('#edit_news_list').modal('show');
    });
    $(document).on('click','#getCS',function(){
        var idCS = $(this).data('id');
        $.ajax({
            url: "ajax/edit_data.php",
            method: "POST",
            data: {idCS:idCS},
            dataType: "JSON",
            success: function(data){
                $("#edit_idCS").val(data.id);
                $("#edit_sortCS").val(data.sort);
                $("#edit_kdcabCS").val(data.kdcab);
                $("#edit_cabangCS").val(data.cabang);
                $("#edit_namaCS").val(data.nama);
                $("#edit_emailCS").val(data.email);
                $("#edit_ccCS").val(data.cc);
            }
        });
        $('#edit_contact_service').modal('show');
    });
    $(document).on('click','#getCP',function(){
        var idCP = $(this).data('id');
        $.ajax({
            url: "ajax/edit_data.php",
            method: "POST",
            data: {idCP:idCP},
            dataType: "JSON",
            success: function(data){
                $("#edit_idCP").val(data.id);
                $("#edit_kdcabCP").val(data.kdcab);
                $("#edit_namaCP").val(data.nama);
                $("#edit_emailCP").val(data.email);
            }
        });
        $('#edit_contact_penawaran').modal('show');
    });
});