<?php

class buttonHelper extends AppHelper { 

	public $helpers = array('Form');
	
	public function create(){
		$out = '<form target="_top" action="https://www.mercadopago.com/mlb/buybutton" method="post">';
		return $this->output($out);
	}
	
	public function hidden($data = null, $extras = null){
		$out = null;
		$data += $extras;		
		if(is_array($data)){
			foreach($data as $key => $value){
				$out .= '<input type="hidden" name="' . $key . '" value="' . $value . '">';
			}
		}
		return $this->output($out);
	}

	public function submit($params = array()){
		$out = null;
		if(empty($params)){
			$out = '<input type="image" src="https://www.mercadopago.com/org-img/MP3/buy_now_mlb.gif" border="0" width="128" height="20" alt="">';
		}elseif(isset($params['img'])){
			$out = '<input type="image" src="https://www.mercadopago.com/org-img/MP3/' . $params['img'] . '" border="0" alt="">';
		}
		return $this->output($out);
	}
	
	public function end(){
		$out = '</form>';
		return $this->output($out);
	}

}