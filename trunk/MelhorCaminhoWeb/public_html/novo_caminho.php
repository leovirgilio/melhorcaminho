<?php /*
  Copyright (c) 2007, Gurú Sistemas and/or Gustavo Adolfo Arcila Trujillo
  All rights reserved.
  www.gurusistemas.com

  Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

 * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer
  in the documentation and/or other materials provided with the distribution.
 * Neither the name of the Gurú Sistemas Intl nor Gustavo Adolfo Arcila Trujillo nor the names of its contributors may be used to
  endorse or promote products derived from this software without specific prior written permission.

  THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS  "AS IS"  AND ANY EXPRESS  OR  IMPLIED WARRANTIES, INCLUDING,
  BUT NOT LIMITED TO,  THE IMPLIED WARRANTIES  OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO EVENT
  SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,  INDIRECT,  INCIDENTAL, SPECIAL, EXEMPLARY,  OR CONSEQUENTIAL
  DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF  USE, DATA, OR PROFITS;  OR BUSINESS
  INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE
  OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

  phpMyDataGrid is Open Source released under the BSD License, if you like this script and think to use it please make a donation.
  We ask a minimum donation, (as low as USD 10, but if you think you can do a higher donation, don't think twice, just do it ;-)
  if you compare, you can find commercial versions with less features than phpMyDataGrid with prices higher than USD499.
  So, just to make a donation is a cheap.

  Please remember donating is one way to show your support, copy and paste in your internet browser the following link to make your donation
  https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=tavoarcila%40gmail%2ecom&item_name=phpMyDataGrid%202007&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8

  For more info, samples, tips, screenshots, help, contact, forum, please visit phpMyDataGrid site
  http://www.gurusistemas.com/indexdatagrid.php

  For contact author: tavoarcila at gmail dot com or info at gurusistemas dot com
 */ ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" type="text/css" href="css/comum.css"></link>
        <title>Usuarios - Melhor Caminho</title> 

        <?php
        $login_cookie = $_COOKIE['login'];
        if (isset($login_cookie)) {
           

            $connect = mysql_connect('mysql.hostinger.com.br', '', '');
            $db = mysql_select_db('');

   
        } else {
            include 'login.html';
        }
        ?> 
    </head> 

    <body> 
        <?php
        $login_cookie = $_COOKIE['login'];
        if (isset($login_cookie)) {
            /* draw the grid */
            echo "<form method='POST' action='caminho.php'>
                    <label>De:</label><input type='text' name='toNode' id='toNode'><br>
                    <label>Para:</label><input type='text' name='fromNode' id='fromNode'><br>
                    <label>Custo:</label><input type='text' name='cost' id='cost'><br>
                    <input type='submit' value='Cadastrar' id='cadastrar' name='cadastrar'>
                </form>
            </div>";

            /* Disconnect from database */
            $objGrid->desconectar();
        } else {
            
        }
        ?>
    </body> 
</html> 