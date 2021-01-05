$(document).ready(function(){
    var _url = $("#_url").val();
    $("#wilayah_promo").on('change',function(){
        var value = $("#wilayah_promo").val();
        $.post("ajax/promo-all.php",{value:value,_url:_url},function(data){
            $("#promo-all").html(data);
        });
    });
});