<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;

    class Services extends ApiController{
        public function service_list(){
            $operation = new Operation();
            $id=$this->input_get("id");
            $status=$this->input_get("status");
            $searchCondition = array();
            if( strlen($id)>0){
                $searchCondition = array_merge($searchCondition,array("id"=>$id));
            }
            if( strlen($status)>0){
                $searchCondition = array_merge($searchCondition,array("status"=>$status));
            }else{
                $searchCondition = array_merge($searchCondition,array("status"=>1));
            }

            $serviceList = $operation->get_data("service",'*',$searchCondition,"sort_order","ASC");
            if($serviceList["num_rows"] > 0){
                $returnArr = array();
                $returnArrCount = 0;
                foreach($serviceList["result"] as $serviceListRow){
                    $returnArr[$returnArrCount]["id"] = $serviceListRow->id;
                    $returnArr[$returnArrCount]["name"] = $serviceListRow->name;
                    $returnArr[$returnArrCount]["icon"] = $serviceListRow->icon;
                    $returnArr[$returnArrCount]["sort_order"] = $serviceListRow->sort_order;
                    $returnArr[$returnArrCount]["is_premium"] = $serviceListRow->is_premium;
                    $returnArrCount++;
                }
                return $this->success_response("Service List!",$returnArr);
            }else{
                return $this->error_response("No Service Found");
            }
        }

        public function feature_list(){
            $operation = new Operation();
            $id = $this->input_get("id");
            $sectionId = $this->input_get("section_id");
            $status = $this->input_get("status");
            $searchCondition = array();
            if( strlen($id)>0){
                $searchCondition = array_merge($searchCondition,array("id"=>$id));
            }
            if( strlen($sectionId)>0){
                $searchCondition = array_merge($searchCondition,array("section_id"=>$sectionId));
            }
            if( strlen($status)>0){
                $searchCondition = array_merge($searchCondition,array("status"=>$status));
            }else{
                $searchCondition = array_merge($searchCondition,array("status"=>1));
            }

            $sectionList = $operation->get_data("app_feature_section",'*',array("status"=>1),"sort_order","ASC");
            if($sectionList["num_rows"] > 0){
                $returnArr = array();
                $returnArrCount = 0;
                foreach($sectionList["result"] as $sectionListRow){
                    $returnArr[$returnArrCount]["section_id"] = $sectionListRow->id;
                    $returnArr[$returnArrCount]["section_name"] = $sectionListRow->name;
                    $searchCondition = array_merge($searchCondition,array("section_id"=>$sectionListRow->id));
                    $featureList = $operation->get_data("feature_list",'*',$searchCondition,"sort_order","ASC");
                    if($featureList["num_rows"] > 0){
                        $returnFeatureArrCount = 0;
                        foreach($featureList["result"] as $featureListRow){
                            $returnFeatureArr[$returnFeatureArrCount]["id"] = $featureListRow->id;
                            $returnFeatureArr[$returnFeatureArrCount]["name"] = $featureListRow->name;
                            $returnFeatureArr[$returnFeatureArrCount]["section_id"] = $featureListRow->section_id;
                            $returnFeatureArr[$returnFeatureArrCount]["icon"] = $featureListRow->icon;
                            $returnFeatureArr[$returnFeatureArrCount]["title"] = $featureListRow->title;
                            $returnFeatureArr[$returnFeatureArrCount]["sort_details"] = $featureListRow->sort_details;
                            $returnFeatureArrCount++;
                        }
                    }
                    $returnArr[$returnArrCount]["features"] = $returnFeatureArr;
                    $returnArrCount++;
                }
                return $this->success_response("Feature List!",$returnArr);
            }else{
                return $this->error_response("No List Found");
            }

        }
        
        public function feedback_category(){
            $operation = new Operation();
            $sectionList = $operation->get_data("app_review_category",'*',array("status"=>1),"sort_order","ASC");

            $returnArr = array();
            $returnArrCount = 0;
            foreach($sectionList["result"] as $sectionListRow){
                $returnArr[$returnArrCount]["category_id"] = $sectionListRow->id;
                $returnArr[$returnArrCount]["category_name"] = $sectionListRow->name;
                $returnArr[$returnArrCount]["sort_order"] = $sectionListRow->sort_order;
                $returnArrCount++;
            }
            return $this->success_response("Category List!",$returnArr);
        }

        public function add_feedback(){
            $operation = new Operation();
            $userId = $this->input_post("user_id");
            $categoryId = $this->input_post("category_id");
            $rating = $this->input_post("rating");
            $review = $this->input_post("review");

            if( (strlen($userId) > 0) && (strlen($categoryId) > 0) && (strlen($review) > 0) ){
                $dataToInsert = array(
                    "user_id"=>$userId,
                    "category_id"=>$categoryId,
                    "rating"=>$rating,
                    "review"=>$review,
                );
                $added = $operation->insert_data("user_review",$dataToInsert);
                return $this->success_response("Thank you for your review. Our team will connect you soon!");
            }else{
                return $this->error_response("Sorry! user id, category and review Required!");
            }
        }
    }

?>