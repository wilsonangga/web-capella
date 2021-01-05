<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard | PT. Capella Medan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{$_url}css/bootstrap.min.css">
    
    <link rel="shortcut icon" href="{$_url}images/capella.png"/>
    <script src="{$_url}js/bootstrap.min.js"></script>
    <script src="{$_url}js/jquery.min.js"></script>
    <script src="{$_url}ckeditor/ckeditor.js"></script>
</head>

<body id="page-top">    
    <input type="hidden" value='{$_url}' id="_url">
    <input type="hidden" value="{$id_user}" id="id_user">
    <input type="hidden" value="{$kdcab}" id="kdcab">
    <input type="hidden" value="{$role}" id="role">
    
    {*MODAL EDIT PROFILE*}
    <div class="modal fade" id="edit_profile" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Profile</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="edit_action.php" method="post" target="frame_action32" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <input type="hidden" name="edit_idPF" id="edit_idPF">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_namePF" class="bold">Nama</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_namePF" class="form-control form-control-sm w-100" id="edit_namePF" placeholder="Nama" maxlength="30" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_usernamePF" class="bold">Username</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_usernamePF" class="form-control form-control-sm w-100" id="edit_usernamePF" placeholder="Username" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_cabangPF" class="bold">Cabang</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_cabangPF" class="form-control form-control-sm w-100" id="edit_cabangPF" required readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_rolePF" class="bold">Role</label>   
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_rolePF" class="form-control form-control-sm w-100" id="edit_rolePF" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    {assign var="viewFrame" value=0}
                        {if $viewFrame eq 1} 
                            <iframe name="frame_action32" id="frame_action32" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        {else}
                            <iframe name="frame_action32" id="frame_action32" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        {/if}
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_profileRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Profile</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil diubah.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL CHANGE PASSWORD*}
    <div class="modal fade" id="edit_profile_paswd" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Change Password</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="edit_action.php" method="post" target="frame_action33" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <input type="hidden" name="edit_idPSWD" id="edit_idPSWD">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_currPSWD" class="bold">Current Password</label>    
                                </div>
                                <div class="col-md-8">
                                   <!--                                    Hide-->
                                    <i class="fa fa-eye" style="position: absolute;right:26px;top:8px;display: none" id="show_curr" onclick="hidePass('edit_currPSWD',this,'hide_curr')"></i>
<!--                                    Show-->
                                    <i class="fa fa-eye-slash" style="position: absolute;right:25px;top:8px;" id="hide_curr" onclick="showPass('edit_currPSWD',this,'show_curr')"></i>
                                    <input type="password" name="edit_currPSWD" class="form-control form-control-sm w-100" id="edit_currPSWD" placeholder="Current Password" style="padding-right: 2rem!important" required autofocus>
                                    <div class="err edit_currPSWD text-danger"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_newPSWD" class="bold">New Password</label>    
                                </div>
                                <div class="col-md-8">
<!--                                    Hide-->
                                    <i class="fa fa-eye" style="position: absolute;right:26px;top:8px;display: none" id="show_new" onclick="hidePass('edit_newPSWD',this,'hide_new')"></i>
<!--                                    Show-->
                                    <i class="fa fa-eye-slash" style="position: absolute;right:25px;top:8px;" id="hide_new" onclick="showPass('edit_newPSWD',this,'show_new')"></i>
                                    <input type="password" name="edit_newPSWD" class="form-control form-control-sm w-100" id="edit_newPSWD" placeholder="New Password" style="padding-right: 2rem!important" required>
                                    <div class="err edit_newPSWD text-danger"></div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_repPSWD" class="bold">Repeat Password</label>    
                                </div>
                                <div class="col-md-8">
                                   <!--                                    Hide-->
                                    <i class="fa fa-eye" style="position: absolute;right:26px;top:8px;display: none" id="show_rep" onclick="hidePass('edit_repPSWD',this,'hide_rep')"></i>
<!--                                    Show-->
                                    <i class="fa fa-eye-slash" style="position: absolute;right:25px;top:8px;" id="hide_rep" onclick="showPass('edit_repPSWD',this,'show_rep')"></i>
                                    <input type="password" name="edit_repPSWD" class="form-control form-control-sm w-100" id="edit_repPSWD" placeholder="Repeat Password" style="padding-right: 2rem!important" required>
                                    <div class="err edit_repPSWD text-danger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    {assign var="viewFrame" value=0}
                        {if $viewFrame eq 1} 
                            <iframe name="frame_action33" id="frame_action33" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        {else}
                            <iframe name="frame_action33" id="frame_action33" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        {/if}
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_profile_paswdRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Change Password</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil diubah.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL TAMBAH DATA PL*}
    <div class="modal fade" id="add_promo_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Promo</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action4" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" name="add_dealerPL" id="add_dealerPL" value="{$kdcab}">
<!--
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_dealerPL">Dealer</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control form-control-sm w-100" name="add_dealerPL" id="add_dealerPL" required autofocus>
                                            <option value="">-- Pilih Cabang --</option>
                                            {foreach $dealer as $rows}
                                                <option value="{$rows.kdcab}">{$rows.cabang}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
