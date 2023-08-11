<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;

    class Drinkingwater extends ApiController{

        public function set_goal(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $startDate = $this->input_post("start_date");
            $goal = $this->input_post("goal");

            if( (strlen($userId)>0) && (strlen($startDate)>0) && (strlen($goal)>0) ){
                $checkGoal = $operation->get_data("user_drinking_water_goal",'id,user_id',array("user_id"=>$userId,"started_on"=>date("Y-m-d",strtotime($startDate))));
                if($checkGoal["num_rows"] == 0){
                    $dataToInsert = array(
                        "user_id"=>$userId,
                        "goal"=>$goal,
                        "started_on"=>date("Y-m-d",strtotime($startDate)),
                    );
                    $addData = $operation->insert_data("user_drinking_water_goal",$dataToInsert);
                    if($addData){
                        $getReward = $operation->get_data("app_reward_settings",'*',array("id"=>6));
                        $reward = $getReward["result"][0]->required_point;
                        $this->db = \Config\Database::connect();
                        $builder = $this->db->table("users");
                        $walletPoint = 'wallet_point+'.$reward;
                        $builder->set('wallet_point', $walletPoint, FALSE);
                        $builder->where(array("id"=>$userId));
                        $builder->update();

                        $transactionData = array(
                            "user_id"=>$userId,
                            "type"=>1,
                            "points"=>$reward,
                            "details"=>$getReward["result"][0]->point_name
                        );
                        $operation->insert_data("user_wallet_transaction",$transactionData);
                        return $this->success_response("Drinking water goal set successfully!");

                    }else{
                        return $this->error_response("Sorry! try again!");
                    }
                }else{
                    return $this->error_response("Sorry! goal already set, edit goal instate of adding new!");
                }
            }else{
                return $this->error_response("Sorry! user_id, start_date and goal required!");
            }
        }


        public function goal_activity(){
            $operation = new Operation();
            $userId = $this->input_get("user_id");
            if( (strlen($userId)>0) ){
                $checkGoal = $operation->get_data("user_drinking_water_goal",'*',array("user_id"=>$userId));
                $returnArr = array();
                $returnArrRowCount = 0;
                if($checkGoal["num_rows"] > 0){
                    foreach($checkGoal["result"] as $checkGoalRow){
                        $returnArr[$returnArrRowCount]["date"] = $checkGoalRow->started_on;
                        $returnArr[$returnArrRowCount]["goal"] = $goal = $checkGoalRow->goal;
                        $returnArr[$returnArrRowCount]["total_glass"] = $totalGlass = $checkGoalRow->goal/200;
                        $activityArr = array();
                        $drinkCount = 0;
                        $emptyCount = $totalGlass;
                        $getActivity = $operation->get_data("user_drinking_water_activity",'*',array("goal_id"=> $checkGoalRow->id));
                        $drinkCount = $getActivity["num_rows"];
                        $emptyCount = $emptyCount - $getActivity["num_rows"];
                        $getActivityRowCount = 0;
                        if($getActivity["num_rows"] > 0){
                            foreach($getActivity["result"] as $getActivityRow){
                                $activityArr[$getActivityRowCount]["time"] = date("d/m/Y",strtotime($getActivityRow->added_on));
                                $activityArr[$getActivityRowCount]["drink"] = $getActivityRow->drink." ML";
                                $getActivityRowCount++;
                            }
                        }
                        $returnArr[$returnArrRowCount]["drink_count"] = $drinkCount;
                        $returnArr[$returnArrRowCount]["empty_count"] = $emptyCount;
                        $returnArr[$returnArrRowCount]["activity"] = $activityArr;
                        $returnArrRowCount++;
                    }
                    return $this->success_response("Drinking water goal activity!",$returnArr);
                }else{
                    return $this->error_response("Sorry! Please set your goal first!");
                }
            }else{
                return $this->error_response("Sorry! user_id required!");
            }
            
        }

        public function add_drinking_water_activity(){
            $operation = new Operation();
            date_default_timezone_set('Asia/Kolkata');
            $userId = $this->input_post("user_id");
            $drink = $this->input_post("drink");
            if( (strlen($userId)>0) && (strlen($drink)>0) ){
                $checkGoal = $operation->get_data("user_drinking_water_goal",'id,user_id',array("user_id"=>$userId,"started_on"=>date("Y-m-d")));
                if($checkGoal["num_rows"] > 0){
                    $dataToInsert = array(
                        "user_id"=>$userId,
                        "goal_id"=>$checkGoal["result"][0]->id,
                        "drink"=>$drink,
                        "date"=>date("Y-m-d"),
                        "added_on"=> date("Y-m-d H:i:s")
                    );
                    $addData = $operation->insert_data("user_drinking_water_activity",$dataToInsert);
                    if($addData){
                        $getReward = $operation->get_data("app_reward_settings",'*',array("id"=>7));
                        $reward = $getReward["result"][0]->required_point;
                        $this->db = \Config\Database::connect();
                        $builder = $this->db->table("users");
                        $walletPoint = 'wallet_point+'.$reward;
                        $builder->set('wallet_point', $walletPoint, FALSE);
                        $builder->where(array("id"=>$userId));
                        $builder->update();

                        $transactionData = array(
                            "user_id"=>$userId,
                            "type"=>1,
                            "points"=>$reward,
                            "details"=>$getReward["result"][0]->point_name
                        );
                        $operation->insert_data("user_wallet_transaction",$transactionData);
                        return $this->success_response("Drinking water activity added successfully!");

                    }else{
                        return $this->error_response("Sorry! try again!");
                    }
                }else{
                    return $this->error_response("Sorry! Set your goal first!");
                }
            }else{
                return $this->error_response("Sorry! user_id and drink required!");
            }
        }

        public function drinking_water_activity_history(){
            $operation = new Operation();
            date_default_timezone_set('Asia/Kolkata');
            $userId = $this->input_get("user_id");
            $date = $this->input_get("date");

            if( (strlen($userId)>0) ){
                $searchCondition = array("user_id"=>$userId);
                if((strlen($date)>0)){
                    $searchCondition = array_merge($searchCondition,array("date"=>date("Y-m-d",strtotime($date))));
                }
                $checkActivity = $operation->get_data("user_drinking_water_activity",'*',$searchCondition);
                if($checkActivity["num_rows"] > 0){
                    $returnArr = array();
                    $checkActivityRowCount = 0;
                    foreach($checkActivity["result"] as $checkActivityRow){
                        $returnArr[$checkActivityRowCount]["id"] = $checkActivityRow->id;
                        $returnArr[$checkActivityRowCount]["drink"] = $checkActivityRow->drink;
                        $returnArr[$checkActivityRowCount]["date_time"] = date("d/m/Y H:m",strtotime($checkActivityRow->added_on));
                        $checkActivityRowCount++;
                    }
                    return $this->success_response("Drinking water activity",$returnArr);
                }else{
                    return $this->error_response("Sorry! No activity found!");
                }
            }else{
                return $this->error_response("Sorry! user_id required!");
            }
        }


        public function edit_goal(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $startDate = $this->input_post("start_date");
            $goal = $this->input_post("goal");
            if( (strlen($userId)>0) && (strlen($startDate)>0) && (strlen($goal)>0) ){
                $checkGoal = $operation->get_data("user_drinking_water_goal",'id,user_id',array("user_id"=>$userId));
                if($checkGoal["num_rows"] > 0){
                    $updateData = array(
                        "goal"=>$goal,
                        "started_on"=>date("Y-m-d",strtotime($startDate)),
                    );
                    $operation->update_data("user_drinking_water_goal",array('user_id'=>$userId),$updateData);
                    return $this->success_response("Drinking water goal updated");
                }else{
                    return $this->error_response("Sorry! Set goal first!");
                }
            }else{
                return $this->error_response("Sorry! user_id, start_date and goal required!");
            }
        }
    }

?>