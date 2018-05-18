<?php
/**
* Páxina índice
*
* Páxina índice que amosa exemplos das funcións implementadas na clase Actividade2 no arquivo clase.php
*
* @author Víctor Díaz Fernández.
* @license Creative Commons 4.0 Attribution
* @package VDF
* @version Version 1.0.0
*/
require_once('clase.php');
?>

<html>
	<head>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <title>Tarefa DAW6, actividade 2</title>
	</head>
	<body>
		<?php
		
		//creamos unha instancia da clase
		$datos = new Actividade2();
		
		print "<h1>Exercicio realizado por ".$datos->getMeuNome()."</h1>";
		
		/**
		* Preséntanse dous exemplos da función palíndromos.
		*/
		print "<p><strong>Exemplos da función que determina se unha frase &eacute; pal&iacute;ndromo:</strong></p>";
		
		//exemplo 1
		$datos->setFrase("Dabale arroz a la zorra el abad");
		print "<p>A frase '".$datos->getFrase()."'";
		if (!$datos->ePalindromo()) {print " non";}
		print " &eacute; pal&iacute;ndroma.</p>";
		
		//exemplo 2
		$datos->setFrase("Despregamento aplicacions web");
		print "<p>A frase '".$datos->getFrase()."'";
		if (!$datos->ePalindromo()) {print " non";}
		print " &eacute; pal&iacute;ndroma.</p>";
		
		/**
		* Preséntanse tres exemplos da función primos.
		*/
		print "<p><strong>Exemplos da función que determina se un n&uacute;mero &eacute; primo:</strong></p>";
		
		//exemplo 1
		$datos->setNumero(23);
		print "<p>O n&uacute;mero ".$datos->getNumero();
		if (!$datos->ePrimo()) {print " non";}
		print " &eacute; primo.</p>";
		
		//exemplo 2
		$datos->setNumero(2);
		print "<p>O n&uacute;mero ".$datos->getNumero();
		if (!$datos->ePrimo()) {print " non";}
		print " &eacute; primo.</p>";
		
		//exemplo 3
		$datos->setNumero(6);
		print "<p>O n&uacute;mero ".$datos->getNumero();
		if (!$datos->ePrimo()) {print " non";}
		print " &eacute; primo.</p>";
		
		/**
		* Preséntanse dous exemplos da función que compara dous números e determina cal é o maior.
		*/
		print "<p><strong>Exemplos da función que compara dous n&uacute;meros:</strong></p>";
		
		//exemplo 1
		$datos->setNumero(12);
		$datos->setNumero2(18);
		print "<p>Dos n&uacute;meros ".$datos->getNumero()." e ".$datos->getNumero2().", o maior &eacute;: ".$datos->calEMaior().".</p>";
		//exemplo 2
		$datos->setNumero2(12);
		print "<p>Dos n&uacute;meros ".$datos->getNumero()." e ".$datos->getNumero2().", o maior &eacute;: ".$datos->calEMaior().".</p>";

		/**
		* Preséntanse dous exemplos da función que resolve unha ecuación de 1º grao.
		*/
		print "<p><strong>Exemplos da función de resoluci&oacute;n de ecuaci&oacute;n de 1º grao:</strong></p>";
		
		//exemplo 1
		$datos->setNumero(5);
		$datos->setNumero2(3);
		print "<p>A ecuaci&oacute;n ".$datos->getNumero()."X + ".$datos->getNumero2()." = 0, ten a soluci&oacute;n X = ".$datos->ecuacion().".</p>";
		
		//exemplo 2
		$datos->setNumero(2);
		$datos->setNumero2(4);
		print "<p>A ecuaci&oacute;n ".$datos->getNumero()."X + ".$datos->getNumero2()." = 0, ten a soluci&oacute;n X = ".$datos->ecuacion().".</p>";
		
		/**
		* Preséntanse catro exemplos da función que determina se un ano é bisesto ou non.
		*/
		print "<p><strong>Exemplos da función que resolve se un ano &eacute; bisesto:</strong></p>";
		
		//exemplo 1
		$datos->setAno(1977);
		print "<p>O ano ".$datos->getAno();
		if (!$datos->eBisesto()) {print " non";}
		print " &eacute; bisesto.</p>";
		
		//exemplo 2
		$datos->setAno(1980);
		print "<p>O ano ".$datos->getAno();
		if (!$datos->eBisesto()) {print " non";}
		print " &eacute; bisesto.</p>";
		
		//exemplo 3
		$datos->setAno(1900);
		print "<p>O ano ".$datos->getAno();
		if (!$datos->eBisesto()) {print " non";}
		print " &eacute; bisesto.</p>";
		
		//exemplo 4
		$datos->setAno(2000);
		print "<p>O ano ".$datos->getAno();
		if (!$datos->eBisesto()) {print " non";}
		print " &eacute; bisesto.</p>";
		?>
	</body>
</html>