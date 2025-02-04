<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    use App\Models\Mailler;


    class Team extends ApiController{

        public function list(){
            $operation = new Operation();

            $id = $this->input_get("id");
            $name = $this->input_get("name");
            $email = $this->input_get("email");

            $lastrow = $this->input_get("lastrow");
            $page_no = $this->input_get("page_no");
            $limit = 3;
            if((!isset($lastrow)) || (empty($lastrow)) ){
                $lastrow = 0;
            }else{
                $lastrow = ($page_no - 1)*3;
            }

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
            $total_data  = $operation->get_data("team_member",'*',"","",""); 
            $data  = $operation->get_data("team_member",'*',$searchCondition,"","",$limit,$lastrow);

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
                    $returnArr[$dataRowCount]["country"] = $dataRow->country;
                        if(strlen($dataRow->country) > 0){
                            $country_data  = $operation->get_data("app_country",'*',array('id'=>$dataRow->country));
                            $returnArr[$dataRowCount]["country_id"] = $country_data['result'][0]->id;
                            $returnArr[$dataRowCount]["country_name"] = $country_data['result'][0]->name;
                        }
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
        public function team_add(){
            $operation = new Operation();
            $mailer =  new Mailler();

            $name = $this->input_post("name");
            $raw_password = rand(1,1000000);
            $password = md5($raw_password);
            $email = $this->input_post("email"); 
            $phone_no = $this->input_post("phone_no");
            $country_code = $this->input_post("country_code");
            // echo $name."-".$phone_no."-".$email."-".$country_code;
            // die();
            //////////////Mailer////////////////
            $to = $email;
            $subject = "Thank you For Create a Relation with US";
            $message = "Hello ".$name." Your Pasword is ".$raw_password;
            
            //$subject = "Contact";
            header('Content-type: text/plain');
            
            // $htmlContent = ' 
            //         <html> 
            //         <head> 
            //         </head> 
            //         <body> 
            //             <table>
            //                 <tr style="margin-top:10px;"> 
            //                     <th>Name:</th><td>'.$name.'</td> 
            //                 </tr>
            //                 <tr style="margin-top:10px;"> 
            //                     <th>Email:</th><td>'.$email.'</td> 
            //                 </tr> 
            //                 <tr style="margin-top:10px;"> 
            //                     <th>Service:</th><td>'.$subject.'</td> 
            //                 </tr> 
            //                 <tr style="margin-top:10px;"> 
            //                 <th>Phone:</th><td>'.$raw_password.'</td> 
            //                 </tr>
            //                 <tr style="margin-top:10px;"> 
            //                 <th>Message:</th><td>'.$message.'</td> 
            //             </tr> 
            //             </table> 
            //         </body> 
            //         </html>'; 
            $headers = 'Your Password is <span style="color:red;"><b>'.$raw_password.'</b></span>';
           
            $mail_to = $mailer->sent_email($to,$subject,$message,$headers);
            ///////////////////////////////////////
            if((strlen($name) >0) && (strlen($email) >0) && (strlen($phone_no) >0) && (strlen($country_code) >0)){
                $data = array(
                    "name"=>$name,
                    "email"=>$email,
                    "phone_no"=>$phone_no,
                    "country"=>$country_code,
                    "password"=>$password,
                    "status"=> 1
                );
               
                $addData = $operation->insert_data("team_member",$data);
                return $this->success_response("Data Successfully Added");
            }else{
                return $this->error_response("Sorry! try again!");
            }
        }
        public function team_edit(){
            $operation = new Operation();

            $id = $this->input_post("id");
            $name = $this->input_post("name");
            // $email = $this->input_post("email");
            $phone_no = $this->input_post("phone_no");
            if(strlen($name) > 0){
                $name_x = $name;
            }else{
                $name_x = '';
            }
            if(strlen($phone_no) > 0){
                $phone_no_x = $phone_no;
            }else{
                $phone_no_x = '';
            }
            if((strlen($id) >0)){
                $updateData = array(
                    "name"=>$name_x,
                    "phone_no"=>$phone_no_x
                );
                $operation->update_data("team_member",array('id'=>$id),$updateData);
                return $this->success_response("Team updated");
            }else{
                return $this->error_response("Sorry!");
            }
        }
        public function team_del(){
            $operation = new Operation();
            $id = $this->input_get("id");
            if(strlen($id) > 0){
                $updateData = array(
                    "status"=>0
                );
                $operation->update_data("team_member",array('id'=>$id),$updateData);
                return $this->success_response("Delete Successfull");
            }else{
                return $this->error_response("Sorry!");
            }
        }
    }

?>