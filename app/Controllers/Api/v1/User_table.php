<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    //use App\Models\Mailler;


    class User_table extends ApiController{

        public function user_list(){
            $operation = new Operation();
            

            $id = $this->input_get("id");
            $name = $this->input_get("name");
            $email = $this->input_get("email");
            $wallet_id = $this->input_get(" wallet_id");
            $wallet_point = $this->input_get(" wallet_point");


            $lastrow = $this->input_get("lastrow");
            $page_no = $this->input_get("page_no");
            $limit = 5;
            if((!isset($lastrow)) || (empty($lastrow)) ){
                $lastrow = 0;
            }else{
                $lastrow = ($page_no - 1)*5;
            }

            //$lastrow = $this->input_get("lastrow");
            //$page_no = $this->input_get("page_no");
            // $limit = 3;
            // if((!isset($lastrow)) || (empty($lastrow)) ){
            //     $lastrow = 0;
            // }else{
            //     $lastrow = ($page_no - 1)*3;
            // }

            $searchCondition = array();

            if(strlen($id)>0){
                    $searchCondition = array_merge($searchCondition,array("id"=>$id));
                }
            if(strlen($name)>0){
                    $searchCondition = array_merge($searchCondition,array("name"=>$name));
                }
            if(strlen($email)>0){
                    $searchCondition = array_merge($searchCondition,array("email"=>$email));
            }
                    if(strlen($wallet_id)>0){
                        $searchCondition = array_merge($searchCondition,array("wallet_id"=>$wallet_id));
                    }
                    if(strlen($wallet_point)>0){
                        $searchCondition = array_merge($searchCondition,array("wallet_point"=>$wallet_point));
                    }
            //$total_data  = $operation->get_data("users",'*',"","",""); 
            $total_data  = $operation->get_data("users",'*',"","",""); 
            $data  = $operation->get_data("users",'*',$searchCondition,"","",$limit,$lastrow);
            //$data  = $operation->get_data("users",'*',$searchCondition,"","",);

             ///////////for pagination/////////////
             $lastrow = $lastrow + $data["num_rows"];
             $total_team_avg = ceil($total_data["num_rows"]/5);
                   
             if($page_no > 0){
                 $loadMore = 1;
             }else{
                $page_no = 0;
             }
       
             $pagination = array(
                 "page_no"=>(string)$page_no,
                 "last_row"=>(string)$lastrow,
                 "total_page"=>$total_team_avg,
             );
            
             ///////////pagination End/////////////
            // print_r($data);
            // die();
            ///////////////////////////
            if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["name"] = $dataRow->name;
                    $returnArr[$dataRowCount]["email"] = $dataRow->email;
                    $returnArr[$dataRowCount]["wallet_id"] = $dataRow->wallet_id;
                    $returnArr[$dataRowCount]["wallet_point"] = $dataRow->wallet_point;
                    $returnArr[$dataRowCount]["gender"] = $dataRow->gender;
                    
                        // if(strlen($dataRow->phon_no) > 0){
                           // $country_data  = $operation->get_data("app_country",'*',array('id'=>$dataRow->country));
                           // $returnArr[$dataRowCount]["country_id"] = $country_data['result'][0]->id;
                           // $returnArr[$dataRowCount]["country_name"] = $country_data['result'][0]->name;
                        // }
                    $returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr,$pagination);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
            ///////////////////////////
            
        }
        public function user_search(){
            $operation = new Operation();
            $search = $this->input_get("text");

            $likeCondition = array();
            if(strlen($search)>0){
                $likeCondition =  array_merge($likeCondition,array("name"=>$search));
            }
            if(strlen($search)>0){
                $likeCondition =  array_merge($likeCondition,array("email"=>$search));
            }
            if(strlen($search)>0){
                $likeCondition =  array_merge($likeCondition,array("phone_no"=>$search));
            }
            if(strlen($search)>0){
                $likeCondition =  array_merge($likeCondition,array("wallet_id"=>$search));
            }
            $data  = $operation->get_data("users",'*',"","","","","",$likeCondition);
            

            if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["name"] = $dataRow->name;
                    $returnArr[$dataRowCount]["email"] = $dataRow->email;
                    $returnArr[$dataRowCount]["wallet_id"] = $dataRow->wallet_id;
                    $returnArr[$dataRowCount]["wallet_point"] = $dataRow->wallet_point;
                    
                      
                    $returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
        }
        public function user_edit(){
            $operation = new Operation();

            $id = $this->input_post("id");
            $status = $this->input_post("status");
            if(strlen($id)>0 ){
                $searchCondition = array();
                   
                        if(strlen($id)>0){
                            $searchCondition = array_merge($searchCondition,array("id"=>$id));
                        }else{
                            $searchCondition = array_merge($searchCondition,array());
                        }

                    $data = $operation->update_data("users", $searchCondition,array("status"=>$status));
                    if($data){
                        return $this->success_response("Status updated");
                    }
               
            }else{
                return $this->error_response("Sorry! No activity found!");
            }

        }
        public function user_wallet_details(){
            $operation = new Operation();

            $id = $this->input_get("id");

            $lastrow = $this->input_get("lastrow");
            $page_no = $this->input_get("page_no");
            $limit = 10;
            if((!isset($lastrow)) || (empty($lastrow)) ){
                $lastrow = 0;
            }else{
                $lastrow = ($page_no - 1)*10;
            }

            $searchCondition = array();
            if(strlen($id)>0){
                $searchCondition = array_merge($searchCondition,array("user_id"=>$id));
            }else{
                $searchCondition = array_merge($searchCondition,array());
            }
            ////////////////////////////////////////////////////////////////////////////////////
            $total_data  = $operation->get_data("user_wallet_transaction",'*',$searchCondition,"","",); 
            $data  = $operation->get_data("user_wallet_transaction",'*',$searchCondition,"","",$limit,$lastrow);
            //$data  = $operation->get_data("users",'*',$searchCondition,"","",);

             ///////////for pagination/////////////
             $lastrow = $lastrow + $data["num_rows"];
             $total_team_avg = ceil($total_data["num_rows"]/10);
                   
             if($page_no > 0){
                 $loadMore = 1;
             }else{
                $page_no = 0;
             }
       
             $pagination = array(
                 "page_no"=>(string)$page_no,
                 "last_row"=>(string)$lastrow,
                 "total_page"=>$total_team_avg,
             );
            ////////////////////////////////////////////////////////////////////////////////////
             //$data  = $operation->get_data("user_wallet_transaction",'*',$searchCondition,"","",);
             if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["user_id"] = $dataRow->user_id;
                    $returnArr[$dataRowCount]["type"] = $dataRow->type;
                    $returnArr[$dataRowCount]["points"] = $dataRow->points;
                    $returnArr[$dataRowCount]["added_on"] = $dataRow->added_on;
                    $returnArr[$dataRowCount]["details"] = $dataRow->details;
                    
                        // if(strlen($dataRow->phon_no) > 0){
                           // $country_data  = $operation->get_data("app_country",'*',array('id'=>$dataRow->country));
                           // $returnArr[$dataRowCount]["country_id"] = $country_data['result'][0]->id;
                           // $returnArr[$dataRowCount]["country_name"] = $country_data['result'][0]->name;
                        // }
                    // $returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    // $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr,$pagination);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
        }
        public function user_walking_details(){
            $operation = new Operation();

            $lastrow = $this->input_get("lastrow");
            $page_no = $this->input_get("page_no");
            $limit = 10;
            if((!isset($lastrow)) || (empty($lastrow)) ){
                $lastrow = 0;
            }else{
                $lastrow = ($page_no - 1)*10;
            }
            $id = $this->input_get("id");
            $searchCondition = array();
            // echo $id;
            // die();       
            if(strlen($id)>0){
                $searchCondition = array_merge($searchCondition,array("user_id"=>$id));
            }else{
                $searchCondition = array_merge($searchCondition,array());
            }
            $total_data  = $operation->get_data("walkearn_user_history",'*',$searchCondition,"","",); 
            $data  = $operation->get_data("walkearn_user_history",'*',$searchCondition,"","",$limit,$lastrow);
            // $data  = $operation->get_data("walkearn_user_history",'*',$searchCondition,"","",);
            ///////////for pagination/////////////
            $lastrow = $lastrow + $data["num_rows"];
            $total_team_avg = ceil($total_data["num_rows"]/10);
                  
            if($page_no > 0){
                $loadMore = 1;
            }else{
               $page_no = 0;
            }
      
            $pagination = array(
                "page_no"=>(string)$page_no,
                "last_row"=>(string)$lastrow,
                "total_page"=>$total_team_avg,
            );
           ////////////////////////////////////////////////////////////////////////////////////
             if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["user_id"] = $dataRow->user_id;
                    $returnArr[$dataRowCount]["total_coins"] = $dataRow->total_coins;
                    $returnArr[$dataRowCount]["step_count"] = $dataRow->step_count;
                    $returnArr[$dataRowCount]["datetime"] = $dataRow->datetime;
                    $returnArr[$dataRowCount]["date"] = $dataRow->date;
                    $returnArr[$dataRowCount]["hour"] = $dataRow->hour;
                    $returnArr[$dataRowCount]["day"] = $dataRow->day;
                    $returnArr[$dataRowCount]["distance_value"] = $dataRow->distance_value;
                    $returnArr[$dataRowCount]["calories_value"] = $dataRow->calories_value;
                    $returnArr[$dataRowCount]["time_values"] = $dataRow->time_values;
                    
                       
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr,$pagination);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
        }
        public function user_details_tot(){
            $operation = new Operation();
            $id = $this->input_get("id");

            $searchCondition = array();

            if(strlen($id)>0){
                    $searchCondition = array_merge($searchCondition,array("id"=>$id));
            }
            $data  = $operation->get_data("users",'*',$searchCondition,"","",);
            if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["name"] = $dataRow->name;
                    $returnArr[$dataRowCount]["email"] = $dataRow->email;
                    $returnArr[$dataRowCount]["wallet_id"] = $dataRow->wallet_id;
                    $returnArr[$dataRowCount]["wallet_point"] = $dataRow->wallet_point;
                    $returnArr[$dataRowCount]["gender"] = $dataRow->gender;
                    
                        // if(strlen($dataRow->phon_no) > 0){
                           // $country_data  = $operation->get_data("app_country",'*',array('id'=>$dataRow->country));
                           // $returnArr[$dataRowCount]["country_id"] = $country_data['result'][0]->id;
                           // $returnArr[$dataRowCount]["country_name"] = $country_data['result'][0]->name;
                        // }
                    $returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;

                    $returnArr[$dataRowCount]["referral_point"] = $dataRow->referral_point;
                    $returnArr[$dataRowCount]["crypto_wallet"] = $dataRow->crypto_wallet;
                    $returnArr[$dataRowCount]["address"] = $dataRow->address;
                    $returnArr[$dataRowCount]["login_type"] = $dataRow->login_type;
                    $returnArr[$dataRowCount]["device_type"] = $dataRow->device_type;
                    $returnArr[$dataRowCount]["kyc_verify"] = $dataRow->kyc_verify;
                    $returnArr[$dataRowCount]["referral_code"] = $dataRow->referral_code;
                    $returnArr[$dataRowCount]["is_referred"] = $dataRow->is_referred;
                    $returnArr[$dataRowCount]["chain_code"] = $dataRow->chain_code;
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
        }
        }
    
?>