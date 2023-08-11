<?php

    namespace App\Controllers\Web\admin;
    use App\Controllers\BaseController;
    use App\Models\Operation;

    class User_table extends BaseController{
        public function user_list(){
            $operation = new Operation();
            $session = \Config\Services::session();
           
            $data = array(
                'pageTitle' => 'User List'
            );
            $session_id = $session->get("lbt_admin_id");
            $apiUrl = 'usertable-list';
            $apiData = array(
                  //"id"  => $id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            
            if(!empty($Datalist->status == true)){
                $data['user_data'] = $Datalist->data;
            }else{
                $data['user_data'] = '';
            }
            if(!empty($Datalist->status == true)){
                $data['pagination'] = $Datalist->pagination;
              }else{
                $data['pagination'] = '';
              }
            // echo "<pre>";
            // print_r($data);
            // die();
            //echo "hello";
            ///////////////////////////////////
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/user_table/user_tablelist',$data);
                
                
                echo view('web/admin/includes/footer');
            }else{
                 return redirect()->to(base_url('console'));  
             }
            
        }
        public function user_details(){
            $operation = new Operation();
            $session = \Config\Services::session();

            $id = $this->input_get("id");
           
            $data = array(
                'pageTitle' => 'User Details',
                //'user_id'   => $id,

            );
            $session_id = $session->get("lbt_admin_id");
            ////////////////////////Call User list Details//////////////////
            $apiUrl = 'usertable-list';
            $apiData = array(
                 "id"=>$id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            if(!empty($Datalist->status == true)){
                $data['user_data'] = $Datalist->data;
            }else{
                $data['user_data'] = '';
            }
            ////////////////////////////////////////////////////////////////
            ////////////////////////Call User wallet Details//////////////////
             $apiUrl = 'user-wallet-details';
             $apiData = array(
                  "id"=>$id,
             );
             $Datalist2 = $operation->get_api($apiUrl,$apiData);
            
             if(!empty($Datalist2->status == true)){
                 $data['user_wallet_data'] = $Datalist2->data;
             }else{
                 $data['user_wallet_data'] = '';
             }
            ////////////////////////////////////////////////////////////////
            ////////////////////////Call User walking Details//////////////////
            $apiUrl = 'user-walking-details';
            $apiData = array(
                 "id"=>$id,
            );
            $Datalist2 = $operation->get_api($apiUrl,$apiData);
           
            if(!empty($Datalist2->status == true)){
                $data['user_walking_data'] = $Datalist2->data;
            }else{
                $data['user_walking_data'] = '';
            }
           ////////////////////////////////////////////////////////////////
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/user_table/user_details',$data);
                
                
                echo view('web/admin/includes/footer');
            }else{
                 return redirect()->to(base_url('console'));  
             }
        }
        public function user_details_tot(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $id = $this->input_get("id");
            //echo $id;
            $data = array(
                'pageTitle' => 'User Details',
                //'user_id'   => $id,

            );
            $session_id = $session->get("lbt_admin_id");
            ////////////////////////Call User list Details//////////////////
            $apiUrl = 'user-details-tot';
            $apiData = array(
                 "id"=>$id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            if(!empty($Datalist->status == true)){
                $data['user_data'] = $Datalist->data;
            }else{
                $data['user_data'] = '';
            }
            ////////////////////////////////////////////////////////////////
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/user_table/user_details_tot',$data);
                
                
                echo view('web/admin/includes/footer');
            }else{
                 return redirect()->to(base_url('console'));  
            }

        }
        public function user_wallet_tot(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $id = $this->input_get("id");
            //echo $id;
            $data = array(
                'pageTitle' => 'User wallet Details',
                //'user_id'   => $id,

            );
            $session_id = $session->get("lbt_admin_id");
            ////////////////////////Call User list Details//////////////////
            $apiUrl = 'user-details-tot';
            $apiData = array(
                 "id"=>$id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            if(!empty($Datalist->status == true)){
                $data['user_data'] = $Datalist->data;
            }else{
                $data['user_data'] = '';
            }
            ////////////////////////////////////////////////////////////////
            ////////////////////////Call User list Details//////////////////
            $apiUrl = 'user-wallet-details';
             $apiData = array(
                  "id"=>$id,
             );
             $Datalist2 = $operation->get_api($apiUrl,$apiData);
            
             if(!empty($Datalist2->status == true)){
                 $data['user_wallet_data'] = $Datalist2->data;
             }else{
                 $data['user_wallet_data'] = '';
             }
             if(!empty($Datalist2->status == true)){
                $data['pagination'] = $Datalist2->pagination;
              }else{
                $data['pagination'] = '';
              }
            ////////////////////////////////////////////////////////////////
            
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/user_table/user_wallet_tot',$data);
                
                
                echo view('web/admin/includes/footer');
            }else{
                 return redirect()->to(base_url('console'));  
            }
        }
        public function user_walking_tot(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $id = $this->input_get("id");
            //echo $id;
            $data = array(
                'pageTitle' => 'User wallet Details',
                //'user_id'   => $id,

            );
            $session_id = $session->get("lbt_admin_id");
            ////////////////////////Call User list Details//////////////////
            $apiUrl = 'user-details-tot';
            $apiData = array(
                 "id"=>$id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            if(!empty($Datalist->status == true)){
                $data['user_data'] = $Datalist->data;
            }else{
                $data['user_data'] = '';
            }
            ////////////////////////////////////////////////////////////////
             ////////////////////////Call User walking Details//////////////////
             $apiUrl = 'user-walking-details';
             $apiData = array(
                  "id"=>$id,
             );
             $Datalist3 = $operation->get_api($apiUrl,$apiData);
            
             if(!empty($Datalist3->status == true)){
                 $data['user_walking_data'] = $Datalist3->data;
             }else{
                 $data['user_walking_data'] = '';
             }
             if(!empty($Datalist3->status == true)){
                $data['pagination'] = $Datalist3->pagination;
              }else{
                $data['pagination'] = '';
              }
            ////////////////////////////////////////////////////////////////
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/user_table/user_walking_tot',$data);
                
                
                echo view('web/admin/includes/footer');
            }else{
                 return redirect()->to(base_url('console'));  
            }
        }
    }
?>