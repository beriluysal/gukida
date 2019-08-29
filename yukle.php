<?php 
	session_start(); 
		$boyut=1000000;
		$tipler=array("image/png","image/jpeg","image/gif","image/pjpeg");
		$ds=@count($_FILES["resim"]["name"]);
		if(($ds>5) and ($ds<1)){
			die('<div class="i_ana" style="border:1px solid red;">  Yükleme miktarını aşıyorsunuz. </div>');
			
		}else{
			for($i=0;$i<$ds;$i++){
				if(!empty($_FILES["resim"]["name"][$i])){
				if(in_array($_FILES["resim"]["type"][$i],$tipler)){
					
					$isim=substr('abcdefghijklmnoprstyz',0,3);
					$uzanti=substr($_FILES["resim"]["name"][$i],-4,4);
					if($uzanti==".gif" or $uzanti==".jpg" or $uzanti==".png"){
						if($_FILES["resim"]["size"][$i]>$boyut){
							echo '<div class="i_ana" style="border:1px solid red;">  Boyutu 1 mb tan çok. </div>';
							continue;
						}else{
							$dizin="../ilanresimleri".$isim.$uzanti;
							if(move_uploaded_file($_FILES["resim"]["tmp_name"][$i],$dizin)){
								echo "Dosya Yüklendi.\n";
    							}
    							 else {
        						echo "Dosya Yüklenemedi!\n";							
							}
						}
					}else{
						echo '<div class="i_ana"  style="border:1px solid red;">  Sadece .gif - .png - .jpg yükleyebilirsiniz. </div>';
						continue;
					}
				}else{
						echo '<div class="i_ana"  style="border:1px solid red;">  Sadece .gif - .png - .jpg yükleyebilirsiniz. </div>';
						continue;
				}
				}else{
					echo '<div class="i_ana" style="border:1px solid red;">  Alan Boş. </div>';
					continue;
				}
			}
		}
?>