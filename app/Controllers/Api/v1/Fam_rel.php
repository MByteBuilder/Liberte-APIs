<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;
    //use App\Models\Mailler;


    class Fam_rel extends ApiController{

        public function family_rel(){
            $operation = new Operation();
            $operation = new Operation();

            $id = $this->input_get("id");
            $name = $this->input_get("name");
            $status = $this->input_get("status");
          

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
            if(strlen($status)>0){
                    $searchCondition = array_merge($searchCondition,array("status"=>$status));
            }
                    
            //$total_data  = $operation->get_data("users",'*',"","",""); 
            $data  = $operation->get_data("app_family_relation",'*',$searchCondition);

             ///////////for pagination/////////////
             //$lastrow = $lastrow + $data["num_rows"];
             //$total_team_avg = ceil($total_data["num_rows"]/3);
                   
             //if($page_no > 0){
                 // $loadMore = 1;
             //}else{
                // $page_no = 0;
             //}
       
             //$pagination = array(
                 //"page_no"=>(string)$page_no,
                 //"last_row"=>(string)$lastrow,
                 //"total_page"=>$total_team_avg,
             //);
            
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
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                
                    
                        // if(strlen($dataRow->phon_no) > 0){
                           // $country_data  = $operation->get_data("app_country",'*',array('id'=>$dataRow->country));
                           // $returnArr[$dataRowCount]["country_id"] = $country_data['result'][0]->id;
                           // $returnArr[$dataRowCount]["country_name"] = $country_data['result'][0]->name;
                        // }
                    // $returnArr[$dataRowCount]["phone_no"] = $dataRow->phone_no;
                    $returnArr[$dataRowCount]["status"] = $dataRow->status;
                    $dataRowCount++;
                }
                return $this->success_response("Data list found",$returnArr);
            }else{
                return $this->error_response("Sorry! No activity found!");
            }
            ///////////////////////////
            
        }
            //echo "hello";
            //die();
        }
    
?>