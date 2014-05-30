<?php $this->load->view('header')?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Subcategoría</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">                                        
                    <form role="form" action="<?php echo base_url('editar_subcategoria').'/'.$info_subcategoria['codsubcat'];?>" method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">                            
                                <input class="form-control" placeholder="Nombre" name="nombre" value="<?=$info_subcategoria['nombre']?>">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-lg-3">
                                    <label>Categoría</label>
                                    <select class="form-control" name="categoria">
                                        <?php                                        
                                            foreach($categorias as $categoria){
                                                if($categoria['idcategoria']==$info_subcategoria['idcategoria']){
                                                    ?>                                            
                                                    <option value="<?=$categoria['idcategoria']?>" selected><?=$categoria['nombre']?></option>
                                                    <?php
                                                }else{      
                                                    ?>                                            
                                                    <option value="<?=$categoria['idcategoria']?>"><?=$categoria['nombre']?></option>
                                                    <?php
                                                }                                            
                                            }
                                        ?>                                        
                                    </select>
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
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
