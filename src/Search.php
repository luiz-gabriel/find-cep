<?php 
	namespace src;

	class Search
	{
		private $api = 'https://viacep.com.br/ws/';

		public function callApi($cep)
		{
			$returnApi = file_get_contents($this->api . $cep . '/json/');

			return json_decode($returnApi);
		}
	}
	