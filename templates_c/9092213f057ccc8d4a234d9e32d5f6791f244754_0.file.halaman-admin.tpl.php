<?php
/* Smarty version 3.1.33, created on 2020-12-03 10:04:26
  from 'D:\xampp1\htdocs\NewWeb\smarty version\templates\halaman-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5fc855baba7b33_61610442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9092213f057ccc8d4a234d9e32d5f6791f244754' => 
    array (
      0 => 'D:\\xampp1\\htdocs\\NewWeb\\smarty version\\templates\\halaman-admin.tpl',
      1 => 1606964474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc855baba7b33_61610442 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
css/bootstrap.min.css">
    
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
</head>

<body id="page-top">    
    <input type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
' id="_url">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
" id="id_user">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['kdcab']->value;?>
" id="kdcab">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['role']->value;?>
" id="role">
    
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
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action32" id="frame_action32" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action32" id="frame_action32" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action33" id="frame_action33" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action33" id="frame_action33" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="edit_manage_user" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit User</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="edit_action.php" method="post" target="frame_action30" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <input type="hidden" name="edit_idMU" id="edit_idMU">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_nameMU" class="bold">Nama</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_nameMU" class="form-control form-control-sm w-100" id="edit_nameMU" placeholder="Nama" maxlength="30" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_usernameMU" class="bold">Username</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_usernameMU" class="form-control form-control-sm w-100" id="edit_usernameMU" placeholder="Username" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_cabangMU" class="bold">Cabang</label>    
                                </div>
                                <div class="col-md-8">
                                    <select name="edit_cabangMU" class="form-control form-control-sm w-100" id="edit_cabangMU" required>
                                        <option value="" disabled selected>-- Pilih Cabang --</option>
                                        <option value="ALL">ALL</option>
                                        <option value="DFL">Default</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_roleMU" class="bold">Role</label>   
                                </div>
                                <div class="col-md-8">
                                    <select name="edit_roleMU" class="form-control form-control-sm w-100" id="edit_roleMU" required>
                                        <option value="" disabled selected>-- Pilih Role --</option>
                                        <option value="1">admin</option>
                                        <option value="2">user</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action30" id="frame_action30" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action30" id="frame_action30" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_manage_userRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit User</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_manage_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete User</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action31">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin menghapus ?</label>    
                                        <input type="hidden" id="del_idMU" name="del_idMU">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action31" id="frame_action31" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action31" id="frame_action31" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_manage_userRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete User</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_about_us" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add About Us</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="add_action.php" method="post" target="frame_action21" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_titleAU" class="bold">Judul</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_titleAU" class="form-control form-control-sm w-100" id="add_titleAU" placeholder="Judul" maxlength="20" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_subAU" class="bold">Subjudul</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_subAU" class="form-control form-control-sm w-100" id="add_subAU" placeholder="Subjudul" maxlength="20" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <label for="add_contentAU" class="bold">Konten</label>    
                                    <textarea name="add_contentAU" id="add_contentAU" rows="10" cols="80" required>
                                    </textarea>
                                    <?php echo '<script'; ?>
>   
                                        CKEDITOR.replace('add_contentAU');
                                    <?php echo '</script'; ?>
>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_statusAU" class="bold">Status</label>   
                                </div>
                                <div class="col-md-8">
                                    <select name="add_statusAU" class="form-control form-control-sm w-100" id="add_statusAU" required>
                                        <option value="" disabled selected>-- Pilih Status --</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action21" id="frame_action21" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action21" id="frame_action21" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_about_usRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add About Us</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_about_us" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit About Us</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="edit_action.php" method="post" target="frame_action22" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <input type="hidden" name="edit_idAU" id="edit_idAU">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_titleAU" class="bold">Judul</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_titleAU" class="form-control form-control-sm w-100" id="edit_titleAU" placeholder="Judul" maxlength="20" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_subAU" class="bold">Subjudul</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_subAU" class="form-control form-control-sm w-100" id="edit_subAU" placeholder="Subjudul" maxlength="20" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <label for="edit_contentAU" class="bold">Konten</label>    
                                    <textarea name="edit_contentAU" id="edit_contentAU" rows="10" cols="80" required>
                                    </textarea>
                                    <?php echo '<script'; ?>
>   
                                        CKEDITOR.replace('edit_contentAU');
                                    <?php echo '</script'; ?>
>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_statusAU" class="bold">Status</label>   
                                </div>
                                <div class="col-md-8">
                                    <select name="edit_statusAU" class="form-control form-control-sm w-100" id="edit_statusAU" required>
                                        <option value="" disabled selected>-- Pilih Status --</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action22" id="frame_action22" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action22" id="frame_action22" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_about_usRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit About Us</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_about_us" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete About Us</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action23">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin menghapus ?</label>    
                                        <input type="hidden" id="del_idAU" name="del_idAU">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action23" id="frame_action23" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action23" id="frame_action23" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_about_usRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete About Us</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_announcement" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Announcement</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="add_action.php" method="post" target="frame_action27" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_contentAN" class="bold">Konten</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_contentAN" class="form-control form-control-sm w-100" id="add_contentAN" placeholder="Konten" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_statusAN" class="bold">Status</label>   
                                </div>
                                <div class="col-md-8">
                                    <select name="add_statusAN" class="form-control form-control-sm w-100" id="add_statusAN" required>
                                        <option value="" disabled selected>-- Pilih Status --</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action27" id="frame_action27" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action27" id="frame_action27" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_announcementRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Announcement</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_announcement" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Announcement</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="edit_action.php" method="post" target="frame_action28" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <input type="hidden" name="edit_idAN" id="edit_idAN">
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_contentAN" class="bold">Konten</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_contentAN" class="form-control form-control-sm w-100" id="edit_contentAN" placeholder="Konten" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_statusAN" class="bold">Status</label>   
                                </div>
                                <div class="col-md-8">
                                    <select name="edit_statusAN" class="form-control form-control-sm w-100" id="edit_statusAN" required>
                                        <option value="" disabled selected>-- Pilih Status --</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action28" id="frame_action28" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action28" id="frame_action28" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_announcementRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Announcement</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_announcement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Announcement</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action29">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin menghapus ?</label>    
                                        <input type="hidden" id="del_idAN" name="del_idAN">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action29" id="frame_action29" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action29" id="frame_action29" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_announcementRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h3 class="text-light">Delete Announcement</h3>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_dealer" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Dealer</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="add_action.php" method="post" target="frame_action24" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">

                            <div class="row mb-2">
                                 <div class="col-md-4">
                                    <label for="add_kdcabDL" class="bold">Kode Cabang</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_kdcabDL" class="form-control form-control-sm w-100 text-uppercase" id="add_kdcabDL" placeholder="Kode Cabang" maxlength="3" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_cabangDL">Nama Cabang</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_cabangDL" class="form-control form-control-sm w-100" id="add_cabangDL" placeholder="Nama Cabang" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_alamatDL">Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_alamatDL" class="form-control form-control-sm w-100" id="add_alamatDL" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_noshDL">No Showroom</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_noshDL" class="form-control form-control-sm w-100" id="add_noshDL" placeholder="No Showroom" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_nosvDL">No Service</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_nosvDL" class="form-control form-control-sm w-100" id="add_nosvDL" placeholder="No Service" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_layananDL">Layanan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_layananDL" class="form-control form-control-sm w-100" id="add_layananDL" placeholder="Layanan" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_mapsDL">Google Map</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="add_mapsDL" class="form-control form-control-sm w-100" id="add_mapsDL" placeholder="Google Map" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="add_statusDL">Status</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="add_statusDL" class="form-control form-control-sm w-100" id="add_statusDL" required>
                                        <option value="" disabled selected>-- Pilih Status --</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <label for="add_infoDL" class="bold">Info</label>    
                                    <textarea name="add_infoDL" id="add_infoDL" rows="10" cols="80" required>
                                    </textarea>
                                    <?php echo '<script'; ?>
>   
                                        CKEDITOR.replace('add_infoDL');
                                    <?php echo '</script'; ?>
>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action24" id="frame_action24" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action24" id="frame_action24" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_dealerRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Dealer</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_dealer" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Dealer</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="edit_action.php" method="post" target="frame_action25" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="container">
                            <input type="hidden" name="edit_idDL" id="edit_idDL">
                            <div class="row mb-2">
                                 <div class="col-md-4">
                                    <label for="edit_sortDL" class="bold">Sort</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="edit_sortDL" class="form-control form-control-sm w-100" id="edit_sortDL" placeholder="Sort" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-2">
                                 <div class="col-md-4">
                                    <label for="edit_kdcabDL" class="bold">Kode Cabang</label>    
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_kdcabDL" class="form-control form-control-sm w-100 text-uppercase" id="edit_kdcabDL" placeholder="Kode Cabang" required readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_cabangDL">Nama Cabang</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_cabangDL" class="form-control form-control-sm w-100" id="edit_cabangDL" placeholder="Nama Cabang" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_alamatDL">Alamat</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_alamatDL" class="form-control form-control-sm w-100" id="edit_alamatDL" placeholder="Alamat" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_noshDL">No Showroom</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_noshDL" class="form-control form-control-sm w-100" id="edit_noshDL" placeholder="No Showroom" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_nosvDL">No Service</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_nosvDL" class="form-control form-control-sm w-100" id="edit_nosvDL" placeholder="No Service" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_layananDL">Layanan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_layananDL" class="form-control form-control-sm w-100" id="edit_layananDL" placeholder="Layanan" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_mapsDL">Google Map</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="edit_mapsDL" class="form-control form-control-sm w-100" id="edit_mapsDL" placeholder="Google Map" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="edit_statusDL">Status</label>
                                </div>
                                <div class="col-md-8">
                                    <select name="edit_statusDL" class="form-control form-control-sm w-100" id="edit_statusDL" required>
                                        <option value="" disabled selected>-- Pilih Status --</option>
                                        <option value="Show">Show</option>
                                        <option value="Hide">Hide</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-12">
                                    <label for="edit_infoDL" class="bold">Info</label>    
                                    <textarea name="edit_infoDL" id="edit_infoDL" rows="10" cols="80" required>
                                    </textarea>
                                    <?php echo '<script'; ?>
>   
                                        CKEDITOR.replace('edit_infoDL');
                                    <?php echo '</script'; ?>
>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                            <iframe name="frame_action25" id="frame_action25" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                        <?php } else { ?>
                            <iframe name="frame_action25" id="frame_action25" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                        <?php }?>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_dealerRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Dealer</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_dealer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Dealer</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action26">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin menghapus ?</label>    
                                        <input type="hidden" id="del_idDL" name="del_idDL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action26" id="frame_action26" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action26" id="frame_action26" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_dealerRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Dealer</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Slideshow</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="titleHS" class="bold">Judul</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="titleHS" class="form-control form-control-sm w-100" id="titleHS" placeholder="Judul" maxlength="30" required autofocus>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="imgHS" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="imgHS" id="imgHS" onchange="readURL(this,'load_imgADD')" required>
                                        <img src="" id="load_imgADD" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="statusHS" class="bold">Status</label>   
                                    </div>
                                    <div class="col-md-8">
                                        <select name="statusHS" class="form-control form-control-sm w-100" id="statusHS" required>
                                            <option value="" disabled selected>-- Pilih Status --</option>
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action" id="frame_action" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action" id="frame_action" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_dataRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Slideshow</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Slideshow</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" target="frame_action2" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" id="edit_idHS" name="edit_idHS">
                                <input type="hidden" id="old_img" name="old_img">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_sortHS">Sort</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" name="edit_sortHS"  class="form-control form-control-sm w-100" id="edit_sortHS" placeholder="Sort">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_titleHS" class="bold">Judul</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="edit_titleHS" class="form-control form-control-sm w-100" id="edit_titleHS" placeholder="Judul" maxlength="30" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_imgHS" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_imgHS" id="edit_imgHS" onchange="readURL(this,'load_edit_imgHS')">
                                        <img src="" alt="" id="load_edit_imgHS" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_statusHS" class="bold">Status</label>   
                                    </div>
                                    <div class="col-md-8">
                                        <select name="edit_statusHS" class="form-control form-control-sm w-100" id="edit_statusHS" required>
                                            <option value="" disabled>-- Pilih Status --</option>
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action2" id="frame_action2" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action2" id="frame_action2" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_dataRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Slideshow</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action3">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin menghapus ?</label>    
                                        <input type="hidden" id="del_idHS" name="del_idHS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action3" id="frame_action3" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action3" id="frame_action3" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_dataRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Slideshow</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_dealerPL">Dealer</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control form-control-sm w-100" name="add_dealerPL" id="add_dealerPL" required autofocus>
                                            <option value="">-- Pilih Cabang --</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
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
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('add_contentPL');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_statusPL" class="bold">Status</label>   
                                    </div>
                                    <div class="col-md-8">
                                        <select name="add_statusPL" class="form-control form-control-sm w-100" id="add_statusPL" required>
                                            <option value="" disabled selected>-- Pilih Status --</option>
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action4" id="frame_action4" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action4" id="frame_action4" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_dealerPL">Dealer</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control form-control-sm w-100" name="edit_dealerPL" id="edit_dealerPL">
                                            <option value="">-- Pilih Cabang --</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
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
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('edit_contentPL');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_statusPL" class="bold">Status</label>   
                                    </div>
                                    <div class="col-md-8">
                                        <select name="edit_statusPL" class="form-control form-control-sm w-100" id="edit_statusPL" required>
                                            <option value="" disabled>-- Pilih Status --</option>
                                            <option value="Show">Show</option>
                                            <option value="Hide">Hide</option>
                                            <option value="Pend">Pending</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action6" id="frame_action6" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action6" id="frame_action6" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action5" id="frame_action5" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action5" id="frame_action5" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_product_main" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Main</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action7" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_idPM">Id</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_idPM" id="add_idPM" placeholder="Id" maxlength="4" required autofocus>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_imgPM" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="add_imgPM" id="add_imgPM" onchange="readURL(this,'load_imgPM')" required>
                                        <img src="" id="load_imgPM" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_namePM">Nama</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_namePM" id="add_namePM" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_pricePM">Harga</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control form-control-sm w-100" name="add_pricePM" id="add_pricePM" placeholder="Harga" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_seatersPM">Seaters</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control form-control-sm w-100" name="add_seatersPM" id="add_seatersPM" placeholder="Seaters" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_brosurPM" class="bold">Brosur</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="add_brosurPM" id="add_brosurPM" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action7" id="frame_action7" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action7" id="frame_action7" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_product_mainRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Main</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_product_main" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Main</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action8" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" id="old_idPM" name="old_idPM">
                                <input type="hidden" id="old_imgPM" name="old_imgPM">
                                <input type="hidden" id="old_brosurPM" name="old_brosurPM">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_idPM">Id</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_idPM" id="edit_idPM" placeholder="Id" maxlength="4" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_imgPM" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_imgPM" id="edit_imgPM" onchange="readURL(this,'load_edit_imgPM')">
                                        <img src="" id="load_edit_imgPM" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_namePM">Nama</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_namePM" id="edit_namePM" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_pricePM">Harga</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control form-control-sm w-100" name="edit_pricePM" id="edit_pricePM" placeholder="Harga" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_seatersPM">Seaters</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control form-control-sm w-100" name="edit_seatersPM" id="edit_seatersPM" placeholder="Seaters" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_brosurPM" class="bold">Brosur</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_brosurPM" id="edit_brosurPM">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action8" id="frame_action8" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action8" id="frame_action8" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_product_mainRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Main</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_product_main" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Main</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action9">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idPM" name="del_idPM">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action9" id="frame_action9" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action9" id="frame_action9" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_product_mainRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Main</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_product_banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Banner</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action39" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" class="form-control form-control-sm w-100" name="add_idPB" id="add_idPB">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_jbannerPB" class="bold">Jenis Banner</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <select name="add_jbannerPB" id="add_jbannerPB" class="form-control form-control-sm w-100" required autofocus>
                                            <option value="" disabled selected>-- Pilih Jenis Banner --</option>
                                            <option value="b_top">Banner Top</option>
                                            <option value="b_int">Banner Interior</option>
                                            <option value="b_ext">Banner Exterior</option>
                                            <option value="b_col">Banner Colour</option>
                                            <option value="b_prf">Banner Performance</option>
                                            <option value="b_sft">Banner Safety</option>
                                            <option value="b_var">Banner Variant</option>
                                            <option value="b_mnu">Logo Produk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_bannerPB" class="bold">Banner </label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="add_imgPB" id="add_imgPB" onchange="readURL(this,'load_imgPB')" required>
                                        <img src="" id="load_imgPB" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action39" id="frame_action39" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action39" id="frame_action39" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_product_bannerRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Banner</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_product_banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Banner</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action41" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" class="form-control form-control-sm w-100" name="edit_idPB" id="edit_idPB">
                                <input type="hidden" class="form-control form-control-sm w-100" id="old_imgPB" name="old_imgPB">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_jbannerPB" class="bold">Jenis Banner</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <select name="edit_jbannerPB" id="edit_jbannerPB" class="form-control form-control-sm w-100" required autofocus>
                                            <option value="" disabled selected>-- Pilih Jenis Banner --</option>
                                            <option value="b_top">Banner Top</option>
                                            <option value="b_int">Banner Interior</option>
                                            <option value="b_ext">Banner Exterior</option>
                                            <option value="b_col">Banner Colour</option>
                                            <option value="b_prf">Banner Performance</option>
                                            <option value="b_sft">Banner Safety</option>
                                            <option value="b_var">Banner Variant</option>
                                            <option value="b_mnu">Logo Produk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_imgPB" class="bold">Banner </label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_imgPB" id="edit_imgPB" onchange="readURL(this,'load_edit_imgPB')">
                                        <img src="" id="load_edit_imgPB" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action41" id="frame_action41" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action41" id="frame_action41" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_product_bannerRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Banner</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="delete_product_banner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Banner</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action40">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idPB" name="del_idPB">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action40" id="frame_action40" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action40" id="frame_action40" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_product_bannerRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_product_color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action36" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" class="form-control form-control-sm w-100" name="add_idPC" id="add_idPC">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_nwarnaPC" class="bold">Nama Warna </label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_nwarnaPC" id="add_nwarnaPC" required autofocus>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_warnaPC" class="bold">Warna </label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="color" name="add_warnaPC" id="add_warnaPC" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action36" id="frame_action36" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action36" id="frame_action36" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_product_colorRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_product_color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action37" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" class="form-control form-control-sm w-100" name="edit_idPC" id="edit_idPC">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_nwarnaPC" class="bold">Nama Warna </label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_nwarnaPC" id="edit_nwarnaPC" required autofocus>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_warnaPC" class="bold">Warna </label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="color" name="edit_warnaPC" id="edit_warnaPC" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action37" id="frame_action37" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action37" id="frame_action37" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_product_colorRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_product_color" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action38">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idPC" name="del_idPC">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action38" id="frame_action38" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action38" id="frame_action38" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_product_colorRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Color</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_product_price" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Price</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action16" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                               <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_idPP" class="bold">Kode Cabang</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_idPP" id="add_idPP" required autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action16" id="frame_action16" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action16" id="frame_action16" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_product_priceRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Price</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action16" id="frame_action16" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action16" id="frame_action16" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_product_spec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Specification</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action45" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                               <input type="hidden" class="form-control form-control-sm w-100" name="add_productPS" id="add_productPS" required>
                               <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_specPS" class="bold">Specification</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <select name="add_specPS" id="add_specPS" class="form-control form-control-sm w-100" required>
                                            <option value="" disabled selected>-- Pilih Specification --</option>
                                            <option value="dms">Dimensi</option>
                                            <option value="msn">Mesin</option>
                                            <option value="trm">Transmisi</option>
                                            <option value="skm">Sistem Kemudi</option>
                                            <option value="spm">Sistem Pengereman</option>
                                            <option value="sps">Suspensi</option>
                                            <option value="dms">Ban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label for="add_dscPS" class="bold">Deskripsi</label>
                                        <textarea name="add_dscPS" id="add_dscPS" rows="10" cols="80" required>
                                        </textarea>
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('add_dscPS');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action45" id="frame_action45" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action45" id="frame_action45" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_product_specRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Specification</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_product_spec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Specification</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action46" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                               <input type="hidden" class="form-control form-control-sm w-100" name="edit_idPS" id="edit_idPS" required>
                               <input type="hidden" class="form-control form-control-sm w-100" name="edit_productPS" id="edit_productPS" required>
                               <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_specPS" class="bold">Specification</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <select name="edit_specPS" id="edit_specPS" class="form-control form-control-sm w-100" required readonly>
                                            <option value="" disabled selected>-- Pilih Specification --</option>
                                            <option value="dms">Dimensi</option>
                                            <option value="msn">Mesin</option>
                                            <option value="trm">Transmisi</option>
                                            <option value="skm">Sistem Kemudi</option>
                                            <option value="spm">Sistem Pengereman</option>
                                            <option value="sps">Suspensi</option>
                                            <option value="dms">Ban</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label for="edit_dscPS" class="bold">Deskripsi</label>
                                        <textarea name="edit_dscPS" id="edit_dscPS" rows="10" cols="80" required>
                                        </textarea>
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('edit_dscPS');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action46" id="frame_action46" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action46" id="frame_action46" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_product_specRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Specification</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="add_product_tool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Tool</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action42" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                               <input type="hidden" class="form-control form-control-sm w-100" name="add_productPT" id="add_productPT" required>
                               <input type="hidden" class="form-control form-control-sm w-100" name="add_toolPT" id="add_toolPT" required>
                               <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_imgPT" class="bold">Gambar</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="add_imgPT" id="add_imgPT" onchange="readURL(this,'load_imgPT')" required autofocus>
                                        <img src="" id="load_imgPT" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_judulPT" class="bold">Judul</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="add_judulPT" id="add_judulPT" rows="10" cols="80" required>
                                        </textarea>
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('add_judulPT');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_desPT" class="bold">Deskripsi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control form-control-sm w-100" id="add_desPT" name="add_desPT" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action42" id="frame_action42" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action42" id="frame_action42" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_product_toolRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Tool</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_product_tool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Product Tool</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action44" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                               <input type="hidden" class="form-control form-control-sm w-100" name="edit_idPT" id="edit_idPT">
                               <input type="hidden" class="form-control form-control-sm w-100" name="edit_productPT" id="edit_productPT">
                               <input type="hidden" class="form-control form-control-sm w-100" name="edit_toolPT" id="edit_toolPT" required>
                               <input type="hidden" id="old_imgPT" name="old_imgPT">
                               <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_imgPT" class="bold">Gambar</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_imgPT" id="edit_imgPT" onchange="readURL(this,'load_edit_imgPT')" autofocus>
                                        <img src="" id="load_edit_imgPT" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_judulPT" class="bold">Judul</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="edit_judulPT" id="edit_judulPT" rows="10" cols="80" required>
                                        </textarea>
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('edit_judulPT');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_desPT" class="bold">Deskripsi</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea class="form-control form-control-sm w-100" id="edit_desPT" name="edit_desPT" rows="10" cols="80"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action44" id="frame_action44" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action44" id="frame_action44" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_product_toolRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Product Tool</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_product_spec" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Specification</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action47">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idPS" name="del_idPS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action47" id="frame_action47" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action47" id="frame_action47" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_product_specRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Specification</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_product_tool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Tool</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action43">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idPT" name="del_idPT">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action43" id="frame_action43" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action43" id="frame_action43" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_product_toolRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Product Tool</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_news_list" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add News List</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action18" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_cabangNL">Cabang</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control form-control-sm w-100" name="add_cabangNL" id="add_cabangNL" required autofocus>
                                            <option value="" disabled selected>-- Pilih Cabang --</option>
                                            <option value="ALL">ALL</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_judulNL" class="bold">Judul</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_judulNL" id="add_judulNL" required maxlength="50" placeholder="Judul">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_imgNL" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="add_imgNL" id="add_imgNL" onchange="readURL(this,'load_imgNL')" required>
                                        <img src="" id="load_imgNL" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label for="add_contentNL" class="bold">Konten</label>    
                                        <textarea name="add_contentNL" id="add_contentNL" rows="10" cols="80" required>
                                        </textarea>
                                        <?php echo '<script'; ?>
>   
                                            CKEDITOR.replace('add_contentNL');
                                        <?php echo '</script'; ?>
>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action18" id="frame_action18" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action18" id="frame_action18" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_news_listRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add News List</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_news_list" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit News List</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action19" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" name="edit_idNL" id="edit_idNL">
                                <input type="hidden" id="old_imgNL" name="old_imgNL">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_cabangNL">Cabang</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control form-control-sm w-100" name="edit_cabangNL" id="edit_cabangNL" required autofocus>
                                            <option value="" disabled selected>-- Pilih Cabang --</option>
                                            <option value="ALL">ALL</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dealer']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['kdcab'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cabang'];?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>                                    
                                </div>
                               <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_judulNL" class="bold">Judul</label> 
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_judulNL" id="edit_judulNL" required maxlength="50" placeholder="Judul">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_imgNL" class="bold">Gambar</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="file" name="edit_imgNL" id="edit_imgNL" onchange="readURL(this,'load_edit_imgNL')">
                                        <img src="" id="load_edit_imgNL" alt="" class="w-100 mt-2">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                       <div class="col-md-12">
                                       <label for="edit_contentNL" class="bold">Konten</label>    
                                        <textarea name="edit_contentNL" id="edit_contentNL" rows="10" cols="80" required>
                                        </textarea>
                                        <?php echo '<script'; ?>
>
                                            CKEDITOR.replace('edit_contentNL');
                                        <?php echo '</script'; ?>
>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action19" id="frame_action19" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action19" id="frame_action19" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_news_listRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit News List</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_news_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete News List</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action20">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idNL" name="del_idNL">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action20" id="frame_action20" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action20" id="frame_action20" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_news_listRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete News List</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="add_contact_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Contact Service</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action10" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_kdcabCS" class="bold">Kode Cabang</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100 text-uppercase" name="add_kdcabCS" id="add_kdcabCS" placeholder="Kode Cabang" maxlength="3" required autofocus>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_cabangCS">Nama Cabang</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_cabangCS" id="add_cabangCS" placeholder="Nama Cabang" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_namaCS">Nama PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_namaCS" id="add_namaCS" placeholder="Nama PIC" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_emailCS">Email PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-sm w-100" name="add_emailCS" id="add_emailCS" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_ccCS" class="bold">CC</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-sm w-100" name="add_ccCS" id="add_ccCS" placeholder="CC">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action10" id="frame_action10" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action10" id="frame_action10" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_contact_serviceRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Contact Service</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_contact_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Contact Service</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action11" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" name="edit_idCS" id="edit_idCS">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_sortCS" class="bold">Sort</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_sortCS" id="edit_sortCS" placeholder="Sort" maxlength="3" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_kdcabCS" class="bold">Kode Cabang</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100 text-uppercase" name="edit_kdcabCS" id="edit_kdcabCS" placeholder="Kode Cabang" maxlength="3" required readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_cabangCS">Nama Cabang</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_cabangCS" id="edit_cabangCS" placeholder="Nama Cabang" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_namaCS">Nama PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_namaCS" id="edit_namaCS" placeholder="Nama PIC" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_emailCS">Email PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-sm w-100" name="edit_emailCS" id="edit_emailCS" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_ccCS" class="bold">CC</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-sm w-100" name="edit_ccCS" id="edit_ccCS" placeholder="CC">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action11" id="frame_action11" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action11" id="frame_action11" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_contact_serviceRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Contact Service</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_contact_service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Contact Service</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action12">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idCS" name="del_idCS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action12" id="frame_action12" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action12" id="frame_action12" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_contact_serviceRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Contact Service</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="view_data_cu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">View List Contact Us</h5>
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
                                    <label for="view_namaCU">Nama</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_namaCU" id="view_namaCU" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_nohpCU">No. Handphone</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_nohpCU" id="view_nohpCU" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_emailCU">Email</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_emailCU" id="view_emailCU" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_jkCU">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_jkCU" id="view_jkCU" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_kotaCU">Kota</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_kotaCU" id="view_kotaCU" readonly>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_psnCU">Permasalahan</label>
                                </div>
                                <div class="col-md-8">
                                    <textarea class="form-control form-control-sm w-100" name="view_psnCU" id="view_psnCU" rows="5" readonly></textarea>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-4">
                                    <label for="view_tsCU">Time Stamp</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control form-control-sm w-100" name="view_tsCU" id="view_tsCU" readonly>
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
    
        <div class="modal fade" id="add_contact_penawaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Contact Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="add_action.php" method="post" target="frame_action13" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_kdcabCP" class="bold">Kode Cabang</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100 text-uppercase" name="add_kdcabCP" id="add_kdcabCP" placeholder="Kode Cabang" maxlength="3" required autofocus>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_namaCP">Nama PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="add_namaCP" id="add_namaCP" placeholder="Nama PIC" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="add_emailCP">Email PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-sm w-100" name="add_emailCP" id="add_emailCP" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action13" id="frame_action13" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action13" id="frame_action13" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_contact_penawaranRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Add Contact Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
                                <h5>Data berhasil ditambahkan.</h5>
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
    
        <div class="modal fade" id="edit_contact_penawaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Contact Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="edit_action.php" method="post" target="frame_action14" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container">
                                <input type="hidden" name="edit_idCP" id="edit_idCP">
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_kdcabCP" class="bold">Kode Cabang</label>    
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100 text-uppercase" name="edit_kdcabCP" id="edit_kdcabCP" placeholder="Kode Cabang" maxlength="3" required readonly>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_namaCP">Nama PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control form-control-sm w-100" name="edit_namaCP" id="edit_namaCP" placeholder="Nama PIC" required>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4">
                                        <label for="edit_emailCP">Email PIC</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control form-control-sm w-100" name="edit_emailCP" id="edit_emailCP" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action14" id="frame_action14" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action14" id="frame_action14" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit_contact_penawaranRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Edit Contact Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
    
        <div class="modal fade" id="delete_contact_penawaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Contact Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="delete.php" method="post" target="frame_action15">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label class="bold">Apakah anda yakin ingin mengahapus ?</label>    
                                        <input type="hidden" id="del_idCP" name="del_idCP">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-primary">Ya</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action15" id="frame_action15" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action15" id="frame_action15" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="delete_contact_penawaranRes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <div class="modal-title">
                        <h5 class="text-light">Delete Contact Penawaran</h5>
                    </div>
                    <button type="button" class="close text-light" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['nama'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                        </div>
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action14" id="frame_action14" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action14" id="frame_action14" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
                        <?php $_smarty_tpl->_assignInScope('viewFrame', 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['viewFrame']->value == 1) {?> 
                                <iframe name="frame_action35" id="frame_action35" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="300" style="overflow:;border:1px red solid;" visibility="visible" scrolling="yes" frameborder="1"></iframe>
                            <?php } else { ?>
                                <iframe name="frame_action35" id="frame_action35" src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
kosong.php" width="100%" height="10" style="overflow:hidden;display: none;" scrolling="no" frameborder="0"></iframe>
                            <?php }?>
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
                                <img src="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
images/capella.png" alt="capella" class="d-block mx-auto" style="width: 15%;">
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
        <a class="navbar-brand mr-1" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
?ng=halaman-admin">Hi, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
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
                <a class="nav-link dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
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
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">User:</h6>
                    <a class="dropdown-item" href="#" id="manage_user">Manage User</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Home Screens:</h6>
                    <a class="dropdown-item" href="#" id="about_us">About Us</a>
                    <a class="dropdown-item" href="#" id="announcement">Announcement</a>
                    <a class="dropdown-item" href="#" id="dealer">Dealer</a>
                    <a class="dropdown-item" href="#" id="slideshow">Home Slideshow</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Promo:</h6>
                    <a class="dropdown-item" href="#" id="promo_list">Promo List</a>
                    <hr>
                    <h6 class="dropdown-header">Product:</h6>
                    <a class="dropdown-item" href="#" id="product_main">Product Main</a>
                    <a class="dropdown-item" href="#" id="product_banner">Product Banner</a>
                    <a class="dropdown-item" href="#" id="product_color">Product Color</a>
                    <a class="dropdown-item" href="#" id="product_price">Product Price</a>
                    <a class="dropdown-item" href="#" id="product_spec">Product Specification</a>
                    <a class="dropdown-item" href="#" id="product_tool">Product Tool</a>
                    <hr>
                    <h6 class="dropdown-header">News:</h6>
                    <a class="dropdown-item" href="#" id="news_list">News List</a>
                </div>
            </li>
            <li class="nav-item dropdown" id="nav-data">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Booking Service:</h6>
                    <a href="#" class="dropdown-item" id="contact_service">Contact Service</a>
                    <a class="dropdown-item" href="#" id="data_booking">List Booking Service</a>
                    <hr>
                    <h6 class="dropdown-header">Contact Us:</h6>
                    <a href="#" class="dropdown-item" id="contact_us">List Contact Us</a>
                    <hr>
                    <h6 class="dropdown-header">Penawaran:</h6>
                    <a class="dropdown-item" href="#" id="contact_penawaran">Contact Penawaran</a>
                    <a class="dropdown-item" href="#" id="data_penawaran">List Penawaran</a>
                    <hr>
                    <h6 class="dropdown-header">Test Drive:</h6>
                    <a class="dropdown-item" href="#" id="data_tdrive">List Test Drive</a>
                    <a class="dropdown-item" href="#" id="unit_tdrive">Unit Test Drive</a>
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
<!--
                <form action="">
                    <textarea name="editor2" id="editor2" rows="10" cols="80">
                    </textarea>
                    <?php echo '<script'; ?>
>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace('editor2');
                    <?php echo '</script'; ?>
>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-md mt-2 justify-content-end">Submit</button>
                    </div>
                </form>
-->
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
    <?php echo '<script'; ?>
 src="js/halaman-admin.js"><?php echo '</script'; ?>
>
    
    <!-- Bootstrap core JavaScript-->
    <?php echo '<script'; ?>
 src="vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

    <!-- Core plugin JavaScript-->
    <?php echo '<script'; ?>
 src="vendor/jquery-easing/jquery.easing.min.js"><?php echo '</script'; ?>
>

    <!-- Page level plugin JavaScript-->
    <?php echo '<script'; ?>
 src="vendor/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="vendor/datatables/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>

    <!-- Custom scripts for all pages-->
    <?php echo '<script'; ?>
 src="js/sb-admin.min.js"><?php echo '</script'; ?>
>

    <!-- Demo scripts for this page-->
<!--
    <?php echo '<script'; ?>
 src="js/demo/datatables-demo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/demo/chart-area-demo.js"><?php echo '</script'; ?>
>
-->
    
    <?php echo '<script'; ?>
 src="js/edit_data.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/view_data.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
