$(document).ready(function(){
    $("#cabang_td").on('change',function(){
        var value = $("#cabang_td").val();
        $.get("ajax/test-drive.php",{value:value},function(data){
            $("#mobil_td").prop('disabled',false);
            $("#mobil_td").html(data); 
        });
    });
});