-->
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_imgPL" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="add_imgPL" id="add_imgPL" onchange="readURL(this,'load_imgPL')" required>
                                        <img src="" id="load_imgPL" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_expPL">Expired</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control form-control-sm w-100" name="add_expPL" id="add_expPL" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_titlePL">Judul</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_titlePL" id="add_titlePL" placeholder="Judul" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_contentPL">Konten</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="add_contentPL" id="add_contentPL" rows="10" cols="80" placeholder="Konten" required>
                                        </textarea>
                                        <script>   
                                            CKEDITOR.replace('add_contentPL');
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        {assign var="viewFrame" value=0}
                            {if $viewFrame eq 1} 
                                <iframe name="frame_action4" id="frame_action4" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            {else}
                                <iframe name="frame_action4" id="frame_action4" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_promo_listRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Promo</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambakan.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL EDIT PL*}
    <div class="modal fade" id="edit_promo_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Promo</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" target="frame_action6" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" id="edit_idPL" name="edit_idPL">
                                <input type="hidden" id="old_imgPL" name="old_imgPL">
                                <input type="hidden" id="edit_dealerPL" name="edit_dealerPL">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_imgPL" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_imgPL" id="edit_imgPL" onchange="readURL(this,'load_edit_imgPL')">
                                        <img src="" id="load_edit_imgPL" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_expPL">Expired</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control form-control-sm w-100" name="edit_expPL" id="edit_expPL" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_titlePL">Judul</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_titlePL" id="edit_titlePL" placeholder="Judul" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_contentPL">Konten</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="edit_contentPL" id="edit_contentPL" rows="10" cols="80" placeholder="Konten" required>
                                        </textarea>
                                        <script>   
                                            CKEDITOR.replace('edit_contentPL');
                                        </script>
                                    </div>
                                </div>
                                <div class="row mb-2 d-none">
                                    <div class="col-md-4">
                                        <label for="edit_statusPL" class="bold">Status</label>   
                                    </div>
                                    <div class="col-md-8">
                                        <select name="edit_statusPL" class="form-control form-control-sm w-100" id="edit_statusPL" required>
                                            <option value="">-- Pilih Status --</option>
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                            <option value="Pend" hidden>Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        {assign var="viewFrame" value=0}
                            {if $viewFrame eq 1} 
                                <iframe name="frame_action6" id="frame_action6" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            {else}
                                <iframe name="frame_action6" id="frame_action6" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_promo_listRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Slideshow</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil diubah.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL HAPUS PL*}
    <div class="modal fade" id="delete_promo_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Promo</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action5">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idPL" name="del_idPL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        {assign var="viewFrame" value=0}
                            {if $viewFrame eq 1} 
                                <iframe name="frame_action5" id="frame_action5" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            {else}
                                <iframe name="frame_action5" id="frame_action5" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_promo_listRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Promo</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil dihapus.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL EDIT DATA PP*}
    <div class="modal fade" id="edit_product_price" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Price</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action16" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" id="edit_idPP" name="edit_idPP">
                                <input type="hidden" id="edit_pidPP" name="edit_pidPP">
                                <input type="hidden" id="edit_cabangPP" name="edit_cabangPP">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_namaPP" class="bold">Nama Produk</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <select name="edit_namaPP" id="edit_namaPP" class="form-control form-control-sm w-100" readonly>
                                            {foreach $product as $rows}
                                                <option value="{$rows.id}">{$rows.nama}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_tipePP" class="bold">Tipe Produk</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input name="edit_tipePP" id="edit_tipePP" class="form-control form-control-sm w-100" readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_hargaPP" class="bold" autofocus>Harga Produk</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input name="edit_hargaPP" id="edit_hargaPP" class="form-control form-control-sm w-100" placeholder="Harga Produk" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        {assign var="viewFrame" value=0}
                            {if $viewFrame eq 1} 
                                <iframe name="frame_action16" id="frame_action16" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            {else}
                                <iframe name="frame_action16" id="frame_action16" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_product_priceRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Price</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil diubah.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL VIEW DATA BOOKING*}
    <div class="modal fade" id="view_data_booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">View List Booking</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_idDB">Kode Booking</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_idDB" id="view_idDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_namaDB">Nama</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_namaDB" id="view_namaDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_statDB">Status</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_statDB" id="view_statDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_kotaDB">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_kotaDB" id="view_kotaDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_nohpDB">No. Handphone</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_nohpDB" id="view_nohpDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_emailDB">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_emailDB" id="view_emailDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_nopolDB">No. Polisi</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_nopolDB" id="view_nopolDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_modelDB">Model</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_modelDB" id="view_modelDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tahunDB">Tahun</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tahunDB" id="view_tahunDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_kmDB">Kilometer</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_kmDB" id="view_kmDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_jsDB">Jenis Servis</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_jsDB" id="view_jsDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tglDB">Tanggal</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tglDB" id="view_tglDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_wktDB">Waktu</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_wktDB" id="view_wktDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_cabangDB">Cabang</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_cabangDB" id="view_cabangDB" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_prmDB">Permasalahan</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control form-control-sm w-100" name="view_prmDB" id="view_prmDB" rows="5" readonly></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tsDB">Time Stamp</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tsDB" id="view_tsDB" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL VIEW DATA PENAWARAN*}
    <div class="modal fade" id="view_data_penawaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">View List Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_namaDP">Nama</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_namaDP" id="view_namaDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_nohpDP">No. Handphone</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_nohpDP" id="view_nohpDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_emailDP">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_emailDP" id="view_emailDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_jkDP">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_jkDP" id="view_jkDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_kotaDP">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_kotaDP" id="view_kotaDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_cabangDP">Cabang</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_cabangDP" id="view_cabangDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_mobilDP">Mobil</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_mobilDP" id="view_mobilDP" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tsDP">Time Stamp</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tsDP" id="view_tsDP" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL VIEW DATA TDRIVE*}
    <div class="modal fade" id="view_data_tdrive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">View List Test Drive</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_idDT">Kode Test Drive</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_idDT" id="view_idDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_namaDT">Nama</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_namaDT" id="view_namaDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_nohpDT">No. Handphone</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_nohpDT" id="view_nohpDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_emailDT">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_emailDT" id="view_emailDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_kotaDT">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_kotaDT" id="view_kotaDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_cabangDT">Cabang</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_cabangDT" id="view_cabangDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tglDT">Tanggal</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tglDT" id="view_tglDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_wktDT">Waktu</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_wktDT" id="view_wktDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_mobilDT">Mobil</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_mobilDT" id="view_mobilDT" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tsDT">Time Stamp</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tsDT" id="view_tsDT" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL TAMBAH UNIT TDRIVE*}
    <div class="modal fade" id="add_unit_tdrive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Unit Test Drive</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action14" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" name="add_cabangUT" id="add_cabangUT">
                                <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_idDT">Unit Test Drive</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control form-control-sm w-100" name="add_unitUT" id="add_unitUT">
                                        <option value="">-- PILIH UNIT --</option>
                                    {foreach $product as $rows}
                                        <option value="{$rows.id}">{$rows.nama}</option>
                                    {/foreach}
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        {assign var="viewFrame" value=0}
                            {if $viewFrame eq 1} 
                                <iframe name="frame_action14" id="frame_action14" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            {else}
                                <iframe name="frame_action14" id="frame_action14" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_unit_tdriveRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Unit Test Drive</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambah.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    {*MODAL HAPUS UNIT TDRIVE*}
    <div class="modal fade" id="delete_unit_tdrive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Unit Test Drive</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action35">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idUT" name="del_idUT">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        {assign var="viewFrame" value=0}
                            {if $viewFrame eq 1} 
                                <iframe name="frame_action35" id="frame_action35" src="{$_url}kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            {else}
                                <iframe name="frame_action35" id="frame_action35" src="{$_url}kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            {/if}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_unit_tdriveRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Unit Test Drive</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{$_url}images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil dihapus.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--NAVIGATION-->
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="{$_url}?ng=halaman-admin">Hi, {$name}</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                
            </div>
        </form>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
