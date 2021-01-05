$(document).ready(function(){
    $(document).on('click','#getDB',function(){
        var idDB = $(this).data('id');
        $.ajax({
            url: "ajax/view_data.php",
            method: "POST",
            data: {idDB:idDB},
            dataType: "JSON",
            success: function(data){
                $("#view_idDB").val(data.id);
                $("#view_namaDB").val(data.nama);
                $("#view_statDB").val(data.status);
                $("#view_kotaDB").val(data.kota);
                $("#view_nohpDB").val(data.no_hp);
                $("#view_emailDB").val(data.email);
                $("#view_nopolDB").val(data.no_pol);
                $("#view_modelDB").val(data.model);
                $("#view_tahunDB").val(data.tahun);
                $("#view_kmDB").val(data.km);
                $("#view_jsDB").val(data.jenis_servis);
                $("#view_tglDB").val(data.tanggal);
                $("#view_wktDB").val(data.waktu);
                $("#view_cabangDB").val(data.cabang);
                $("#view_prmDB").val(data.permasalahan);
                $("#view_tsDB").val(data.time_stamp);
            }
        });
        $('#view_data_booking').modal('show');
    });
    $(document).on('click','#getCU',function(){
        var idCU = $(this).data('id');
        $.ajax({
            url: "ajax/view_data.php",
            method: "POST",
            data: {idCU:idCU},
            dataType: "JSON",
            success: function(data){
                $("#view_namaCU").val(data.nama);
                $("#view_kotaCU").val(data.kota);
                $("#view_nohpCU").val(data.no_hp);
                $("#view_emailCU").val(data.email);
                $("#view_jkCU").val(data.jk);
                $("#view_psnCU").val(data.pesan);
                $("#view_tsCU").val(data.time_stamp);
            }
        });
        $('#view_data_cu').modal('show');
    });
    $(document).on('click','#getDP',function(){
        var idDP = $(this).data('id');
        $.ajax({
            url: "ajax/view_data.php",
            method: "POST",
            data: {idDP:idDP},
            dataType: "JSON",
            success: function(data){
                $("#view_namaDP").val(data.nama);
                $("#view_nohpDP").val(data.no_hp);
                $("#view_emailDP").val(data.email);
                $("#view_jkDP").val(data.jk);
                $("#view_kotaDP").val(data.kota);
                $("#view_cabangDP").val(data.cabang);
                $("#view_mobilDP").val(data.mobil);
                $("#view_tsDP").val(data.time_stamp);
            }
        });
        $('#view_data_penawaran').modal('show');
    });
    $(document).on('click','#getDT',function(){
        var idDT = $(this).data('id');
        $.ajax({
            url: "ajax/view_data.php",
            method: "POST",
            data: {idDT:idDT},
            dataType: "JSON",
            success: function(data){
                $("#view_idDT").val(data.id);
                $("#view_namaDT").val(data.nama);
                $("#view_nohpDT").val(data.no_hp);
                $("#view_emailDT").val(data.email);
                $("#view_kotaDT").val(data.kota);
                $("#view_cabangDT").val(data.cabang);
                $("#view_tglDT").val(data.tanggal);
                $("#view_wktDT").val(data.waktu);
                $("#view_mobilDT").val(data.mobil);
                $("#view_tsDT").val(data.time_stamp);
            }
        });
        $('#view_data_tdrive').modal('show');
    });
});