<?php class uploadImg{
	private $DB;
    private $id;
	private $image0=" ";
	private $image1=" ";
	private $image2=" ";
	private $image3=" ";
	private $image4=" ";
	private $image5=" ";
        private $image6=" ";

	
	
	function __construct ()
	{
		$this->DB = BD::getInstance("e1395342", "dbconnect");
		
	}

//suppression de photos , prend en parametre le chemin dans la base de donnees
public function supprimer($data){
$this->DB->getBD()->query("delete from mi_photo where chemin_large = '".$data['deletePhoto']."' ;");
}
//ajouter le chemin vers la photo dans la BD depend de type :2: photos d'annonces :autres:logo profile , ID de l'annonce ou de l'utilisateur , dest : chemin
public function ajoutchemin($dest,$annonceID,$type){
		if ($type == 2){
					$cheminThumb= "select chemin_thumbnail from mi_photo where chemin_thumbnail ='".$dest."' ";
					$resultat = $this->DB->getBD()->query($cheminThumb);
				if ($row = $resultat->fetch_row()) 
					$this->DB->getBD()->query("update mi_photo set chemin_large = '". $dest ."' , chemin_thumbnail = '". $dest ."' where chemin_large = '". $dest ."' ;");
				else
					$this->DB->getBD()->query("INSERT INTO mi_photo (ID_type_photo , chemin_large , chemin_thumbnail , ID_annonce) VALUES ('1' ,'". $dest ."' , '". $dest ."' , '". $annonceID ."')");
							
				}
		else			{
					//echo "else started</br>";
					$photoexiste= "select ID_photo from mi_photo where chemin_large = '".$dest."' ;";
					$resultat2 = $this->DB->getBD()->query($photoexiste);
					if($row2 = $resultat2->fetch_row()) {
					if ($row2[0]==("img/photos/logoUser_".$annonceID.".jpg")){
					//echo "not zero";
					$this->DB->getBD()->query("update mi_utilisateurs set ID_photo = '". $row2[0] ."' where ID_utilisateurs = '".$annonceID."' ;");
				
					}
					}
					else{
					//echo "zero";
					$this->DB->getBD()->query("INSERT INTO mi_photo (ID_type_photo , chemin_large , chemin_thumbnail) VALUES ('1' ,'img/photos/user/logoUser_".$annonceID.".jpg' , 'img/photos/user/logoUser_".$annonceID .".jpg') ;");
					$chercheIdPhoto= "select ID_photo from mi_photo where chemin_large ='img/photos/user/logoUser_".$annonceID.".jpg';";
					$resultat3 = $this->DB->getBD()->query($chercheIdPhoto);
						if($row3 = $resultat3->fetch_row()) {
						
						$this->DB->getBD()->query("update mi_utilisateurs set ID_photo = '". $row3[0] ."' where ID_utilisateurs = '". $annonceID ."' ;");
						}
					
							}
					
				
					$this->cropmyimage($dest,$type);
					}
					
				}
//ajouter le chemin vers la photo logo agence dans la BD
	public function ajoutcheminAgence($dest,$annonceID,$type){
		if ($type == 2){
					$cheminThumb= "select chemin_thumbnail from mi_photo where chemin_thumbnail ='".$dest."' ";
					$resultat = $this->DB->getBD()->query($cheminThumb);
				if ($row = $resultat->fetch_row()) 
					$this->DB->getBD()->query("update mi_photo set chemin_large = '". $dest ."' , chemin_thumbnail = '". $dest ."' where chemin_large = '". $dest ."' ;");
				else
					$this->DB->getBD()->query("INSERT INTO mi_photo (ID_type_photo , chemin_large , chemin_thumbnail , ID_annonce) VALUES ('1' ,'". $dest ."' , '". $dest ."' , '". $annonceID ."')");
							
				}
		else			{
					//echo "else started</br>";
					$photoexiste= "select ID_photo from mi_photo where chemin_large = '".$dest."' ;";
					$resultat2 = $this->DB->getBD()->query($photoexiste);
					if($row2 = $resultat2->fetch_row()) {
					if ($row2[0]==("img/photos/agence/logoAgence_".$annonceID.".jpg")){
					//echo "not zero";
					$this->DB->getBD()->query("update mi_agence set ID_photo = '". $row2[0] ."' where ID_agence = '".$annonceID."' ;");
				
					}
					}
					else{
					//echo "zero";
					$this->DB->getBD()->query("INSERT INTO mi_photo (ID_type_photo , chemin_large , chemin_thumbnail) VALUES ('1' ,'img/photos/agence/logoAgence_".$annonceID.".jpg' , 'img/photos/agence/logoAgence_".$annonceID .".jpg') ;");
					$chercheIdPhoto= "select ID_photo from mi_photo where chemin_large ='img/photos/agence/logoAgence_".$annonceID.".jpg';";
					$resultat3 = $this->DB->getBD()->query($chercheIdPhoto);
						if($row3 = $resultat3->fetch_row()) {
						
						$this->DB->getBD()->query("update mi_agence set ID_photo = '". $row3[0] ."' where ID_agence = '". $annonceID ."' ;");
						}
					
							}
					
				
					$this->cropmyimage($dest,$type);
					}
					
				}			





public function checkmyThumb ($id){
$cheminThumb= "select chemin_large from mi_photo where chemin_large ='".$id ."' ;";
$resultat = $this->DB->getBD()->query($cheminThumb);
if ($row = $resultat->fetch_row()){
echo $row[0];
}
else{
echo 'img/placeholder.jpg';
}
}
// cherches les photos ou $aaa= id annonce
public function generateThumbs($aaa){

$cheminThumb= "select chemin_thumbnail from mi_photo where ID_annonce ='".$aaa ."' ";
						$resultat = $this->DB->getBD()->query($cheminThumb);
						$i=0;
						while ($row = $resultat->fetch_row()) {
						$myvar1 = 'image'.$i;
							$this->$myvar1 = $row[0];
							$i++;
							}
						
						$j=0;
						while ($j<7){
						$myvar2 = 'image'.$j;
						if($this->$myvar2 !=" "){
									echo '<div class="col-xs-6 col-md-3 pull-left">
											<a href="#">
												<img onclick="changeIt(this.src)" src="'.$this->$myvar2.'" width="50" height="50" class="thumbnail" alt="...">
											</a>';
											//echo $row[0];
											echo '</div>';
									$j++;
								}
								else{
									echo '<div class="col-xs-6 col-md-3 pull-left">
											<a href="#">
												<img onclick="changeIt(this.src)" src="img/placeholder.jpg" width="50" height="50" class="thumbnail" alt="...">
											</a>

											</div>';
											$j++;
								
								}
								}
								echo '<script>
								function changeIt($source){
								document.getElementById("myimage").src= $source;
								var n = $source.indexOf("img/"); 
								var valeur = $source.substring(n);
								document.getElementById("deletePhotos").value = valeur;
								
								}
								</script>';
}
//reccuperer le fichier jpg , check extension (source:plusieurs exemples sur php.net)
public function televerserPhoto($data){
if ($_FILES['fileToUpload']['error'] > 0) {
   echo "Erreur: " . $_FILES['fileToUpload']['error'] . "<br />";
} else {
		// extension valid
    $validExtensions = array('.jpg', '.jpeg');
		// check extension
    $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
		// valider l'extension
		if (in_array($fileExtension, $validExtensions)) {
		switch ($data['quellephoto']) {
		//exterieur
                        case '1': 
                                $this->mynamingVignettes('tn_' . $data['annonce'],$data['annonce'],2);
                                break;
								
                        case '2': 
								$this->mynaming( $data['annonce'].'_1',$data['annonce'],2);
                                break; 
                        case '3': 
                                $this->mynaming( $data['annonce'].'_2',$data['annonce'],2);
                                break; 
								
                        case '4': 
                                $this->mynaming( $data['annonce'].'_3',$data['annonce'],2);
                                break;  
								
                        case '5': 
                                $this->mynaming( $data['annonce'].'_4',$data['annonce'],2);
                                break;  
								
					    case '6': 
                                $this->mynaming( $data['annonce'].'_5',$data['annonce'],2);
                                break;  
                            
                        default:
                              
                                break;
                }
        
			
			
        }
    else {
        echo "format n'est pas correct";
    }
}

}
//reccuperer le fichier du logo pour profile utilisateur
public function televerserLogo($data){
if ($_FILES['fileToUpload']['error'] > 0) {
   echo "Erreur: " . $_FILES['fileToUpload']['error'] . "<br />";
} else {
		// extension valid
    $validExtensions = array('.jpg', '.jpeg');
		// check extension
    $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
		// valider l'extension
		if (in_array($fileExtension, $validExtensions)) {
		$this->mynamingUser('logoUser_' . $data['user'],$data['user'],'1');
        }
    else {
        echo "format n'est pas correct";
    }
}

}
//reccuperer le fichier du logo pour profile agence
public function televerserLogoAgence($data){
if ($_FILES['fileToUpload']['error'] > 0) {
   echo "Erreur: " . $_FILES['fileToUpload']['error'] . "<br />";
} else {
		// extension valid
    $validExtensions = array('.jpg', '.jpeg');
		// check extension
    $fileExtension = strrchr($_FILES['fileToUpload']['name'], ".");
		// valider l'extension
		if (in_array($fileExtension, $validExtensions)) {
		$this->mynamingAgence('logoAgence_' . $data['user'],$data['user'],'1');
        }
    else {
        echo "format n'est pas correct";
    }
}

}
//attribuer le bon nom de fichier
public function mynaming ($name,$data,$type) {
								$newName = $name;
								$destination = 'img/photos/annonce/' . $newName .'.jpg';
								
								//insertion dans la base de donnees
								if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)) {
								//$inserer= new uploadImg();
								$this->ajoutchemin($destination,$data,$type);
								//echo 'File ' .$newName. ' upload ok!';
                                                                }

}
public function mynamingVignettes ($name,$data,$type) {
								$newName = $name;
								$destination = 'img/photos/vignettes/' . $newName .'.jpg';
								
								//insertion dans la base de donnees
								if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)) {
								//$inserer= new uploadImg();
								$this->ajoutchemin($destination,$data,$type);
								//echo 'File ' .$newName. ' upload ok!';
                                                                }

}
public function mynamingUser ($name,$data,$type) {
								$newName = $name;
								$destination = 'img/photos/user/' . $newName .'.jpg';
								
								//insertion dans la base de donnees
								if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)) {
								//$inserer= new uploadImg();
								$this->ajoutchemin($destination,$data,$type);
								//echo 'File ' .$newName. ' upload ok!';
                                                                }

}
public function mynamingAgence ($name,$data,$type) {
								$newName = $name;
								$destination = 'img/photos/agence/' . $newName .'.jpg';
								
								//insertion dans la base de donnees
								if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $destination)) {
								//$inserer= new uploadImg();
								$this->ajoutcheminAgence($destination,$data,$type);
								//echo 'File ' .$newName. ' upload ok!';
                                                                }

}
//fonction pour cropper l'image pour la taille desiree ( source : examples sur php.net sur l'utilisation de imagecopyresampled)
public function cropmyimage ($maphoto,$type) {
//Your Image

if ($type=1){
$mywidth=600;
$myheight=450;
}
else{
$mywidth=600;
$myheight=450;
}
$filename = $maphoto;
list($width_orig, $height_orig) = getimagesize($filename);


if ($width_orig > $height_orig) {
  $y = ($height_orig / 2)-($myheight/2);
  $x = ($width_orig/2)-($mywidth/2);

} else {
  $x = ($height_orig / 2)-($myheight/2);
  $y = ($width_orig/2)-($mywidth/2);

}

// Resample
$image_p = imagecreatetruecolor($mywidth, $myheight);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, $x,$y, $mywidth,$myheight, $mywidth, $myheight);

imagejpeg($image_p,$maphoto,100);
}
}


?>