<?php

    class servicesExposed
    {
        /**
         * SW: Consulta la cabezera de una reserva
         * @param <Object> $in
         * @return /stdClass
         */
        public function sumar($in)
        {
            $model = new business_Calculadora();
            return $model->sumar($in);
        }
        
        /**
         * SW: Actualiza datos de un detalle de reserva
         * @param <Object> $in
         * @return /stdClass
         */
        public function restar($in)
        {
            $model = new business_Calculadora();
            return $model->restar($in);
        }
        
        /**
         * SW: Consulta los detalles de una reserva
         * @param <Object> $in
         * @return /stdClass
         */
        public function multiplicar($in)
        {
            $model = new business_Calculadora();
            return $model->multiplicar($in);
        }
        
        public function dividir($in)
        {
            $model = new business_Calculadora();
            return $model->dividir($in);
        }
    }
