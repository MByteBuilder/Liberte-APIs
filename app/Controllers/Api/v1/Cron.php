<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    use App\Models\Mailler;

    date_default_timezone_set('Asia/Dubai');
    class Cron extends ApiController{
        
        public function add_daily_checkin_reminder(){
            $operation = new Operation();
            $userData = $operation->get_data("users",'id,is_logged_in,device_type,fcm_token',array("is_logged_in"=>1));
            if($userData["num_rows"]>0){
                foreach($userData["result"] as $userDataRow){
                    if( ($userDataRow->device_type !=0) && (!empty($userDataRow->fcm_token))){
                        $checkDailyCheckinData = $operation->get_data("user_daily_check_in",'*',array("dateon"=>date("Y-m-d")));
                        if($checkDailyCheckinData["num_rows"] == 0){
                            $checkExist = $operation->get_data("push_tracking",'*',array("user_id"=>$userDataRow->id,"notification_id"=>2,"dateon"=>date("Y-m-d")));
                            if($checkExist["num_rows"] == 0){
                                $addToPush = array(
                                    "user_id"=>$userDataRow->id,
                                    "notification_id"=>2,
                                    "dateon"=>date("Y-m-d")
                                );
                                $operation->insert_data("push_tracking",$addToPush);
                            }
                        }
                    }
                }
                return true;
            }
        }

        public function send_daily_checkin_reminder(){
            $operation = new Operation();
            $notificationData = $operation->get_data("push_tracking",'*',array("status"=>0),'id','ASC',"10","0");
            if($notificationData["num_rows"] > 0){
                foreach($notificationData["result"] as $notificationDataRow){
                    $operation->send_notification($notificationDataRow->user_id,$notificationDataRow->notification_id);
                    $operation->update_data("push_tracking",array('id'=>$notificationDataRow->id),array("status"=>1));
                }
            }
        }
    }

?>