<?php
// Crear opciones de datos de contacto
function estudio_ajustes(){
    add_menu_page('estudio','Estudio Ajustes','administrator','estudio_ajustes','estudio_ajustes_opciones','','20');

    //Llamar al registro de las opciones de nuestro tema

    add_action('admin_init','estudio_registrar_opciones');
    // add_submenu_page('estudio_ajustes','Datos de contacto','Datos de contacto','administrator','datos_de_contacto','datos_de_contacto');
  }
  
  add_action('admin_menu','estudio_ajustes');

function estudio_registrar_opciones(){
    //Registrar opciones una por campo
    register_setting('estudio_ajustes_opciones_grupo', 'direccion_estudio');
    register_setting('estudio_ajustes_opciones_grupo', 'numero_estudio');
    register_setting('estudio_ajustes_opciones_grupo', 'facebook_estudio');
    register_setting('estudio_ajustes_opciones_grupo', 'linkedin_estudio');
    register_setting('estudio_ajustes_opciones_grupo', 'correo_estudio');


}

  function estudio_ajustes_opciones(){
      ?>
      <div class="wrap">
      <h1>Datos de contacto</h1>
        <form action="options.php" method="post">

        <?php settings_fields('estudio_ajustes_opciones_grupo');?>
        <?php do_settings_sections('estudio_ajustes_opciones_grupo');?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Dirección</th>
                    <td><input type="text" name="direccion_estudio" style="min-width:300px;"  value="<?php echo esc_attr( get_option('direccion_estudio'))?>"></td>
                </tr>

                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Número de contacto</th>
                    <td><input type="text" name="numero_estudio" value="<?php echo  esc_attr(get_option('numero_estudio'))?>"></td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Correo de contacto</th>
                    <td><input type="text" name="correo_estudio"  style="min-width:300px;"  value="<?php echo  esc_attr(get_option('correo_estudio'))?>"></td>
                </tr>

                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Link de facebook</th>
                    <td><textarea name="facebook_estudio" style="min-width:300px; min-height:67px;" ><?php echo  esc_attr(get_option('facebook_estudio'))?></textarea></td>
                </tr>
                <tr valign="top">
                    <th scope="row" style="font-family:'Lato'; font-weight:400;">Link de Linkedin</th>
                    <td><input type="text" name="linkedin_estudio"  style="min-width:300px;"  value="<?php echo  esc_attr(get_option('linkedin_estudio'))?>"></td>
                </tr>
            
            </table>

            <?php submit_button();?>
        
        </form>
      </div>
    <?php
}
  

