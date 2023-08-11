<?php

    namespace App\Controllers\Web\admin;
    use App\Controllers\BaseController;
    use App\Models\Operation;

    class Family extends BaseController{
        public function family_rel(){
            $operation = new Operation();
            $session = \Config\Services::session();
           
            $data = array(
                'pageTitle' => 'Family relation'
            );
            $session_id = $session->get("lbt_admin_id");
            $apiUrl = 'Family-relation';
            $apiData = array(
                  //"id"  => $id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            
            if(!empty($Datalist->status == true)){
                $data['family_data'] = $Datalist->data;
            }else{
                $data['family_data'] = '';
            }
            //echo "<pre>";
            //print_r($data);
            //echo "hello";
            //die();
           
            ///////////////////////////////////
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/family/family_rel',$data);
                
                
                echo view('web/admin/includes/footer');
            }else{
                 return redirect()->to(base_url('console'));  
             }
            
        }
    }
?>