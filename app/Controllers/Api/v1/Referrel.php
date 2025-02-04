<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    use App\Models\Mailler;


    class Referrel extends ApiController{

        public function list(){
            $operation = new Operation();
            // $id = $this->input_get("id");
            // $session = \Config\Services::session();
            // $user_id = $session->get("lbt_admin_id");
            // $user_type = $session->get("lbt_admin_type");
            $user_id = $this->input_get("user_id");
            $user_type = $this->input_get("user_type");
            $is_used = $this->input_get("is_used");

            $lastrow = $this->input_get("lastrow");
            $page_no = $this->input_get("page_no");
            $limit = 3;
            if((!isset($lastrow)) || (empty($lastrow)) ){
                $lastrow = 0;
            }else{
                $lastrow = ($page_no - 1)*3;
            }
            
           
            $searchCondition = array();
            if($user_type == 1){
                $searchCondition = array_merge($searchCondition,array());
            }
            if($user_type == 2){
                $searchCondition = array_merge($searchCondition,array("member_id"=>$user_id));
            }
            if(strlen($is_used) > 0){
                $searchCondition = array_merge($searchCondition,array("is_used"=>$is_used));
            }
            //echo $lastrow;
            // echo "<pre>";
            // print_r($searchCondition);
            // die();
            if($user_type == 1){
                $total_data  = $operation->get_data("team_referral_code",'*',$searchCondition,"","");
            }else{
                $total_data  = $operation->get_data("team_referral_code",'*',$searchCondition,"","");
            }
            
            $data = $operation->get_data("team_referral_code",'*',$searchCondition,"","",$limit,$lastrow);
           
            ///////////for pagination/////////////
            $lastrow = $lastrow + $data["num_rows"];
            $total_team_avg = ceil($total_data["num_rows"]/3);
                  
            if($page_no > 0){
                // $loadMore = 1;
            }else{
                $page_no = 0;
            }
      
            $pagination = array(
                "page_no"=>(string)$page_no,
                "last_row"=>(string)$lastrow,
                "total_page"=>$total_team_avg,
            );
           
            ///////////pagination End/////////////
            // echo "<pre>";
            // print_r($data);
            // die();
            if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["referrel_id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["team_member_id"] = $dataRow->member_id;
                    if(strlen($dataRow->id) > 0){
                        $country_data  = $operation->get_data("team_member",'*',array('id'=>$dataRow->member_id));
                        //$returnArr[$dataRowCount]["team_member_id"] = $country_data['result'][0]->id;
                        $returnArr[$dataRowCount]["team_member_name"] = $country_data['result'][0]->name;
                        $returnArr[$dataRowCount]["team_member_email"] = $country_data['result'][0]->email;
                        $returnArr[$dataRowCount]["team_member_phone"] = $country_data['result'][0]->phone_no;
                    }
                    
                    $returnArr[$dataRowCount]["code"] = $dataRow->code;
                    $returnArr[$dataRowCount]["is_used"] = $dataRow->is_used;
                    //$returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $returnArr[$dataRowCount]["user_type"] = $user_type;
                    $returnArr[$dataRowCount]["user_id"] = $user_id;
                    
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr,$pagination);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
           
        }
        public function search(){
            $operation = new Operation();
            $text = $this->input_get("text");
            $user_id = $this->input_get("user_id");
            $user_type = $this->input_get("user_type");
            ////////////////////////////////////////
            // $searchCondition = array();
            // if($user_type == 1){
            //     $searchCondition = array_merge($searchCondition,array());
            // }
            // if($user_type == 2){
            //     $searchCondition = array_merge($searchCondition,array("member_id"=>$user_id));
            // }
            ///////////////////////////////////////
            $searchLikeCondition = array();
            if(strlen($text) > 0){
                $searchLikeCondition = array_merge($searchLikeCondition,array('email'=>$text));
            }
            $data  = $operation->get_data("team_member",'*',"","","","","",$searchLikeCondition);
            if(!empty($data)){
                $find_user_id = $data['result'][0]->id;
                $find_user_type = $data['result'][0]->member_type;
            }

           // echo "<pre>";
           // print_r($data);
        //    echo $user_id."---".$user_type;
        //    die();
        $searchCondition2 = array();
        if(strlen($text) > 0){
            if($user_type == 1){
                $searchCondition2 = array_merge($searchCondition2,array("member_id"=>$find_user_id));
            }
            if($user_type == 2){
                $searchCondition2 = array_merge($searchCondition2,array("member_id"=>$user_id));
            }
        }else{
            if($user_type == 1){
                $searchCondition2 = array_merge($searchCondition2,array());
            }
            if($user_type == 2){
                $searchCondition2 = array_merge($searchCondition2,array("member_id"=>$user_id));
            }
        }

            $data  = $operation->get_data("team_referral_code",'*',$searchCondition2,"","");
            if($data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["referrel_id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["team_member_id"] = $dataRow->member_id;
                    if(strlen($dataRow->id) > 0){
                        $country_data  = $operation->get_data("team_member",'*',array('id'=>$dataRow->member_id));
                        //$returnArr[$dataRowCount]["team_member_id"] = $country_data['result'][0]->id;
                        $returnArr[$dataRowCount]["team_member_name"] = $country_data['result'][0]->name;
                        $returnArr[$dataRowCount]["team_member_email"] = $country_data['result'][0]->email;
                        $returnArr[$dataRowCount]["team_member_phone"] = $country_data['result'][0]->phone_no;
                    }
                    
                    $returnArr[$dataRowCount]["code"] = $dataRow->code;
                    $returnArr[$dataRowCount]["is_used"] = $dataRow->is_used;
                    //$returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
        }

        public function referral_network(){
            $operation = new Operation();
            $userId = $this->input_get("user_id");
            $lastRow = $this->input_get("last_row");
            $limit = $this->input_get("limit");
            if(strlen($lastRow) == 0){
                $lastRow = 0;
            }
            if(strlen($limit) == 0){
                $limit = 10;
            }
            if(strlen($userId) > 0){
                $userDetails = $operation->get_data("users",'id,wallet_point,referral_point,chain_code',array("id"=>$userId),"id","DESC","0","1");
                if($userDetails["num_rows"] > 0){
                    $chainCode = $userDetails["result"][0]->chain_code;
                    $sponsoredCount = 0;
                    $networkCount = 0;
                    $getSponsored = $operation->get_data("user_referral",'id,referred_by',array("referred_by"=>$userId),"id","DESC");
                    $sponsoredCount = $getSponsored["num_rows"];

                    $getNetwork = $operation->get_data("users",'id,chain_code',array("id !="=>$userId),"id","DESC","","",array("chain_code"=>$chainCode."-" ));
                    $networkCount = $getNetwork["num_rows"];

                    $commonDataArr = array(
                        "wallet_point"=>(string)number_format((float)$userDetails["result"][0]->wallet_point, 1, '.', ''),
                        "referral_point"=>(string)number_format((float)$userDetails["result"][0]->referral_point, 1, '.', ''),
                        "sponsoredCount"=>(string)$sponsoredCount,
                        "networkCount"=>(string)($networkCount),
                        "totalNetworkCount"=>(string)($sponsoredCount+$networkCount)
                    );
                    $sponsoredListData = $sponsoredListReturn = array();
                    $sponsoredListPagination = array();
                    $getSponsoredList = $operation->get_data("user_referral",'id,user_id,referred_by',array("referred_by"=>$userId),"id","DESC",$limit,$lastRow);
                    if($getSponsoredList["num_rows"] > 0){
                        $sponsoredListUserArr = array();
                        foreach($getSponsoredList["result"] as $getSponsoredListRow){
                            array_push($sponsoredListUserArr, $getSponsoredListRow->user_id);
                        }
                        $sponsoredList = $operation->get_data("users",'id,name,image,added_on,chain_code',array(),"id","DESC","","",array(),array("id"=>$sponsoredListUserArr ));
                        
                        $sponsoredListRowCount = 0;
                        foreach($sponsoredList["result"] as $sponsoredListRow){
                            $sponsoredListData[$sponsoredListRowCount]["user_id"] = $sponsoredListRow->id;
                            $sponsoredListData[$sponsoredListRowCount]["name"] = $sponsoredListRow->name;
                            $sponsoredListData[$sponsoredListRowCount]["image"] = $sponsoredListRow->image;
                            $joinedOn = date("Y-m-d",strtotime($sponsoredListRow->added_on));
                            $joinDays = date_diff(date_create(date("Y-m-d")),date_create($joinedOn));
                            $sponsoredListData[$sponsoredListRowCount]["days_joined"] = $joinDays->format('%d');
                            $currChainCode = $sponsoredListRow->chain_code;
                            $getCurrNetwork = $operation->get_data("users",'id,chain_code',array("id !="=>$userId),"id","DESC","","",array("chain_code"=>$currChainCode));
                            $sponsoredListData[$sponsoredListRowCount]["network_count"] = (string)$getCurrNetwork["num_rows"];;
                            $sponsoredListData[$sponsoredListRowCount]["reward_earned"] = "3000";
                            $sponsoredListRowCount++;
                        }
                        $lastRow = $lastRow+$getSponsoredList["num_rows"];
                        $sponsoredListPagination["last_row"] = (string)$lastRow;
                        $getSponsoredList = $operation->get_data("user_referral",'id,referred_by',array("referred_by"=>$userId),"id","DESC",$limit,$lastRow);
                        if($getSponsoredList["num_rows"] > 0){
                            $sponsoredListPagination["load_more"] = (string)1;
                        }else{
                            $sponsoredListPagination["load_more"] = (string)0;
                        }
                        $sponsoredListReturn["data"] = $sponsoredListData;
                        $sponsoredListReturn["pagination"] = $sponsoredListPagination;
                    }else{
                        $sponsoredListPagination["last_row"] = (string)0;
                        $sponsoredListPagination["load_more"] = (string)0;
                        $sponsoredListReturn["data"] = array();
                        $sponsoredListReturn["pagination"] = $sponsoredListPagination;
                    }
                    $returnArr = array(
                        "common_data" => $commonDataArr,
                        "sponsored_list"=>$sponsoredListReturn,
                        "network_list"=>$this->users_network_calculation($userId,$lastRow,$limit)
                    );
                    return $this->success_response("Data list found",$returnArr);
                }else{
                    return $this->error_response("Sorry! Invalid user id!");
                }
            }else{
                return $this->error_response("Sorry! No user id required!");
            }
        }

        public function reward_point_distributions(){
            $operation = new Operation();
            $userReferral = $operation->get_data("user_referral",'*',array("is_rewarded"=>0),"id","ASC","1","0");
            if($userReferral["num_rows"] > 0){
                foreach($userReferral["result"] as $userReferralRow){
                    $referredById = $userReferralRow->user_id;
                    $this->get_referred_by_user($referredById,1);
                }
            }

        }

        protected function get_referred_by_user($userId,$level=1){
            $operation = new Operation();
            $userReferral = $operation->get_data("user_referral",'*',array("user_id"=>$userId));
            if($userReferral["num_rows"] > 0){
                $currRefById = $userReferral["result"][0]->referred_by;
                $currRefUserPoint = $this->reward_calculation($level);
                $this->db = \Config\Database::connect();
                $builder = $this->db->table("users");
                $walletPoint = 'wallet_point+'.(int)$currRefUserPoint;
                $referralPoint = 'referral_point+'.(int)$currRefUserPoint;
                $builder->set('wallet_point', $walletPoint, FALSE);
                $builder->set('referral_point', $referralPoint, FALSE);
                $builder->where(array("id"=>$currRefById));
                $builder->update();
                $transactionData = array(
                    "user_id"=>$currRefById,
                    "type"=>1,
                    "points"=>$currRefUserPoint,
                    "details"=>"Referral Reward"
                );
                $operation->insert_data("user_wallet_transaction",$transactionData);
                $updateData = array("is_rewarded"=>1);
                $operation->update_data("user_referral",array("id"=>$userReferral["result"][0]->id),$updateData);
                $newLevel = $level+1;
                $this->get_referred_by_user($currRefById,$newLevel);
            }
            
        }


        protected function reward_calculation($level){
            $reward = 3000;
            $rewardPercentage = 100; 
            if($level == 1){
                $prevRewardPercentage = 100;
                $rewardPercentage = 100;
                $rewardPoint = "3000";
            }else if($level > 1){
                switch ($level) {
                    case 2:
                        $prevRewardPercentage = 100;
                        $rewardPercentage = 10;
                        $rewardPoint = "250";
                        break;
                    case 3:
                        $prevRewardPercentage = 10;
                        $rewardPercentage = 9;
                        $rewardPoint = "22.5";
                        break;
                    case 4:
                        $prevRewardPercentage = 9;
                        $rewardPercentage = 8;
                        $rewardPoint = "1.8";
                        break;
                    case 5:
                        $prevRewardPercentage = 8;
                        $rewardPercentage = 7;
                        $rewardPoint = "0.126";
                        break;
                    case 6:
                        $prevRewardPercentage = 7;
                        $rewardPercentage = 6;
                        $rewardPoint = "0.00756";
                        break;
                    case 7:
                        $prevRewardPercentage = 6;
                        $rewardPercentage = 5;
                        $rewardPoint = "0.000378";
                        break;
                    case 8:
                        $prevRewardPercentage = 5;
                        $rewardPercentage = 4;
                        $rewardPoint = "0.00001512";
                        break;
                    case 9:
                        $prevRewardPercentage = 4;
                        $rewardPercentage = 3;
                        $rewardPoint = "0.0000004536";
                        break;
                    case 10:
                        $prevRewardPercentage = 3;
                        $rewardPercentage = 2;
                        $rewardPoint = "0.000000009072";
                        break;
                    case 11:
                        $prevRewardPercentage = 2;
                        $rewardPercentage = 1;
                        $rewardPoint = "0.00000000009072";
                        break;
                    case 12:
                        $prevRewardPercentage = 1;
                        $rewardPercentage = 0.10;
                        $rewardPoint = "0.00000000000009072";
                        break;
                    default:
                        $prevRewardPercentage = 0.10;
                        $rewardPercentage = 0.01;
                        $rewardPoint = "0.00000000000000001";
                }
            }
            // $usersPercentage = $this->cal_percentage($rewardPercentage,$level,$prevRewardPercentage);
            return (string)$rewardPoint;

        }

        public function users_network_calculation($userId,$lastRow,$limit){
            $operation = new Operation();
            $this->db = \Config\Database::connect();
            $networkData = array();
            $getUsers = $operation->get_data("users",'id,chain_code,status',array('id'=>$userId));
            if($getUsers["num_rows"] > 0){
                $builder = $this->db->table("users");
                $builder->like('chain_code', $getUsers["result"][0]->chain_code."-", 'after'); 
                $builder->limit($limit, $lastRow);
                $query = $builder->get();
                $getUsersNetwork = $query->getResult();
                if(count($getUsersNetwork)){
                    $getUsersNetworkRowCount = 0;
                    foreach($getUsersNetwork as $getUsersNetworkRow){
                        $networkData[$getUsersNetworkRowCount]["user_id"] = $getUsersNetworkRow->id;
                        $networkData[$getUsersNetworkRowCount]["name"] = $getUsersNetworkRow->name;
                        $networkData[$getUsersNetworkRowCount]["image"] = $getUsersNetworkRow->image;
                        $joinedOn = date("Y-m-d",strtotime($getUsersNetworkRow->added_on));
                        $joinDays = date_diff(date_create(date("Y-m-d")),date_create($joinedOn));
                        $networkData[$getUsersNetworkRowCount]["days_joined"] = $joinDays->format('%d');
                        $networkData[$getUsersNetworkRowCount]["network_count"] = $getUsersNetworkRow->total_network;
                        $networkData[$getUsersNetworkRowCount]["reward_earned"] = "";
                        $getUsersNetworkRowCount++;
                    }
                }
                $lastRow = $lastRow+$limit;
                $builder = $this->db->table("users");
                $builder->like('chain_code', $getUsers["result"][0]->chain_code."-", 'after'); 
                $builder->limit(1, $lastRow);
                $query = $builder->get();
                $getUsersNetworkPagi = $query->getResult();
                if(count($getUsersNetworkPagi)){
                    $load_more = 1;
                }else{
                    $load_more = 0;
                }

                $sponsoredListPagination["last_row"] = (string)count($getUsersNetwork);
                $sponsoredListPagination["load_more"] = (string)$load_more;
                $networkListReturn["data"] = $networkData;
                $networkListReturn["pagination"] = $sponsoredListPagination;
                return $networkListReturn;
            }else{
                return $networkData;
            }
        }
    }
?>