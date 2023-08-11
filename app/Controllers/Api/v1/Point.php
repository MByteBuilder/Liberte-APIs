<?php

    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    //use App\Models\Mailler;


    class Point extends ApiController{

        public function point_list(){
            $operation = new Operation();
            $id = $this->input_get("id");

            $lastrow = $this->input_get("lastrow");
            $page_no = $this->input_get("page_no");
            $limit = 5;
            if((!isset($lastrow)) || (empty($lastrow)) ){
                $lastrow = 0;
            }else{
                $lastrow = ($page_no - 1)*5;
            }
            $searchCondition = array();
            if(strlen($id)>0){
                $searchCondition = array_merge($searchCondition,array("id"=>$id));
            }else{
                $searchCondition = array_merge($searchCondition,array());
            }
            // if($user_type == 2){
            //     $searchCondition = array_merge($searchCondition,array("member_id"=>$user_id));
            // }
            // if(strlen($is_used) > 0){
            //     $searchCondition = array_merge($searchCondition,array("is_used"=>$is_used));
            // }
           
            // if($user_type == 1){
            //     $total_data  = $operation->get_data("team_referral_code",'*',$searchCondition,"","");
            // }else{
                 //$total_data  = $operation->get_data("app_reward_settings",'*',$searchCondition,"","");
            // }
            
            
            $total_data  = $operation->get_data("app_reward_settings",'*',"","",""); 
            $data  = $operation->get_data("app_reward_settings",'*',$searchCondition,"","",$limit,$lastrow);
            ///////////for pagination/////////////
            $lastrow = $lastrow + $data["num_rows"];
            $total_team_avg = ceil($total_data["num_rows"]/5);
                  
            if($page_no > 0){
              
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
                    $returnArr[$dataRowCount]["id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["account_type"] = $dataRow->account_type;
                    $returnArr[$dataRowCount]["point_name"] = $dataRow->point_name;
                    $returnArr[$dataRowCount]["point_type"] = $dataRow->point_type;
                    $returnArr[$dataRowCount]["required_point"] = $dataRow->required_point;
                    $returnArr[$dataRowCount]["activity_id"] = $dataRow->activity_id;
                    $returnArr[$dataRowCount]["app_module_id"] = $dataRow->app_module_id;
                    if(strlen($dataRow->app_module_id) > 0){
                        $module_data  = $operation->get_data("app_module",'*',array('id'=>$dataRow->app_module_id));
                      
                        $returnArr[$dataRowCount]["module_id"] = $module_data['result'][0]->id;
                        $returnArr[$dataRowCount]["module_name"] = $module_data['result'][0]->name;
                        $returnArr[$dataRowCount]["module_status"] = $module_data['result'][0]->status;
                      
                    }
                    
                                       
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr,$pagination);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
           
        }
        public function point_edit(){
            $operation = new Operation();
            $id = $this->input_post("id");
            $points = $this->input_post("points");
            $searchCondition = array();
             if(strlen($id)>0){
              
                    if(strlen($points)>0){
                        $searchCondition = array_merge($searchCondition,array("id"=>$id));
                    }else{
                        $searchCondition = array_merge($searchCondition,array());
                    }

                $data = $operation->update_data("app_reward_settings", $searchCondition,array("required_point"=>$points));
                if($data){
                    return $this->success_response("Points updated");
                }
             }else{
                return $this->error_response("Sorry! No activity found!");
             }
        }
    }

?>

