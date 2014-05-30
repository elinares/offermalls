<?php $this->load->view('header')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Categoría</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                                        
                    <form role="form" action="<?php echo base_url('editar_categoria').'/'.$info_categoria['idcategoria'];?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Nombre" name="nombre" value="<?=$info_categoria['nombre']?>">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label>Imagen</label>
                                <input type="hidden" name="imagen" id="cat-img" value="<?=$info_categoria['img']?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 img-container">
                                <img src="<?php echo base_url('images/info/categorias')?>/default.png" db-name="default"/>
                                <img src="<?php echo base_url('images/info/categorias')?>/alimentos.png" db-name="alimentos"/>
                                <img src="<?php echo base_url('images/info/categorias')?>/hogar.png" db-name="hogar"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6 img-container">
                                <img src="<?php echo base_url('images/info/categorias')?>/moda.png" db-name="moda"/>
                                <img src="<?php echo base_url('images/info/categorias')?>/salud.png" db-name="salud"/>
                                <img src="<?php echo base_url('images/info/categorias')?>/tecnologia.png" db-name="tecnologia"/>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url()?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url()?>js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url()?>js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();    

        var db_val='<?=$info_categoria["img"]?>';
        $('.img-container img').each(function( index ) {
            if($(this).attr('db-name')==db_val){
                $(this).addClass('active');
            }          
        }); 

        $('.img-container img').on('click', function(){
            $('.img-container img').removeClass('active');
            var valor = $(this).attr('db-name');
            $('#cat-img').val(valor);
            $(this).addClass('active');
        });   
    });
    </script>
</body>
</html>
