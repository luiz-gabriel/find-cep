<?php 
   namespace src;

   class Validate
   {
      public function validateCep($cep){
         $validate = $this->pregMatchCep($cep) === true AND $this->repeatedNumberFilter($cep) === false ?  true : false;

         return $validate;
      }

      public function pregMatchCep($cep)
      {  
      $verify = $cep;

      $result = preg_match('/[0-9]{5}\-[0-9]{3}/', $verify);

      $response = $result === 1 ? true : false;

      return $response;
      }

      public function repeatedNumberFilter($cep)
      {
         $array = 
         [
            '11111-111',
            '22222-222',
            '33333-333',
            '44444-444',
            '55555-555',
            '66666-666',
            '77777-777',
            '88888-888',
            '99999-999'
         ];

         $return = $cep === $array ? true : false;

         return $return;
      }
   }
   