<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    use App\Models\Mailler;


    class Profile extends ApiController{

        public function profile_details(){
            $operation = new Operation();
            $user_id = $this->input_get("user_id");

            $total_data  = $operation->get_data("team_member",'*',array("id"=>$user_id),"","");

            if($total_data["num_rows"] > 0){
                $returnArr = array();
                $dataRowCount = 0;
                foreach($total_data["result"] as $dataRow){
                    $returnArr[$dataRowCount]["admin_id"] = $dataRow->id;
                    $returnArr[$dataRowCount]["admin_name"] = $dataRow->name;
                    $returnArr[$dataRowCount]["admin_email"] = $dataRow->email;
                    
                    
                    $returnArr[$dataRowCount]["password"] = $dataRow->password;
                    $returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["image"] = $dataRow->image;
                    $returnArr[$dataRowCount]["country"] = $dataRow->country;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $returnArr[$dataRowCount]["user_type"] = $dataRow->member_type;
                    $returnArr[$dataRowCount]["admin_access"] = $dataRow->menu_access;
                    
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
        }
        public function profile_edit(){
            $operation = new Operation();

            $id = $this->input_get("id");
            $name = $this->input_get("name");
            $email = $this->input_get("email");
            $phone_no = $this->input_get("phone_no");
            $country_code = $this->input_get("country_code");
            $old_image = $this->input_get("old_image");
            $logo = $this->input_get("logo");
            // echo $name;
            // die();
            if($logo!="undefined"){
                $cover_img = $_FILES['logo'];
                $cover_img_tmp = $_FILES['logo']['tmp_name'];
                $coverFile_name = $cover_img['name'];
                $upload_path = "https://projectliberte.io/lbt/assets/admin/img/";
                $uploaded_cover_img = move_uploaded_file($cover_img_tmp, $upload_path.$coverFile_name);
            }else{
                $coverFile_name= $old_image;
            }
            if(!empty($country_code)){
                $country_code_x = $country_code;
            }else{
                $country_code_x = '';
            }
            if(strlen($id) > 0){
                $data = array(
                    "name"=>$name,
                    "email"=>$email,
                    "phone_no"=>$phone_no,
                    "country_code"=>$country_code_x,
                    "content"=>$content,
                    "image"=>$coverFile_name,
                    "status"=>1,
                );
                $sql = $this->Function_Model->updateDetailsWithMultipleWhere("team_member",array('id'=>$id),$data);
                //$sql = $this->Function_Model->insertData("home_banner",$data);
                if($sql){
                    $this->success_response("Updated"); 
                }else{
                    $this->error_response("Unable to Update"); 
                }
            }
        }
    }
?>