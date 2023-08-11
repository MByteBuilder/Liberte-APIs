<?php

    namespace App\Controllers\Web\admin;
    use App\Controllers\BaseController;
    use App\Models\Operation;

    class Points extends BaseController{
        public function point_list(){
            $operation = new Operation();
            $session = \Config\Services::session();
           
            $data = array(
                'pageTitle' => 'Points List'
            );
            $session_id = $session->get("lbt_admin_id");
            ///////////////////////////////////
            $apiUrl = 'point-list';
            $apiData = array(
            );
           
            $Datalist = $operation->get_api($apiUrl,$apiData);
            // echo "<pre>";
            // print_r($Datalist);
            // die();
            if(!empty($Datalist->status == true)){
                $data['points_list'] = $Datalist->data;
            }else{
                $data['points_list'] = '';
            }
            if(!empty($Datalist->status == true)){
                $data['pagination'] = $Datalist->pagination;
              }else{
                $data['pagination'] = '';
              }
            // echo "<pre>";
            // print_r($data);
            // die();
            ///////////////////////////////////
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/points/points_list',$data);
            
                echo view('web/admin/includes/footer');
            }else{
                return redirect()->to(base_url('console'));  
            }
            
        }
        public function point_edit(){
            $operation = new Operation();
            $session = \Config\Services::session();  
            $data = array(
                'pageTitle' => 'Points List'
            );
            $session_id = $session->get("lbt_admin_id");
            $id = $this->input_get("id");
             ///////////////////////////////////
             $apiUrl = 'point-list';
             $apiData = array(
                "id"=>$id,
             );
            
             $Datalist = $operation->get_api($apiUrl,$apiData);
             // echo "<pre>";
             // print_r($Datalist);
             // die();
             if(!empty($Datalist->status == true)){
                 $data['points_list'] = $Datalist->data;
             }else{
                 $data['points_list'] = '';
             }
             if(!empty($Datalist->status == true)){
                 $data['pagination'] = $Datalist->pagination;
               }else{
                 $data['pagination'] = '';
               }
            //  echo "<pre>";
            //  print_r($data);
            //  die();
             ///////////////////////////////////
             if($session_id != ""){
                 echo view('web/admin/includes/header');
                 echo view('web/admin/includes/leftbar');
                 echo view('web/admin/points/points_edit',$data);
             
                 echo view('web/admin/includes/footer');
             }else{
                 return redirect()->to(base_url('console'));  
             }
        }
    }
?>