<!--
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                  <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                  <span class="badge badge-danger">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
-->
           <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="{$_url}">
                    <i class="fas fa-home"></i>
                </a>
            </li>
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="wrapper">
    
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active" id="nav-dashboard">
                <a class="nav-link" id="dashboard" style="cursor: pointer">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Promo:</h6>
                    <a class="dropdown-item" href="#" id="promo_list">Promo List</a>
                    {if $kdcab == "BDA" || $kdcab == "GT1" || $kdcab == "PDG" || $kdcab == "DRI" || $kdcab == "SDR"}
                        <hr>
                        <h6 class="dropdown-header">Product:</h6>
                        <a class="dropdown-item" href="#" id="product_price">Product Price</a>
                    {/if}
                </div>
            </li>
            <li class="nav-item dropdown" id="nav-data">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Booking Service:</h6>
                    <a class="dropdown-item" href="#" id="data_booking">List Booking Service</a>
                    {if $kdcab != 'AMP'}
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Penawaran:</h6>
                        <a class="dropdown-item" href="#" id="data_penawaran">List Penawaran</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Test Drive:</h6>
                        <a class="dropdown-item" href="#" id="data_tdrive">List Test Drive</a>
                        <a class="dropdown-item" href="#" id="unit_tdrive">Unit Test Drive</a>
                    {/if}
                </div>
            </li>
<!--
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
            </li>
-->
        </ul>

        <div id="content-wrapper">
            <div class="container-fluid">
                <div id="content-ajax">
                    &nbsp;
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© 2019 PT Capella Medan. All rights reserved</span>
                    </div>
                </div>
            </footer>
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="?ng=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!--    Ajax Javascript   -->
    <script src="js/halaman-admin.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
<!--
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
-->
    
    <script src="js/edit_data.js"></script>
    <script src="js/view_data.js"></script>
</body>

</html>
