<?php
    namespace App\Controllers\Api\v1;
    use App\Controllers\ApiController;
    use App\Models\Operation;


    class Settings extends ApiController{

        public function country_list(){
            $operation = new Operation();
            $countryList = $operation->get_data("app_country",'*',array("status"=>1),"name","ASC");
            $returnArr = array();
            $countryListRowCount = 0;
            foreach($countryList["result"] as $countryListRow){
                $returnArr[$countryListRowCount]["id"] = $countryListRow->id;
                $returnArr[$countryListRowCount]["iso"] = $countryListRow->iso;
                $returnArr[$countryListRowCount]["name"] = $countryListRow->name;
                $returnArr[$countryListRowCount]["dialing_code"] = $countryListRow->phonecode;
                $countryListRowCount++;
            }
            return $this->success_response("Country Code!",$returnArr);
        }

        public function kyc_document_list(){
            $operation = new Operation();
            $accountType = $this->input_get("account_type");
            if( strlen($accountType) == 0){
                $accountType = 1;
            }
            $kycList = $operation->get_data("app_kyc_documents",'*',array("account_type"=>$accountType),"id","ASC");
            $returnArr = array();
            $countryListRowCount = 0;
            foreach($kycList["result"] as $kycListRow){
                $returnArr[$countryListRowCount]["id"] = $kycListRow->id;
                $returnArr[$countryListRowCount]["account_type"] = $kycListRow->account_type;
                $returnArr[$countryListRowCount]["document_name"] = $kycListRow->document_name;
                $countryListRowCount++;
            }
            return $this->success_response("Kyc Document List!",$returnArr);
        }

        public function member_relation(){
            $operation = new Operation();
            $relationList = $operation->get_data("app_family_relation",'*',array("status"=>1),"id","ASC");
            return $this->success_response("Family Relation!",$relationList["result"]);
        }

        public function weather_mode(){
            $returnArr = array(
                "clear_sky",
                "few_clouds",
                "scattered_clouds",
                "broken_clouds",
                "shower_rain",
                "rain",
                "thunderstorm",
                "snow",
                "mist"
            );
            return $this->success_response("Weather mode!",$returnArr);
        }
    }

?>