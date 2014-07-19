<?php
/*
auteur: Jean Noel Mareemootoo
Projet: Travail Integration 2
*/

// Class pour envoyer un courriel au webmestre
class ModeleEmailTo
{ 
    public function emailA($data)
    {  
        $to = 'admin@monimmobilier.ca';
		$subject ="test";
		$nom = $data['name'];
		$email = $data['email'];
		$commentaires = $data['commentaires'];
		$message = "Nom : ".$nom."\n"."Email : ".$email."\n"."Commentaires : ".$commentaires."\n";
		$header = "From:".$email."\r\n"; 
		$header.= "MIME-Version: 1.0\r\n"; 
		$header.= "Content-Type: text/plain; charset=utf-8\r\n"; 
		$header.= "X-Priority: 1\r\n"; 
	?>
	<div class="container">
		<div class="row col-lg-12">
	<?php	
		echo "<strong>"."Votre message et les informations ci-dessous ont bien étaient envoyées au webmestre <br>"."</strong>";
		echo "<li>".$nom."</li>"."<br>";
		echo "<li>".$email."</li>"."<br>";
		echo "<li>".$commentaires."</li>"."<br>";
		mail($to, $subject, $message, $header);	   	
    } 
}
	?>	
		</div>
	</div>


