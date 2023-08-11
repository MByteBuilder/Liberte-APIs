<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;


    class Kyc extends ApiController{
        public function kycs(){
            $operation = new Operation();
            $id=$this->input_get("id");
            $status=$this->input_get("status");
            $searchCondition = array();
            
        
            if( strlen($id)>0){
                $searchCondition = array_merge($searchCondition,array("id"=>$id));
            }
            if( strlen($status)>0){
                $searchCondition = array_merge($searchCondition,array("status"=>$status));
            }
            $kycList = $operation->get_data("user_kyc",'*',$searchCondition,"id","DESC");
            $returnArr = array();
            $kycListRowCount = 0;
            if($kycList["num_rows"] > 0){
                foreach($kycList["result"] as $kycListRow){
                    $returnArr[$kycListRowCount]["id"] = $kycListRow->id;
                    $returnArr[$kycListRowCount]["user_id"] = $kycListRow->user_id;
                    $getUserDetails = $operation->get_data("users",'*',array("id"=>$kycListRow->user_id));
                    $returnArr[$kycListRowCount]["user_name"] = $getUserDetails["result"][0]->name;
                    $returnArr[$kycListRowCount]["user_email"] = $getUserDetails["result"][0]->email;
                    $returnArr[$kycListRowCount]["cnic_no"] = $kycListRow->cnic_no;
                    $getdocumentType = $operation->get_data("app_kyc_documents",'*',array("id"=>$kycListRow->document_type));
                    $returnArr[$kycListRowCount]["document_type"] = $getdocumentType["result"][0]->document_name;
                    $returnArr[$kycListRowCount]["document"] = $kycListRow->document;
                    $returnArr[$kycListRowCount]["govt_id_no"] = $kycListRow->govt_id_no;
                    $returnArr[$kycListRowCount]["added_on"] = $kycListRow->added_on;
                    $date=date_create($kycListRow->added_on);
                    $date1=date_format($date,"d F,Y");
                    $returnArr[$kycListRowCount]["date"] = $date1;
                    $returnArr[$kycListRowCount]["verified_on"] = $kycListRow->verified_on;
                    $returnArr[$kycListRowCount]["status"] = $kycListRow->status;
                    $kycListRowCount++;
                }
                return $this->success_response("Kyc List!",$returnArr);
            }else{
                return $this->error_response("No List Found");
            }
        }
        public function verify_kyc(){
            $operation = new Operation();
            $id=$this->input_post("id");
            $status=$this->input_post("status");
            $date=date("Y-m-d h:i:s");
            if( (strlen($id) >0 ) && (strlen($status) >0 )){
                if($status==2){
                    $updateData=array(
                        "status"=>$status,
                        "verified_on"=>$date
                    );
                    $updateKyc = $operation->update_data("user_kyc",array("id"=>$id),$updateData);
                    if($updateKyc){
                        return $this->success_response("Kyc Verified Successfully");
                    }else{
                        return $this->error_response("Sorry! Internal Error !");
                    }

                }else if($status==1){
                    $updateKyc = $operation->update_data("user_kyc",array("id"=>$id),array("status"=>$status));
                    if($updateKyc){
                        return $this->success_response("Document Uploaded Successfully");
                    }else{
                        return $this->error_response("Sorry! Internal Error !");
                    }
                    
                }else if($status==0){
                    $updateKyc = $operation->update_data("user_kyc",array("id"=>$id),array("status"=>$status));
                    if($updateKyc){
                        return $this->success_response("Kyc Pending");
                    }else{
                        return $this->error_response("Sorry! Internal Error !");
                    }
                    
                }else if($status==3){
                    $updateKyc = $operation->update_data("user_kyc",array("id"=>$id),array("status"=>$status));
                    if($updateKyc){
                        return $this->success_response("Failed");
                    }else{
                        return $this->error_response("Sorry! Internal Error !");
                    }
                    
                }
            }else{
                return $this->error_response("Sorry! id and status required!");
            }

        }
    }
?>