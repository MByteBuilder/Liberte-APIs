<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    use App\Models\Mailler;


    class Walknearn extends ApiController{

        public function update_user_health_details(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $gender = $this->input_post("gender");
            $height = $this->input_post("height");
            $width = $this->input_post("width");
            if( (strlen($userId) >0 ) && (strlen($gender) >0 ) && (strlen($height) >0 ) && (strlen($width) >0 )){
                $updateUser = $operation->update_data("users",array("id"=>$userId),array("gender"=>$gender,"height"=>$height,"width"=>$width));
                if($updateUser){
                    return $this->success_response("User health details updated!");
                }else{
                    return $this->error_response("Sorry! Try again!");
                }
            }else{
                return $this->error_response("Sorry! user_id, gender, height and width required!");
            }
        }


        public function start_walking(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $lat = $this->input_post("lat");
            $long = $this->input_post("long");
            $stepCount = $this->input_post("step_count");
            if( (strlen($userId) >0 ) && (strlen($lat) >0 ) && (strlen($long) >0 ) ){
                if( (strlen($stepCount) == 0) ){
                    $stepCount = 0;
                }
                $dataToInsert = array(
                    "user_id"=>$userId,
                    "start_lat"=>$lat,
                    "start_long"=>$long,
                    "step_count"=>$stepCount,
                    "started_on"=>date("Y-m-d H:m:s")
                );
                $added = $operation->insert_data("walkearn_user_history",$dataToInsert);
                if($added){
                    return $this->success_response("Step Count added");
                }else{
                    return $this->error_response("Sorry! Please try again!");
                }
            }else{
                return $this->error_response("Sorry! user_id, lat and long required!");
            }

        }

        public function end_walking(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $lat = $this->input_post("lat");
            $long = $this->input_post("long");
            $stepCount = $this->input_post("step_count");
            // $pedometerId = $this->input_post("pedometer_id");

            if( (strlen($userId) >0 ) && (strlen($lat) >0 ) && (strlen($long) >0 ) && (strlen($stepCount) >0 )){
                $getPedometerDetails = $operation->get_data("walkearn_user_history",'*',array("user_id"=>$userId,'status'=>0));
                
                if($getPedometerDetails["num_rows"] > 0){
                    $getDistance = $this->distance($getPedometerDetails["result"][0]->start_lat,$getPedometerDetails["result"][0]->start_long,$lat,$long,"K");

                    $walknEarnId = $getPedometerDetails["result"][0]->id;
                    $totalDistance = number_format((float)$getDistance, 1, '.', ''); // Get to One decimal number
                    $getKmData = explode(".",$totalDistance);

                    if($getKmData[0] >= 1){
                        if($getKmData[0] <= 5 && $getKmData[0] >= 1){
                            $reward = ($getKmData[0] * 100) +  ($getKmData[0] * $getKmData[0] * 10); // Reward count
    
                        }else{
                            return $this->error_response("Error! Ultra Humanic data!");
                        }
                    }else{
                        $reward = 0;
                    }
                    $updateWalkData = array(
                        'step_count'=> $stepCount,
                        'end_lat' => $lat,
                        'end_long' => $long,
                        'ended_on' => date("Y-m-d H:m:s"),
                        'status' => 1,

                    );
                    $updateWalk = $operation->update_data("walkearn_user_history",array('id'=>$walknEarnId),$updateWalkData); // update walkearn_user_history
                    if($updateWalk){
                        $userDetails = $operation->get_data("users",'id,kyc_verify,wallet_point',array("id"=>$userId));
                        $walletPoint = $userDetails['result'][0]->wallet_point;
                        $newWalletPoint = $walletPoint + $reward;

                        $updateWalkData = array(
                            'wallet_point'=> $newWalletPoint,
                        );
                        $updateUser = $operation->update_data("users",array('id'=>$userId),$updateWalkData); // Update users 'wallet_point'
                        if($updateUser){
                            $transactionData = array(
                                "user_id"=>$userId,
                                "type"=>2,
                                "points"=>$reward,
                                "details"=>"Walk & Earn Reward"
                            );
                            $operation->insert_data("user_wallet_transaction",$transactionData);
                            return $this->success_response("Greate!! Go ahead!");
                        }else{
                            return $this->error_response("Error!");
                        }
                    }
                }else{
                    return $this->error_response("Sorry! Invalid request!");
                }
                
                
            }else{
                return $this->error_response("Sorry! user_id, lat, long, step_count required!");
            }
        }


        public function update_walking(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $stepCount = $this->input_post("step_count");
            $gpsFlag = $this->input_post("gps_flag");
            $lat = $this->input_post("lat");
            $long = $this->input_post("long");
            if( (strlen($userId) >0 ) && (strlen($stepCount) >0 ) && (strlen($gpsFlag) >0 )){
                $currentDate = date("Y-m-d");
                $checkCurrDateData =  $operation->get_data("walkearn_user_history",'*',array("user_id"=>$userId,'date'=>$currentDate));
                if($checkCurrDateData["num_rows"] > 0){
                    if($gpsFlag == 1){
                        if( (strlen($lat) >0 ) && (strlen($long) >0 ) ){

                            $oldLat = $checkCurrDateData["result"][0]->end_lat;
                            $oldLong = $checkCurrDateData["result"][0]->end_long;
                            if((!empty($oldLat)) && (!empty($oldLong))){
                                $getDistance = $this->distance($oldLat,$oldLong,$lat,$long,"K");
                                $totalDistance = number_format((float)$getDistance, 1, '.', ''); // Get to One decimal number
                                $getKmData = explode(".",$totalDistance);
                                if($getKmData[0] >= 1){
                                    if($getKmData[0] <= 5 && $getKmData[0] >= 1){
                                        $reward = ($getKmData[0] * 100) +  ($getKmData[0] * $getKmData[0] * 10); // Reward count
                                    }else{
                                        return $this->error_response("Error! Ultra Humanic data!");
                                    }
                                }else{
                                    $reward = 0;
                                }
                            }else{
                                $reward = 0;
                            }
                            

                            
                            if($reward > 0){
                                $userDetails = $operation->get_data("users",'id,kyc_verify,wallet_point',array("id"=>$userId));
                                $walletPoint = $userDetails['result'][0]->wallet_point;
                                $newWalletPoint = $walletPoint + $reward;
    
                                $updateWalkData = array(
                                    'wallet_point'=> $newWalletPoint,
                                );
                                $updateUser = $operation->update_data("users",array('id'=>$userId),$updateWalkData);
                                $transactionData = array(
                                    "user_id"=>$userId,
                                    "type"=>2,
                                    "points"=>$reward,
                                    "details"=>"Walk & Earn Reward"
                                );
                                $operation->insert_data("user_wallet_transaction",$transactionData);
                            }
                            
                            $updateWalkData = array("step_count"=>$stepCount,'ended_on' => date("Y-m-d H:m:s"),"end_lat"=>$lat,"end_long"=>$long);
                            $updateWalk = $operation->update_data("walkearn_user_history",array('user_id'=>$userId,"date"=>$currentDate),$updateWalkData);
                            return $this->success_response("Great!! Go ahead!");
                        }else{
                            return $this->error_response("Sorry! for gps_flag 1 lat, long required!");
                        }
                        
                    }else{
                        $updateWalkData = array("step_count"=>$stepCount);
                        $updateWalk = $operation->update_data("walkearn_user_history",array('user_id'=>$userId,"date"=>$currentDate),$updateWalkData);
                        return $this->success_response("Great!! Go ahead but your GPS is off so we will not get anu reward point!");
                    }
                }else{
                    if($gpsFlag == 1){
                        if( (strlen($lat) >0 ) && (strlen($long) >0 ) ){
                            $insertData = array(
                                "user_id"=>$userId,
                                "date"=>date("y-m-d"),
                                "end_lat"=>$lat,
                                "end_long"=>$long,
                                "step_count"=>$stepCount,
                                "started_on"=>date("Y-m-d H:m:s")
                            );
                            $added = $operation->insert_data("walkearn_user_history",$insertData);
                        }else{
                            return $this->error_response("Sorry! for gps_flag 1 lat, long required!");
                        }
                    }else{
                        $insertData = array(
                            "user_id"=>$userId,
                            "date"=>date("y-m-d"),
                            "step_count"=>$stepCount,
                            "started_on"=>date("Y-m-d H:m:s")
                        );
                        $added = $operation->insert_data("walkearn_user_history",$insertData);
                    }
                   
                    if($added){
                        return $this->success_response("Step Count added");
                    }else{
                        return $this->error_response("Sorry! Please try again!");
                    }
                }
            }else{
                return $this->error_response("Sorry! user_id,gpsFlag and step_count required!");
            }
        }
        

        public function walking_history(){
            $operation = new Operation();
            $userId = $this->input_get("user_id");
            $date = $this->input_get("date");
            if( (strlen($userId) >0 )){
                $searchCondition = array("user_id"=>$userId);
                if((strlen($date)>0)){
                    $searchCondition = array_merge($searchCondition,array("date"=>date("Y-m-d",strtotime($date))));
                }
                $checkActivity = $operation->get_data("walkearn_user_history",'*',$searchCondition);
                if($checkActivity["num_rows"] > 0){
                    $returnArr = array();
                    $checkActivityRowCount = 0;
                    foreach($checkActivity["result"] as $checkActivityRow){
                        $returnArr[$checkActivityRowCount]["id"] = $checkActivityRow->id;
                        $returnArr[$checkActivityRowCount]["step_count"] = $checkActivityRow->step_count;
                        $returnArr[$checkActivityRowCount]["date"] = date("d/m/Y",strtotime($checkActivityRow->date));
                        $checkActivityRowCount++;
                    }
                    return $this->success_response("Walk and earn activity",$returnArr);
                }else{
                    return $this->error_response("Sorry! No activity found!");
                }
            }else{
                return $this->error_response("Sorry! user_id required!");
            }
        }

        protected function distance($lat1, $lon1, $lat2, $lon2, $unit) {
            if (($lat1 == $lat2) && ($lon1 == $lon2)) {
              return 0;
            }else {
                $theta = $lon1 - $lon2;
                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;
                $unit = strtoupper($unit);
            
                if ($unit == "K") {
                    return ($miles * 1.609344);
                } else if ($unit == "N") {
                    return ($miles * 0.8684);
                } else {
                    return $miles;
                }
            }
        }

    }

?>