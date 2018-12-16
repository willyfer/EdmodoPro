 <div class="modal fade" id="nuevatarea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice " >
    <div class="modal-content"  >
      <div class="modal-header">
        <button type="button " class="close btn_cerrar" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
  
   
      </div>
     
      <div class="modal-body" style="padding: 7px;margin:7px;display: flex;"> 
        <form action="php_esencial/registrar_tarea.php" method="POST">
          
 
         <h4>Crear Nueva Tarea</h4>
          <h5 class="modal-title" id="myModalLabel"> </h5><br>
          <h6>Asunto</h6>
          <input class="input-group-sm border_input"   id="titulo"   type="text" placeholder="escribe aquí">
          <div class="row">
            <div style="margin:17px">
                <h6>Descripción</h6>
                <textarea  id="des" class="input-group-sm border_input" style="" rows="1"></textarea>
            </div>
           
           
           <!-- input with datetimepicker -->
           <div class="form-group">
              <label class="label-control">Datetime Picker</label>
              <input type="text" class="form-control datetimepicker" value="10/05/2016"/>
          </div>
              <div class="form-group col-md-6">
                 <h6>Seleccionar Fecha límite</h6>
                  <input type="text" id="fec_fin" class="form-control datetimepicker border_input"    />
              </div>
        
               
          </div>
                
    
            <div class="modal-footer text-center">
                
                <button class="btn btn-success btn-round "  onclick='javascript:loadnuevatareas(<?php  echo $curso_id . ',' . $grado_id . ',' . $seccion_id; ?>);' type="button">Crear Tarea</button>
            
            </div>
       </form>

       <div class="">
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
     
     

<script src="assets/js/jquery.min.js" type="text/javascript"></script> 