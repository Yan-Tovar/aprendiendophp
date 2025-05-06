<?php
if ($_REQUEST['borrar']){
    setcookie("noticia","",time()-1000,"/");
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