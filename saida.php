<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel='stylesheet' type='text/css'  href='./css/estilo.css'>
			
		
		<title> 
		Resultados
		</title> 
		
		
		<?php
		
		$n1 = $_POST['num1'];
		$n2 = $_POST['num2'];
		$m1 = $_POST['mult1'];
		$m2 = $_POST['mult2'];
			
		?>
		
	</head>
	
	<body>
		<?php
		
			for($n1=1; $n1 <= $n2; $n1++){
			   
				    echo '<table border="1">';
					echo '<tr>';
					echo '<td width="33%" bgcolor ="#CE4213" ><font color ="#FFFFFF">Fórmula</font></td>';
					echo '<td width="33%" bgcolor ="#CE4213" ><font color ="#FFFFFF">Valor </font> </td>';
					echo '</tr>';
				    echo "<h4>Tabuada do $n1<h4>"; 
									
				for($m1=0; $m1 <= $m2; $m1++){
					
					echo '<tr>';
				 	echo  '<td width="33%">';
					echo  "$n1 x $m1";
					echo '</td>';
								
					echo '<td width="33%">';
					echo  $n1 * $m1;
					echo '</td>';
					echo  '</tr>';
					echo '</br>';
			
				}

			}
			  
				echo '</table>';
		
			?>			
			
	</body>
	
</html>	