							<?php 
								 $login = $_POST['login'];
								 $senha = MD5($_POST['senha']);
								 $connect = mysql_connect('mysql.hostinger.com.br','u559965827_admin','leonardo$123');
								 $db = mysql_select_db('u559965827_sro');
								 $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
								 $select = mysql_query($query_select,$connect);
								 $array = mysql_fetch_array($select);
								 $logarray = $array['login'];
								 if($login == "" || $login == null)
								 {
									echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
								 }
								 else
								 {
									if($logarray == $login)
									{
										echo"<script language='javascript' type='text/javascript'>alert('Esse login j� existe');window.location.href='cadastro.html';</script>";
										die();
									}
									else 
									{
									    $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
									    $insert = mysql_query($query,$connect);
										if($insert)
										{
											echo"<script language='javascript' type='text/javascript'>alert('Usu�rio cadastrado com sucesso!');window.location.href='login.html'</script>";
										}
										else
										{
											echo"<script language='javascript' type='text/javascript'>alert('N�o foi poss�vel cadastrar esse usu�rio');window.location.href='cadastro.html'</script>";
										}
									}
								 }
							?>