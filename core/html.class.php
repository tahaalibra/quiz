<?php

class HTML {
	private $js = array();

	function sanitize($data) {
		return mysql_real_escape_string($data);
	}

	function link($text,$path,$prompt = false,$confirmMessage = "Are you sure?") {
		$path = str_replace(' ','-',$path);
		if ($prompt) {
			$data = '<a href="javascript:void(0);" onclick="javascript:jumpTo(\''.BASE_PATH.'/'.$path.'\',\''.$confirmMessage.'\')">'.$text.'</a>';
		} else {
			$data = '<a href="'.BASE_PATH.'/'.$path.'">'.$text.'</a>';	
		}
		return $data;
	}

	function includeJs($fileName) {
		$data = '<script src="'.BASE_PATH.'/public/js/'.$fileName.'.js"></script>';
		return $data;
	}

	function includeCss($fileName) {
		//$data = '<style href="'.BASE_PATH.'/public/css/'.$fileName.'.css"></style>';
        $data = '<link rel="stylesheet" type="text/css" href="'.BASE_PATH.'/public/css/'.$fileName.'.css">';
        return $data;
	}
}