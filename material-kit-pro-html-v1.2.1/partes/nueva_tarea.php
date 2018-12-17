


 <div class="modal fade" id="nuevatarea" tabindex="-1" role="dialog" aria-labelledby="modal_tarea" aria-hidden="true">
  <div class="modal-dialog modal-notice " >
    <div class="modal-content"  >
      <div class="modal-header">
        <button type="button " class="close btn_cerrar" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
  
   
      </div>
            <h4>Crear Nueva Tarea</h4> 
      <div class="modal-body"  ">

        <div style="margin:0px 5px">
          

        
        <form action="php_esencial/registrar_tarea.php" method="POST">
          
 
        
          <h5 class="modal-title" id="myModalLabel"> </h5><br>
         
          <input class="  "  style="padding: 6px 17px; border: 1px purple solid ;width: 100%;border-width: 0px 0px 3px 0px"  id="titulo"   type="text" placeholder="TITULO DE LA TAREA">
           
            
                  
                  <textarea  placeholder="Descripcion de la tarea" style="padding: 0px 17px; border-bottom: 1px purple solid ;width: 100%;border-width: 0px 0px 3px 0px;margin-top: 20px;" id="des" class="input-group-sm  " style="" rows="1"></textarea>
             
                <div class='input-group date' id='datetimepicker1'>
                   <h6>Seleccionar Fecha de inicio  </h6>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
             <!-- input with datetimepicker -->
             <div class="form-group">
                <h6>Seleccionar Fecha de inicio  </h6>


                <input type="text" id="fech_ini" class="form-control datetimepicker" value="10/05/2018 "/>
                  <span style="color: black" class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div> 
                   <h6>Seleccionar Fecha límite</h6>
            <div class="form-group">
             <input type="text" id="fec_fin" class="form-control datetimepicker "value="10/05/2018"    />

               <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
          </div>
 
    
            <div class="  text-center">
                
                <button class="btn btn-success  btn-sm btn-round btn-block "  onclick='javascript:loadnuevatareas(<?php  echo $curso_id . ',' . $grado_id . ',' . $seccion_id; ?>);' type="button">Crear Tarea</button>
            
            </div>
       </form>
      </div>
       <div  style="margin:10px ; padding: 5px; " >
              <form action="php_esencial/uploadfile.php"  method="POST"  id="enviar_file"  enctype="multipart/form-data">
               <div class="fileinput fileinput-new text-center" data-provides="fileinput">
               <div class="fileinput-new thumbnail img-raised">
                   
               </div>
               <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                
                 <div>
                    <span class="btn btn-raised btn-round btn-sm btn-rose btn-file">
                       <span class="fileinput-new">Subir Archivo</span>
                       <span class="fileinput-exists">Cambiar</span>
                       <input type="file" name="archivo" />
                    </span>
                          <a href="#pablo" class="btn btn-danger  btn-sm btn-round fileinput-exists" data-dismiss="fileinput">
                          <i class="fa fa-times"></i> Eliminar</a>
                 </div>
                   
                </div>
                </form>

          </div>

    
       </div>
          
    
       
        
         
      
        
       
      
      
        
        </div>
	
        </div>
        
      </div>

       <?php include 'partes/nueva_tarea.php';  ?>  
     
<?php require 'partes/scripts.php'; ?>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>


       <script  type="text/javascript">
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
      </script>
  