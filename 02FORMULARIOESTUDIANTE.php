<?php
/*
PROGRAMADOR: CALDERON ORTEGA JOHN JAIME 
FECHA: 20 DE MAYO DE 2015	PARALELO: E02-S4J
NOMBRE DE PROGRAMA:02.operac3.php
DESCRIPCION DEL PROGRAMA: formulario de un estudiante 
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8" />
<title>FORMULARIO ESTUDIANTE</title>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>

<body>
<?php
$nota1=4;
$nota2=3;
$nota3=9;
$promedio = round(($nota1 + $nota2 + $nota3)/3,2);
$promedio2= ($nota1 + $nota2 + $nota3)/3;
$promedio3= round($promedio2);
?>
<form action="" method="get"> 
<?php
$nota1=4;
$nota2=3;
$nota3=9;
$promedio = round(($nota1 + $nota2 + $nota3)/3,2);
$promedio2= ($nota1 + $nota2 + $nota3)/3;
$promedio3= round($promedio2);
?>

<table width="72%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" align="center"><strong>DATOS DEL ESTUDIANTE</strong></td>
    </tr>
  <tr>
    <td width="33%" rowspan="5"><img src="web grande.jpg" width="152" height="94" alt="fotojohn" /></td>
    <td width="31%"><strong>Codigo:</strong></td>
    <td width="36%"><input type="text" name="codigo" id="codigo3" size ="28" /></td>
  </tr>
  <tr>
    <td><strong>Apellidos:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Nombres:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Edad:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><strong>Paralelo:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><em><?php
	echo date ('o-m-j');
    ?>
	</em></td>
    <td><strong>Cedula de identidad:</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#333333"><strong> <font color="ffffff">NOTA 1</font> </strong></td>
    <td align="center" bgcolor="#333333"><strong><font color= "ffffff">NOTA 2</font> </strong></td>
    <td align="center" bgcolor="#333333"><strong><font color="ffffff">NOTA 3</font></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr bgcolor="#003366">
    <td colspan="3" align="center"><strong><font color="ffffff">RESULTADOS</font></strong></td>
  </tr>
   <tr>
    <td><strong>Promedio</strong></td>
    <td colspan="2"><?php
    echo "$promedio2"; echo "&nbsp;&nbsp;[$promedio]";
	?>
    </td>
  </tr>
   <tr>
    <td><strong>Promedio Redondeado</strong></td>
    <td colspan="2">
      <?php
	echo "$promedio3";
	?>
    </td>
  </tr>
  <tr>
    <td><strong>Estado</strong></td>
    <td colspan="2"><?php
	if($promedio > 6.5){
	echo "APROBADO";
	}else{
		echo"REPROBADO";
	}
	?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFF66"><strong>AUTOR</strong></td>
    <td colspan="2" bgcolor="#FFFF66"><strong>JOHN JAIME CALDERON ORTEGA</strong></td>
  </tr>
  <tr>
    <td bgcolor="#FFFF66"><strong>GRUPO</strong></td>
    <td colspan="2" bgcolor="#FFFF66"><strong>E02</strong></td>
</table>
</form>

</body>
</html>