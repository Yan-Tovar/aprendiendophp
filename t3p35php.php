<?php
 if($_REQUEST['radio']=="noticiaPolitica"){
    setcookie("noticia","<div>Este es el componente de una noticia politica</div>",time()+(60*60*24*365),"/");
    header("location: t3p35.php");
}
elseif($_REQUEST['radio']=="noticiaEconomica"){
    setcookie("noticia","<div>Este es el componente de una noticia economica</div>",time()+(60*60*24*365),"/");
    header("location: t3p35.php");
}
else{
    setcookie("noticia","<div>Este es el componente de una noticia deportiva</div>",time()+(60*60*24*365),"/");
    header("location: t3p35.php");
}
?>
<html>
<head>
<title>Ejercicio35</title>
</head>
<body>

</body>
</html>