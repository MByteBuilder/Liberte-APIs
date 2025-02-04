<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	// protected $session;
	// function __construct(){
	// 	$this->session = \Config\Services::session();
	// 	$this->session->start();
	// }
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['cookie','date','url'];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);
		$this->session = \Config\Services::session();
		$this->session->start();
		$loggedUserId = $this->session->get("uae_user_id");
		if(strlen($loggedUserId) == 0){
			// echo $loggedUserId."=====";
			// return redirect()->to(base_url()."admin/login");
			// $response = redirect()->route("admin/login");
			// $response->redirect(base_url("admin/login"));

		}
		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
		// $this->session = \Config\Services::session();
	}



	public function load_admin_view($pages=array(),$data=array(),$scriptPages=array(),$type="afterLogin"){
		if(empty($pages)){
			return false;
		}else{
			$headerData = array();
			$pageData = $data;
			if(!empty($data["pageTitle"])){
				$headerData["pageTitle"] = $data["pageTitle"];
				unset($pageData["pageTitle"]);
			}else{
				$headerData["pageTitle"] = "";
			}
			$footerData["scriptPages"] = $scriptPages;

			if($type == "beforeLogin"){
				
				echo view('web/admin/includes/login_header',$headerData);
				foreach($pages as $pagesRow){
					echo view($pagesRow,$data);
				}
				echo view('web/admin/includes/login_footer',$footerData);
			}else if($type == "afterLogin"){
				echo view('web/admin/includes/header',$headerData);
				echo view('web/admin/includes/top_bar');
				echo view('web/admin/includes/left_side_bar');
				foreach($pages as $pagesRow){
					echo view($pagesRow,$pageData);
				}
				echo view('web/admin/includes/footer',$footerData);
			}
		}
	}



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
}

