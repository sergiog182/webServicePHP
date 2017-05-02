<?php
	class business_Calculadora
	{
		/*
		* funcion para sumar dos numeros
		* @param $in->sumandoa float primer numero a sumar
		* @param $in->sumandob float segundo numero a sumar
		* return $out
		* $out->status string indicador de error en el sevicio
		* $out->statusMessage string descripcion de estado
		* $out->resultado float resultado de la suma 
		*/
		public function sumar($in) {
			$out = new stdClass();
			try {
				if (empty($in->sumandoa) || empty($in->sumandob)) {
					$out->status = "NOK";
					$out->statusMessage = "La suma requiere dos numeros";
				} else {
					$out->resultado = $in->sumandoa + $in->sumandob;
					$out->status = "OK";
					$out->statusMessage = "Suma realizada";	
				}
			} catch(Exception $e) {
				$out->status = "NOK";
				$out->statusMessage = $e->getMessage();
			}

			return $out;
		}

		/*
		* funcion para restar dos numeros
		* @param $in->minuendo float minuendo de la operacion
		* @param $in->sutraendo float sustraendo de la operacion
		* return $out
		* $out->status string indicador de error en el sevicio
		* $out->statusMessage string descripcion de estado
		* $out->resultado float resultado de la resta 
		*/
		public function restar($in) {
			$out = new stdClass();
			try {
				if (empty($in->minuendo) || empty($in->sustraendo)) {
					$out->status = "NOK";
					$out->statusMessage = "La resta requiere dos numeros";
				} else {
					$out->resultado = $in->minuendo - $in->sustraendo;
					$out->status = "OK";
					$out->statusMessage = "Resta realizada";	
				}
			} catch(Exception $e) {
				$out->status = "NOK";
				$out->statusMessage = $e->getMessage();
			}

			return $out;
		}

		/*
		* funcion para multiplicar dos numeros
		* @param $in->multiplicando float multiplicando de la operacion
		* @param $in->multiplicador float multiplicador de la operacion
		* return $out
		* $out->status string indicador de error en el sevicio
		* $out->statusMessage string descripcion de estado
		* $out->resultado float resultado de la multiplicacion 
		*/
		public function multiplicar($in) {
			$out = new stdClass();
			try {
				if (empty($in->multiplicando) || empty($in->multiplicador)) {
					$out->status = "NOK";
					$out->statusMessage = "La multiplicacion requiere dos numeros";
				} else {
					$out->resultado = $in->multiplicando * $in->multiplicador;
					$out->status = "OK";
					$out->statusMessage = "Multiplicacion realizada";	
				}
			} catch(Exception $e) {
				$out->status = "NOK";
				$out->statusMessage = $e->getMessage();
			}

			return $out;
		}

		/*
		* funcion para dividir dos numeros
		* @param $in->dividendo float dividendo de la operacion
		* @param $in->divisor float divisor de la operacion
		* return $out
		* $out->status string indicador de error en el sevicio
		* $out->statusMessage string descripcion de estado
		* $out->resultado float resultado de la division
		*/
		public function dividir($in) {
			$out = new stdClass();
			try {
				if (empty($in->dividendo) || empty($in->divisor)) {
					$out->status = "NOK";
					$out->statusMessage = "La division requiere dos numeros";
				} else {
					if ($in->divisor == 0) {
						$out->status = "NOK";
						$out->statusMessage = "El divisor no puede ser 0";
					} else {
						$out->resultado = $in->dividendo / $in->divisor;
						$out->status = "OK";
						$out->statusMessage = "Division realizada";	
					}
				}
			} catch(Exception $e) {
				$out->status = "NOK";
				$out->statusMessage = $e->getMessage();
			}

			return $out;
		}
	}