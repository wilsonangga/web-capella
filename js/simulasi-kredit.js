$(document).ready(function(){
    $("#tipe_sk").on('change',function(){
        $("#hasil").val("");
        $("#angsuran").val("");
        $("#harga_sk").val("");
        var value = $('#tipe_sk').val();
        // $.get("ajax/simulasi-kredit.php", {value:value}, function(data){
        //     $("#variant_sk").prop('disabled', false);
        //     $("#variant_sk").html(data);
        // });
        $.ajax({
            url:"ajax/simulasi-kredit.php",
            method:"GET",
            data: {value:value},
            dataType:"JSON",
            success:function(data)
            {
                $("#variant_sk").prop('disabled', false);
                $("#variant_sk").html(data.isi);
                $("#mobil_sk img").attr("src","images/product/"+data.name+"/"+data.image);
            }
        });
    });
    $("#variant_sk").on('change',function(){
        $("#hasil").val("");
        $("#angsuran").val("");
        if($("#wilayah_sk").val() != ""){
            var wilayah = $("#wilayah_sk").val();
            var value = $('#tipe_sk').val();
            var variant = $("#variant_sk").val();
            if(variant == "")
                $.get("ajax/simulasi-kredit.php", {wilayah:wilayah,variant:variant,value:value}, function(data){
                    $("#harga_sk").val();
                });    
            else
                $.get("ajax/simulasi-kredit.php", {wilayah:wilayah,variant:variant,value:value}, function(data){
                    $("#harga_sk").val(data);
                });    
        }
    });
    $("#wilayah_sk").on('change',function(){
        $("#hasil").val("");
        $("#angsuran").val("");
        if($("#variant_sk").val() != "" && $("#tipe_sk").val() != ""){
            var wilayah = $("#wilayah_sk").val();
            var value = $('#tipe_sk').val();
            var variant = $('#variant_sk').val();
            $.get("ajax/simulasi-kredit.php", {wilayah:wilayah,variant:variant,value:value}, function(data){
                $("#harga_sk").val(data);
            });    
        }
    });
    $("#dp_sk").on('change',function(){
        $("#hasil").val("");
        $("#angsuran").val("");
    });
    $("#tenor_sk").on('change',function(){
        $("#hasil").val("");
        $("#angsuran").val("");
    });
    $("#submit_sk").on('click',function(e){
        e.preventDefault();
        var wilayahh = $("#wilayah_sk").val();
        var variantt = $('#variant_sk').val();
        var pid = $('#tipe_sk').val();
        var harga = $("#harga_sk").val();
        var dp = $("#dp_sk").val();
        var tenor = $("#tenor_sk").val();
        if(wilayahh == "" || variantt == "" || pid == "" || dp == "" || tenor == ""){
            (wilayahh=="")?$(".wilayah_sk").html("Wilayah wajib dipilih !"):$(".wilayah_sk").html("");
            (variantt=="")?$(".variant_sk").html("Variant wajib dipilih !"):$(".variant_sk").html("");
            (pid=="")?$(".tipe_sk").html("Tipe wajib dipilih !"):$(".tipe_sk").html("");
            (dp=="")?$(".dp_sk").html("DP wajib dipilih !"):$(".dp_sk").html("");
            (tenor=="")?$(".tenor_sk").html("Tenor wajib dipilih !"):$(".tenor_sk").html("");
        }
        else{
            $(".wilayah_sk").html("");
            $(".variant_sk").html("");
            $(".tipe_sk").html("");
            $(".dp_sk").html("");
            $(".tenor_sk").html("");
            $.ajax({
                url:"ajax/simulasi-kredit.php",
                method:"GET",
                data:{wilayahh:wilayahh,variantt:variantt,pid:pid,harga:harga,dp:dp,tenor:tenor},
                dataType:"JSON",
                success:function(data)
                {
                    $("#hasil").val(data.hasil);
                    $("#angsuran").val(data.angsuran);
                }
            });
        }
    });
});