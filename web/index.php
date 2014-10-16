							<?php
								$login_cookie = $_COOKIE['login'];
								if(isset($login_cookie))
								{
									include('home.html');
								}
								else
								{
									include('login.html');
									}
							?>