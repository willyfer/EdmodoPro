<div>
    <div>
            
            <table class="table table-black">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Archivos</th>
                  <th>calificar</th>
                </tr>
              </thead>
              <tbody id="body">
                
           
            
              
          
            </table>
        
       
      
        
      </div>
      <div class="modal-footer text-center">
            
            <button class= "btn btn-success"  onclick='javascipt:des();'>enviar</button>
        
      </div>
    </div>
     </div>
 <script>
   function des() {
        $("input").attr('disabled','disabled');
          $("input").css({

            "background-color": "grey";
          })
   }

 </script>