<?php
if(!$this->session->userdata('info_user')){
redirect('/');
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OfferMalls | Administrador</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?php echo base_url();?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">

    <!-- My CSS -->
    <link href="<?php echo base_url();?>css/css.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>dashboard">Super Administrador</a>
                <span class="text-muted small" style="padding-left:15px;">
                <?php 
                    $info_user=$this->session->userdata('info_user');
                    echo 'Bienvenido: '.$info_user['nombres'];
                ?>
                </span>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                        
                        <li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">                        
                        <li>
                            <a href="<?php echo base_url();?>dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>                                               
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Mantenimientos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo base_url();?>cargos">Cargos</a></li>
                                <li><a href="<?php echo base_url();?>categorias">Categorías</a></li>
                                <li><a href="<?php echo base_url();?>ccomerciales">Centros Comerciales</a></li>                                
                                <li><a href="<?php echo base_url();?>departamentos">Departamentos</a></li>
                                <li><a href="<?php echo base_url();?>eclientes">Estados de Clientes</a></li>
                                <li><a href="<?php echo base_url();?>eofertas">Estados de Ofertas</a></li>
                                <li><a href="<?php echo base_url();?>municipios">Municipios</a></li>
                                <li><a href="<?php echo base_url();?>subcategorias">Subcategorias</a></li>
                                <li><a href="<?php echo base_url();?>sucursales">Sucursales</a></li>
                                <li><a href="<?php echo base_url();?>tdescuentos">Tipos de Descuentos</a></li>                                
                                <li><a href="<?php echo base_url();?>usuarios">Usuarios</a></li>
                                <li><a href="<?php echo base_url();?>ufinales">Usuarios Finales</a></li>                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>                        
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>