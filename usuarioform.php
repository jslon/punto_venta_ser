<!DOCTYPE html>
<html>
  <head>
    <title>usuario</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/usuario/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/ie.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="files/usuario/data.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
     <script language="javascript" type="text/javascript" src="jquery.js"></script>

         <script>

          function buscar() {

          $.ajax({     
             type: 'post',                                 
             url: 'user_query.php',                   
             data: {idq: document.getElementById("u5_input").value},             
                                        
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("u23_input").value  = data[0];  //password            
              document.getElementById("u20_input").value  = data[1];  //usuario   
              document.getElementById("u11_input").value  = data[2];  //apellido1            
              document.getElementById("u14_input").value  = data[3];  //apellido2            
              document.getElementById("u5_input").value   = data[4];  //id_usuario        
              document.getElementById("u29_input").value  = data[5];  //rol 
              document.getElementById("u8_input").value   = data[6];   //nombre   
              document.getElementById("u17_input").value  = data[7];   //telefono

            } 
          });
        }
        </script>



  <form action = "usuario.php" method = "post" name = "form">
      <div id="base" class="">

        <!-- Unnamed (Shape) -->
        <div id="u0" class="ax_paragraph">
          <img id="u0_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u1" class="text">
            <p><span>Usuario</span></p><p><span>&nbsp;</span></p>
          </div>
        </div>

        <!-- Unnamed (Horizontal Line) -->
        <div id="u2" class="ax_horizontal_line">
          <img id="u2_start" class="img " src="resources/images/transparent.gif" alt="u2_start"/>
          <img id="u2_end" class="img " src="resources/images/transparent.gif" alt="u2_end"/>
          <img id="u2_line" class="img " src="images/usuario/u2_line.png" alt="u2_line"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u3" class="ax_paragraph">
          <img id="u3_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u4" class="text">
            <p><span>Numero de Identificacion</span><span>*</span><span>: </span></p>
          </div>
        </div>

        <!-- user_identificacion (Text Field) -->
        <div id="u5" class="ax_text_field" data-label="user_identificacion">
          <input id="u5_input" type="text" value="" name="user_identificacion"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u6" class="ax_paragraph">
          <img id="u6_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u7" class="text">
            <p><span>Nombre</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- user_nombre (Text Field) -->
        <div id="u8" class="ax_text_field" data-label="user_nombre">
          <input id="u8_input" type="text" value="" name="user_nombre"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u9" class="ax_paragraph">
          <img id="u9_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u10" class="text">
            <p><span>Apellido</span><span> 1*:</span></p>
          </div>
        </div>

        <!-- user_apellido1 (Text Field) -->
        <div id="u11" class="ax_text_field" data-label="user_apellido1">
          <input id="u11_input" type="text" value="" name= "user_apellido1" />
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u12" class="ax_paragraph">
          <img id="u12_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u13" class="text">
            <p><span>Apellido</span><span> 2:</span></p>
          </div>
        </div>

        <!-- user_apellido2 (Text Field) -->
        <div id="u14" class="ax_text_field" data-label="user_apellido2">
          <input id="u14_input" type="text" value="" name ="user_apellido2"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u15" class="ax_paragraph">
          <img id="u15_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u16" class="text">
            <p><span>Numero de Telefono</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- user_telefono (Text Field) -->
        <div id="u17" class="ax_text_field" data-label="user_telefono">
          <input id="u17_input" type="text" value="" name = "user_telefono"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u18" class="ax_paragraph">
          <img id="u18_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u19" class="text">
            <p><span>Usuario</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- user_usuario (Text Field) -->
        <div id="u20" class="ax_text_field" data-label="user_usuario">
          <input id="u20_input" type="text" value="" name = "user_usuario"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u21" class="ax_paragraph">
          <img id="u21_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u22" class="text">
            <p><span>Contrasena</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- user_pw (Text Field) -->
        <div id="u23" class="ax_text_field" data-label="user_pw">
          <input id="u23_input" type="password" value="" name ="user_pw"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u24" class="ax_paragraph">
          <img id="u24_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u25" class="text">
            <p><span>Repetir Contrasena</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- user_pw2 (Text Field) -->
        <div id="u26" class="ax_text_field" data-label="user_pw2">
          <input id="u26_input" type="password" value="" name="user_pw2"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u27" class="ax_paragraph">
          <img id="u27_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u28" class="text">
            <p><span>Rol:</span></p>
          </div>
        </div>

        <!-- user_Rol (Droplist) -->
        <div id="u29" class="ax_droplist" data-label="user_Rol">
          <select id="u29_input" name ="user_rol">
            <option value="1">Administrador</option>
            <option value="2">Cajero</option>
            <option value="3">Bodeguero</option>
          </select>
        </div>

        <!-- user_agregar (HTML Button) -->
        <div id="u30" class="ax_html_button" data-label="user_agregar">
          <input id="u30_input" type="submit" value="Agregar" name = "user_agregar"/>
        </div>

        <!-- user_modificar (HTML Button) -->
        <div id="u31" class="ax_html_button" data-label="user_modificar">
          <input id="u31_input" type="submit" value="Modificar" name="user_modificar"/>
        </div>

        <!-- user_buscar (HTML Button) -->
        <div id="u32" class="ax_html_button" data-label="user_buscar">
          <input id="u32_input" type="button" value="Buscar" name = "user_buscar" onclick="buscar()"/>
        </div>

        <!-- Unnamed (MasterAdmin) -->

        <!-- Unnamed (New Master 1) -->

        <!-- Unnamed (New Master 1) -->

        <!-- Unnamed (Shape) -->
        <div id="u36" class="ax_shape">
          <img id="u36_img" class="img " src="images/usuario/u36.png"/>
          <!-- Unnamed () -->
          <div id="u37" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u38" class="ax_menu">
          <img id="u38_menu" class="img " src="images/usuario/u38_menu.png" alt="u38_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u39" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u40" class="ax_table_cell">
              <img id="u40_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u41" class="text">
                <p><span>Usuarios</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u42" class="ax_table_cell">
              <img id="u42_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u43" class="text">
                <p><span>Proveedores</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u44" class="ax_table_cell">
              <img id="u44_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u45" class="text">
                <p><span>Facturas</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u46" class="ax_table_cell">
              <img id="u46_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u47" class="text">
                <p><span>Empresas</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u48" class="ax_table_cell">
              <img id="u48_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u49" class="text">
                <p><span>Productos</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u50" class="ax_table_cell">
              <img id="u50_img" class="img " src="images/usuario/u50.png"/>
              <!-- Unnamed () -->
              <div id="u51" class="text">
                <p><span>Opciones</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u52" class="ax_menu sub_menu">
            <img id="u52_menu" class="img " src="images/usuario/u52_menu.png" alt="u52_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u53" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u54" class="ax_table_cell">
                <img id="u54_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u55" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u56" class="ax_menu sub_menu">
            <img id="u56_menu" class="img " src="images/usuario/u52_menu.png" alt="u56_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u57" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u58" class="ax_table_cell">
                <img id="u58_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u59" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u60" class="ax_menu sub_menu">
            <img id="u60_menu" class="img " src="images/usuario/u52_menu.png" alt="u60_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u61" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u62" class="ax_table_cell">
                <img id="u62_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u63" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u64" class="ax_menu sub_menu">
            <img id="u64_menu" class="img " src="images/usuario/u52_menu.png" alt="u64_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u65" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u66" class="ax_table_cell">
                <img id="u66_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u67" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u68" class="ax_menu sub_menu">
            <img id="u68_menu" class="img " src="images/usuario/u52_menu.png" alt="u68_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u69" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u70" class="ax_table_cell">
                <img id="u70_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u71" class="text">
                  <p><span>Roles</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u72" class="ax_menu sub_menu">
            <img id="u72_menu" class="img " src="images/usuario/u52_menu.png" alt="u72_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u73" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u74" class="ax_table_cell">
                <img id="u74_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u75" class="text">
                  <p><span>Cancelar</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u76" class="ax_image">
          <img id="u76_img" class="img " src="images/usuario/u76.png"/>
          <!-- Unnamed () -->
          <div id="u77" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u78" class="ax_paragraph">
          <img id="u78_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u79" class="text">
            <p><span>Nombre de Empresa</span></p>
          </div>
        </div>

        <!-- current_usuario_interfaz (Shape) -->
        <div id="u80" class="ax_paragraph" data-label="current_usuario_interfaz">
          <img id="u80_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u81" class="text">
            <p><span>Current_User</span></p>
          </div>
        </div>

        <!-- salir (Shape) -->
        <div id="u82" class="ax_shape" data-label="salir">
          <img id="u82_img" class="img " src="images/login/login_button_u8.png"/>
          <!-- Unnamed () -->
          <div id="u83" class="text">
            <p><span>Salir</span></p>
          </div>
        </div>

        <!-- user_reestablecer (HTML Button) -->
        <div id="u84" class="ax_html_button" data-label="user_reestablecer">
          <input id="u84_input" type="submit" value="Restablecer" name ="user_restablecer"/>
        </div>

        <!-- Usu_Num_Req (Shape) -->
        <div id="u85" class="ax_paragraph" data-label="Usu_Num_Req">
          <img id="u85_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u86" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Usu_Usu_Req (Shape) -->
        <div id="u87" class="ax_paragraph" data-label="Usu_Usu_Req">
          <img id="u87_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u88" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Usu_Con_Req (Shape) -->
        <div id="u89" class="ax_paragraph" data-label="Usu_Con_Req">
          <img id="u89_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u90" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Usu_Nom_Req (Shape) -->
        <div id="u91" class="ax_paragraph" data-label="Usu_Nom_Req">
          <img id="u91_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u92" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Usu_Ape_Req (Shape) -->
        <div id="u93" class="ax_paragraph" data-label="Usu_Ape_Req">
          <img id="u93_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u94" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Usu_Con_Igual (Shape) -->
        <div id="u95" class="ax_paragraph" data-label="Usu_Con_Igual">
          <img id="u95_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u96" class="text">
            <p><span>* Las contrasenas no coinciden</span></p>
          </div>
        </div>

        <!-- Usu_Telef_Req (Shape) -->
        <div id="u97" class="ax_paragraph" data-label="Usu_Telef_Req">
          <img id="u97_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u98" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Usu_cotr_vac (Shape) -->
        <div id="u99" class="ax_paragraph" data-label="Usu_cotr_vac">
          <img id="u99_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u100" class="text">
            <p><span>Constraseña no se debe llenar al modificar</span></p>
          </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u101" class="ax_paragraph">
          <img id="u101_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u102" class="text">
            <p><span>Agregar/Modificar Usuario:</span></p>
          </div>
        </div>
      </div>
     </form> 
  </body>
</html>
