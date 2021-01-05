$(document).ready(function(){
    var _url = $("#_url").val();
    load_data();
    function load_data(content){
        $.post("ajax/page.php",{content:content,_url:_url},function(data){
            $('.content').html(data);
        });
    }
    $("#booking_service").click(function(){
        var content = "booking";  
        load_data(content);
    });
    $("#test_drive").click(function(){
        var content = "testdrive";
        load_data(content);
    });
    $("#contact_us").click(function(){
        var content = "contactus";
        load_data(content);
    });
    $("#s_kredit").click(function(){
        var content = "s_kredit";                       
        load_data(content);
    });
    
});