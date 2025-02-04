<?php
    namespace App\Models;
	use CodeIgniter\Model;


    class Operation extends Model{

		public function __construct(){
			parent::__construct();
			$this->db = \Config\Database::connect();
		}
		protected $upperLimit = 10;


		/**
			* Insert data in table
			* @param string $table 
			* @param array $data
			* @return boolean
		*/
		public function insert_data($table,$data){
			$builder = $this->db->table($table);
			$insert = $builder->insert($data);
			if($insert){
				return $this->db->insertID();
			}else{
				return 0;
			}
		}


		/**
			* Delete data from table
			* @param string $table 
			* @param array $condition
			* @return array
		*/
		public function delete_data($table,$condition){
			$builder = $this->db->table($table);
			$builder->delete($condition);
			return $this->db->affectedRows();
		}


		/**
			* Select data from table
			* @param string $table 
			* @param string $fields
			* @param array $condition
			* @param string $orderByField
			* @param string $orderBy
			* @param string $limit
			* @param string $start
			* @param array $likeCondition
			* @param array $whereInCondition
			* @param string $rawCondition
			* @return array
		*/
		public function get_data($table, $fields = "*", $condition = array(), $orderByField = "id",$orderBy = "DESC", $limit = "",$start = "0", $likeCondition = array(), $whereInCondition = array(), $rawCondition = ""){
			$builder = $this->db->table($table);
			// $builder->distinct();

			if($rawCondition != ''){
				$builder->where($rawCondition);
				$query = $builder->get();
            }else{
				$builder->select($fields);
				if(!empty($condition)){
					$builder->where($condition);
				}
				$builder->orderBy($orderByField,$orderBy);
				if($limit != ""){
					$builder->limit($limit, $start);
				}
				if(!empty($likeCondition)){
					$likeCount = 0;
					foreach($likeCondition as $index=>$like){
						if($likeCount==0){
							$builder->like($index,$like); 
						}else{
							$builder->orLike($index,$like); 
						}
						$likeCount ++;
					}
				}
				if(!empty($whereInCondition)){
					$whereInCount = 0;
					foreach($whereInCondition as $index=>$like){
						$builder->whereIn($index,$like);
					}
				}
				$query = $builder->get();
			}
			$result = array();
			if($query !== FALSE){
				$result['num_rows'] = count($query->getResult());
				$result['result'] = $query->getResult();
			}else{
				$result['num_rows'] = 0;
				$result['result'] = array();
			}
			
			return $result;
		}


		/**
			* Update data in table
			* @param string $table
			* @param array $condition
			* @param string $data
			* @return string
		*/
		public function update_data($table, $condition, $data = array()){
			$builder = $this->db->table($table);
			$builder->set($data);
			$builder->where($condition);
			$builder->update();
			return $this->db->affectedRows();
		}


		/**
			* Get pagination string
			* @param string $total
			* @param string $per_page
			* @param string $page
			* @param string $url
			* @param string $section_old
			* @return string
		*/
		public function my_pagination($total=0,$per_page=10,$page=1,$url='?',$section_old=''){
			$section='"'.$section_old.'"';
			
			$total = $total;
			$adjacents = "2"; 
			
			// $prevlabel = "&lsaquo; Prev";
			$prevlabel = "&lsaquo;";
			//$nextlabel = "Next &rsaquo;";
			$nextlabel = " &rsaquo;";
			// $lastlabel = "Last &rsaquo;&rsaquo;";
			$lastlabel = " &rsaquo;&rsaquo;";
			
			$page = ($page == 0 ? 1 : $page);  
			$start = ($page - 1) * $per_page;
			
			$prev = $page - 1;                          
			$next = $page + 1;
			
			$lastpage = ceil($total/$per_page);
		
			if($lastpage < 2){
				return '';
			}
			$lpm1 = $lastpage - 1; // //last page minus 1
			
			$pagination = "";
			if($lastpage > 1){   
				$pagination .= "<ul class='pagination'>";
				//$pagination .= "<li class='page_info'><span>Page {$page} of {$lastpage}</span></li>";
					
					if ($page > 1) $pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi' onclick='fetchDataPaginationWise($prev);' page='{$prev}'>{$prevlabel}</a></li>";
					
				if ($lastpage < 7 + ($adjacents * 2)){   
					for ($counter = 1; $counter <= $lastpage; $counter++){
						if ($counter == $page)
							$pagination.= "<li class='paginate_button page-item active'><a class='current'>{$counter}</a></li>";
						else
							$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi' onclick='fetchDataPaginationWise($counter);' page='{$counter}'>{$counter}</a></li>";                    
					}
				
				} elseif($lastpage > 5 + ($adjacents * 2)){
					
					if($page < 1 + ($adjacents * 2)) {
						
						for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
							if ($counter == $page)
								$pagination.= "<li class='paginate_button page-item active'><a class='current'>{$counter}</a></li>";
							else
								$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi' onclick='fetchDataPaginationWise($counter);' page='{$counter}'>{$counter}</a></li>";                    
						}
						$pagination.= "<li class='paginate_button page-item dot'>...</li>";
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi' onclick='fetchDataPaginationWise($lpm1);' page='{$lpm1}'>{$lpm1}</a></li>";
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi' onclick='fetchDataPaginationWise($lastpage);' page='{$lastpage}'>{$lastpage}</a></li>";  
							
					} elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {
						
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise(1);' page='1'>1</a></li>";
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise(2);' page='2'>2</a></li>";
						$pagination.= "<li class='paginate_button page-item dot'>...</li>";
						for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
							if ($counter == $page)
								$pagination.= "<li class='paginate_button page-item active'><a class='current'>{$counter}</a></li>";
							else
								$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise($counter);' page='{$counter}'>{$counter}</a></li>";                    
						}
						$pagination.= "<li class='paginate_button page-item dot'>..</li>";
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise($lpm1);' page='{$lpm1}'>{$lpm1}</a></li>";
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise($lastpage);' page='{$lastpage}'>{$lastpage}</a></li>";      
						
					} else {
						
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise(1);' page='1'>1</a></li>";
						$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise(2);' page='2'>2</a></li>";
						$pagination.= "<li class='paginate_button page-item dot'>..</li>";
						for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
							if ($counter == $page)
								$pagination.= "<li class='paginate_button page-item active'><a class='current'>{$counter}</a></li>";
							else
								$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise($counter);' page='{$counter}'>{$counter}</a></li>";                    
						}
					}
				}
				
				if ($page < $counter - 1) {
					$pagination.= "<li class='paginate_button page-item'><a href='javascript:void(0);' id='GoSearchPagi'  onclick='fetchDataPaginationWise($next);' page='{$next}'>{$nextlabel}</a></li>";
				}
				$pagination.= "</ul>";        
			}
			return $pagination;
		}	


		/**
			* Fire GET API
			* @param string $apiEndpoint
			* @param array $apiData
			* @param boolean $test
			* @return JSON
		*/
		public function get_api($apiEndpoint,$apiData,$test=''){
			$apiUrl = APIBASEPOINT.$apiEndpoint;
			$curlHeaderData = array(
				'Content-Type: application/json'
			);
			$query = http_build_query($apiData); 
			$ch = curl_init($apiUrl.'?'.$query);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, false);
			$curl_response = curl_exec($ch);
			curl_close($ch);
			if($test == 'test'){
				return $curl_response;
			}
          	return json_decode($curl_response);
		}


		/**
			* Fire POST API
			* @param string $apiEndpoint
			* @param array $apiData
			* @param boolean $test
			* @return JSON
		*/
		public function post_api($apiEndpoint,$apiData,$test=''){
			$apiUrl = APIBASEPOINT.$apiEndpoint;
			$curlHeaderData = array(
				'Content-Type: application/json'
			);
			$curl = curl_init($apiUrl);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $apiData);
			// curl_setopt($curl, CURLOPT_HTTPHEADER, $curlHeaderData);
			// curl_setopt($curl, CURLOPT_SSLVERSION,3);
			$curl_response = curl_exec($curl);
			if($test == 'test'){
				echo "<pre> curl response-";print_r($curl_response);
				die();
			}
			curl_close($curl);
			return json_decode($curl_response);
		}


		/**
			* Get human readable time
			* @param string $time
			* @return string
		*/
		public function humanTiming ($time){
			$maintime = $time;
			$time = time() - $time; // to get the time since that moment
			$time = ($time<1)? 1 : $time;
			$tokens = array (
				31536000 => 'year ago ('.date("Y-m-d", $maintime).')',
				2592000 => 'month ago ('.date("Y-m-d", $maintime).')',
				604800 => 'week ago ('.date("Y-m-d", $maintime).')',
				86400 => 'day ago ('.date("Y-m-d", $maintime).')',
				3600 => 'hour ago ('.date("Y-m-d", $maintime).')',
				60 => 'minute ago',
				1 => 'second ago'
			);

			foreach ($tokens as $unit => $text) {
				if ($time < $unit) continue;
				$numberOfUnits = floor($time / $unit);
				return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'':'');
			}

		}


		/**
			* Get encrypted and decrypted string
			* @param string $action // encrypt or decrypt
			* @param string $string
			* @return string
		*/
		public function encrypt_decrypt($action, $string,$secret_key = "contrivanceSecretKey") {
			$output = false;
			$encrypt_method = "AES-256-CBC";
			$secret_iv = 'randomString#12231'; // change this to one more secure
			$key = hash('sha256', $secret_key);
		
			// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
			$iv = substr(hash('sha256', $secret_iv), 0, 16);
			if ( $action == 'encrypt' ) {
				$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
				$output = base64_encode($output);
			} else if( $action == 'decrypt' ) {
				$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
			}
			return $output;
		}

		public function send_notification($userId, $notificationId) {
			$getUserDetails = $this->get_data("users","id,device_type,fcm_token",array("id"=>$userId));
			$fcmToken = $getUserDetails["result"][0]->fcm_token;
			$deviceType = $getUserDetails ["result"][0]->device_type;
			
			$getNotification = $this->get_data("app_notifications","*",array("id"=>$notificationId));
			
			$arrNotification= array();          
                                         
			$arrNotification["body"] = $getNotification["result"][0]->text;
			$arrNotification["title"] = $getNotification["result"][0]->component;
			$arrNotification["sound"] = "default";
			$arrNotification["type"] = 1;

			if( (!empty($fcmToken)) && ($deviceType != 0) && (!empty($getNotification["result"]))){
				$url = 'https://fcm.googleapis.com/fcm/send';
				if($deviceType == 1){
					$fields = array(
						'to' => $fcmToken,
						'notification' => $arrNotification
					);
				} else if($deviceType == 2){
					$fields = array(
						'to' => $fcmToken,
						'notification' => $arrNotification
					);
				}
				// Firebase API Key
				$headers = array('Authorization:key=AAAAmbNcOMI:APA91bHzUgjeIuGMju5vLYUbMTAEkjwHMovS8k2MjCuWBTiHjkOmLV5B9OLIjq8km1UI9QoK3KnkmqwpdvX7XdopWD9K9N0fO6xdM3a7mKz9rhEquug3eE5iJYw5hyszFIS8opQ1bJw8','Content-Type:application/json');
				// Open connection
				$ch = curl_init();
				// Set the url, number of POST vars, POST data
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// Disabling SSL Certificate support temporarly
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
				$result = curl_exec($ch);
				if ($result === FALSE) {
					die('Curl failed: ' . curl_error($ch));
				}
				curl_close($ch);
			}
		}
		
	}
?>