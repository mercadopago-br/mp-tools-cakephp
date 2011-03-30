<?php

class Mp3Component extends Object {

	public $version = 'mp3-0.1';

	private $sales = array(
			'acc_id' => '********',
			'url_cancel' => 'http://url_da_pagina_cancelando/cancel',
			'currency' => 'REA',
			'url_process' => 'http://url_da_pagina_processando/processing',
			'url_succesfull' => 'http://url_da_pagina_com_sucesso/sucess',
			'shipping_cost' => '',
			'enc' => '', // codigo de segurança
			'ship_cost_mode' => 'DS',
			'op_retira' => 'B',
			'extra_part' => '',
			'cart_cep' => '',
			'cart_street' => '',
			'cart_number' => '',
			'cart_complement' => '',
			'cart_phone' => '',
			'cart_district' => '',
			'cart_city' => '',
			'cart_state' => '',
			'cart_name' => '',
			'cart_surname' => '',
			'cart_email' => '',
			'cart_doc_nbr' => '',
			'plugin' => 'mp3-0.1' // controle de versão
	);
	
	public function generateInformation() {
	
		if (empty($this->sales)) {
			return false;		
		} else {
			$data = array();
			foreach( $this->sales as $key => $value ) {
				if (!empty($value)) {
					$data[$key] = $value;
				}
			}
			return $data;
		}
	}

}