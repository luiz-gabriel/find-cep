<?php 
   namespace App;
   
   require __DIR__ . '/vendor/autoload.php';


   use src\{
      Validate,
      Search,
      TreatApiReturn
   };


   class App
   {

      private $verifyPost;
      public $result;

      public function __construct(){
         $this->verifyPost = isset($_POST['action']) AND !empty($_POST['cep']) ? $this->MainController($_POST['cep']) : null;
      }

      public function MainController($cep)
      {
         $validate = new \src\Validate;
         
         $response = $validate->validateCep($cep);
         
         if($response === true)
         {
            $search = new Search;
            $return = $search->callApi($cep);
            
            $treatReturn = new TreatApiReturn;

            $result = $treatReturn->treat($return);
            
            $this->displayResult($result);
         }else
         {
            echo 'Verifique o cep';
         }
      }

      public function displayResult($results)
      {
         
            foreach ($results as $key => $value) {
               echo $key . ': ' . $value. '<br>';
            }
         
      }

   }

   new App();
