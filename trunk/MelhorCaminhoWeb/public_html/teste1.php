<?php
    $connect = mysql_connect('mysql.hostinger.com.br', 'u559965827_admin', 'leonardo$123');
    $db = mysql_select_db('u559965827_sro');
   
    
                                    $sql = mysql_query("SELECT * FROM gui_tb_empresa");
                                 echo '<select name="dropdown" style="width:150px">';
                                  echo '<option value=""></option>';

                                    while($exibe = mysql_fetch_assoc($sql)){
                                      $value = $exibe['nome'];
                                      echo "<option value=\"$value\">$value</option>";

                                   
                                    }
                                    echo '</select>';
                                ?>
