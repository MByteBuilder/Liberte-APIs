<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

// date_default_timezone_set('Asia/Dubai');
class ApiController extends ResourceController {

	use ResponseTrait;

	public function input_get($variableName=null){
		$request = \Config\Services::request();
		$getData = trim($request->getGet(($variableName)));
		return $getData;
	}

	public function input_post($variableName=null){
		$request = \Config\Services::request();
		$getData = trim($request->getPost(($variableName)));
		return $getData;
	}


	public function input_file($variableName=null){
		$request = \Config\Services::request();
		$getData = $request->getFile($variableName);
		return $getData;
	}


	
	
	public function success_response($responseMessage = "Success!", $responseData = array(), $responsePagination = array(),$info = array()){
		$status = 200;
		if(!empty($responseData)){
			// $responseData = array_map('strval', $responseData);
			if(!empty($responsePagination)){
				if(!empty($info)){
					$returnArray = array(
						"status_code"=>$status,
						"status"=>true,
						"message"=>$responseMessage,
						"info"=>$info,
						"data"=>$responseData,
						"pagination" => $responsePagination
					);
				}else{
					$returnArray = array(
						"status_code"=>$status,
						"status"=>true,
						"message"=>$responseMessage,
						"data"=>$responseData,
						"pagination" => $responsePagination
					);
				}
			}else{
				if(!empty($info)){
					$returnArray = array(
						"status_code"=>$status,
						"status"=>true,
						"message"=>$responseMessage,
						"info"=>$info,
						"data"=>$responseData
					);
				}else{
					$returnArray = array(
						"status_code"=>$status,
						"status"=>true,
						"message"=>$responseMessage,
						"data"=>$responseData
					);
				}
			}
		}else{
			if(!empty($info)){
				$returnArray = array(
					"status_code"=>$status,
					"status"=>true,
					"message"=>$responseMessage,
					"info"=>$info
				);
			}else{
				$returnArray = array(
					"status_code"=>$status,
					"status"=>true,
					"message"=>$responseMessage
				);
			}
		}
		return $this->respond($returnArray,$status,$responseMessage);
	}

	public function error_response($responseMessage = "Error!", $responseData = array()){
		$status = 200;
		if(!empty($responseData)){
			// $responseData = array_map('strval', $responseData);
			$returnArray = array(
				"status_code"=>$status,
				"status"=>false,
				"message"=>$responseMessage,
				"data"=>$responseData,
			);
		}else{
			$returnArray = array(
				"status_code"=>$status,
				"status"=>false,
				"message"=>$responseMessage
			);
		}
		return $this->respond($returnArray,$status,$responseMessage);
	}
}

?>