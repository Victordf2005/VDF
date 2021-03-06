﻿<?php
/**
* Arquivo que implementa a clase Actividade2
*
* @author Víctor Díaz Fernández.
* @license Creative Commons 4.0 Attribution
* @package VDF
* @version Version 1.0.1
*/


/**
* Clase con diversas funcións para a actividade 2 da tarefa 6 de DAW.
*
* Esta clase implementa as seguintes funcións:
* - ePalindromo: determina se unha frase é palíndroma ou non.
* - ePrimo: determina se un número é primo ou non.
* - calEMaior: compara dos números de devolve o maior.
* - ecuacion: devolve a solución dunha ecuación de 1º grao.
* - eBisesto: determina se un ano é bisesto ou non.
*
* As funcións non admiten parámetros; todos os valores deberán ser asignados mediante funcións 'set'.
*
* @author Víctor Díaz Fernández.
* @license Creative Commons 4.0 Attribution
* @package VDF
* @version Version 1.0.1
*/
class Actividade2 {
	
	/**
	* @var Constante co nome do autor
	*/
	const MEUNOME = 'Victor Diaz Fernandez';
	
	/**
	* @var texto a analizar
	*/
	private $frase;
	
	/**
	* @var número a comprobar ou comparar
	*/
	private $numero;
	/**
	* @var 2º número a comparar
	*/
	private $numero2;
	
	/**
	* @var ano a comprobar
	*/
	public $ano;
	
	/**
	* Construtor sen parámetros
	*
	* @return void
	*/
	public function __construct() {
		$this->frase='';
		$this->numero=0;
		$this->numero2=0;
		$this->ano=0;
	}
	
	/**
	* setter para establecer o texto da frase a analizar
	*
	* @param String 
	* @return void
	*/
	public function setFrase($f) {$this->frase = $f;}
	
	/**
	* setter para establecer o primeiro número
	*
	* @param String 
	* @return void
	*/
	public function setNumero($n) {$this->numero = $n;}
	
	/**
	* setter para establecer o segundo número
	*
	* @param String
	* @return void
	*/
	public function setNumero2($n) {$this->numero2 = $n;}
	
	/**
	* setter para establecer o ano
	*
	* @param String
	* @return void
	*/
	public function setAno($a) {$this->ano = $a;}
	
	//funcións getters
	
	/**
	* getter da propiedade frase
	*
	* @return String Devolve o texto da frase analizada
	*/
	public function getFrase() {return $this->frase;}
	
	/**
	* getter da propiedade numero
	*
	* @return int Devolve o número comprobado ou comparado
	*/
	public function getNumero() {return $this->numero;}
	
	/**
	* getter da propiedade numero2
	*
	* @return int Devolve o segundo número comparado
	*/
	public function getNumero2() {return $this->numero2;}
	
	/**
	* getter da propiedade ano
	*
	* @return int devolve o ano comprobado
	*/
	public function getAno() {return $this->ano;}
	
	/**
	* getter da constante de clase MEUNOME
	*
	* @return String Devolve a constante de clase MEUNOME
	*/
	public function getMeuNome() {return self::MEUNOME;}

	/**
	* Función que determina se unha frase é palíndroma.
	*
	* Esta función devolve un valor booleano que indica se unha frase é palíndroma ou non.
	* A frase a analizar débese engadir previamente á clase coa función setFrase(frase_a_analizar).
	*
	* @return boolean
	*/
	public function ePalindromo() {
		$retorno = true;
		$frase2 = str_replace(" ", "", $this->frase);		
		$frase2 = strtolower($frase2);
		$medio = intdiv(strlen($frase2), 2);
		for ($i=0; $i<$medio;$i++) {
			if ($frase2[$i] != $frase2[strlen($frase2)-1-$i]) {
				$retorno = false;
				break;
			}
		}
		return $retorno;
	}
	
	
	/**
	* Función que determina se un número é primo.
	*
	* Esta función devolve un valor booleano que indica se un número é primo ou non.
	* O número a analizar débese engadir previamenteá clase coa función setNumero(numero_a_analizar).
	*
	* @return boolean
	*/
	public function ePrimo() {
		$retorno = true;
		if ($this->numero % 2 == 0 and $this->numero > 2) {
			$retorno = false;
		} else {		
			for ($i=3;$i<=intdiv($this->numero, 2);$i = $i + 2)	{
				if ($this->numero % $i == 0) {
					$retorno = false;
					break;
				}
			}
		}
		return $retorno;
	}
	
	
	/**
	* Función que determina que número é maior de entre dous dados.
	*
	* Esta función devolve un texto co número que é maior.
	* Se ambos números son iguais, devolve o texto 'son iguais'
	* O números a analizar débense engadir previamenteá clase coas funcións setNumero(numero1) e setNumero2(numero2).
	*
	* @return string
	*/
	public function calEMaior() {
		$retorno='';
		if ($this->numero < $this->numero2) {
			$retorno .= $this->numero2;
		} else if ($this->numero > $this->numero2) {
			$retorno .= $this->numero;
		} else {
			$retorno = 'son iguais';
		}
		return $retorno;
	}
		
	/**
	* Función que resolve unha ecuación de 1º grao.
	*
	* Esta función devolve un string coa solución como número enteiro (se a solución é Natural)
	* ou coa solución en forma de fracción (se a solución é Real)
	* Indicaremos, coas funcións setNumero(valor_de_X) e setNumero2(valor_independente), os valores cos que traballará.
	*
	* @return string
	*/
	public function ecuacion() {
		$n = $this->numero2 * (-1);
		if ($this->numero2 % $this->numero == 0) {
				return ''.($n / $this->numero);
		} else {
			if ($this->numero2 < 0){
				return $n."/(".$this->numero.")";
			} else {
				return $n."/".$this->numero;
			}
		}
	}
	
	/**
	* Función que determina se un ano é bisesto ou non.
	*
	* Esta función devolve un valor booleano indicando se o ano analizado é bisesto ou non.
	* Para pasarlle o ano á función empregaremos setAno(ano_a_analizar):
	*
	* @return boolean
	*/
	public function eBisesto() {
		if ($this->ano % 4 != 0 or ($this->ano % 100 == 0 and $this->ano % 400 != 0 )) {
			return false;
		} else {
			return true;
		} 
	}
	
}

?>
