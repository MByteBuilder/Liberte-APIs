<?php

    namespace App\Controllers\Web\admin;
    use App\Controllers\BaseController;
    use App\Models\Operation;

    class Team extends BaseController{
        public function team_list(){
            $operation = new Operation();
            $session = \Config\Services::session();
           
            $data = array(
                'pageTitle' => 'Team List'
            );
            $session_id = $session->get("lbt_admin_id");
            ///////////////////////////////////
            $apiUrl = 'team-list';
            // if(isset($id)){
                $apiData = array(
                    
                 );
            // }else{
            //     $apiData = array(
                    
            //         "isAdmin"=>1,
            //      );
            // }
            $Datalist = $operation->get_api($apiUrl,$apiData);
            // echo "<pre>";
            // print_r($Datalist);
            // die();
            if(!empty($Datalist->status == true)){
                $data['team_list'] = $Datalist->data;
            }else{
                $data['team_list'] = '';
            }
            if(!empty($Datalist->status == true)){
                $data['pagination'] = $Datalist->pagination;
              }else{
                $data['pagination'] = '';
              }
          
            ///////////////////////////////////
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/team/team_list',$data);
                //echo "hello";
                echo view('web/admin/includes/footer');
            }else{
                return redirect()->to(base_url('console'));  
            }
            
        }
        public function team_edit(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $id = $this->input_get("id");

            $data = array(
                'pageTitle' => 'Team List'
            );
            $session_id = $session->get("lbt_admin_id");

            $apiUrl = 'team-list';
            $apiData = array(
                  "id"  => $id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            
            if(!empty($Datalist->status == true)){
                $data['team_data'] = $Datalist->data;
            }else{
                $data['team_data'] = '';
            }
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/team/team_add',$data);
                //echo "hello";
                echo view('web/admin/includes/footer');
            }else{
                return redirect()->to(base_url('console'));  
            }
            
        }
        // public function login_action(){
        //     $operation = new Operation();
        //     $session = \Config\Services::session();
        //     $userName = $this->input_post("username");
        //     $password = $this->input_post("password");
        //     $checkTeamMember = $operation->get_data("team_member",'*',array('email'=>$userName,'password'=>md5($password),'status'=>1));
        //     if($checkTeamMember["num_rows"] > 0){
        //         $data= array(
        //             'lbt_admin_id' => $checkTeamMember["result"][0]->id,
        //             'lbt_admin_email'  => $checkTeamMember["result"][0]->email,
        //             'lbt_admin_name'  => $checkTeamMember["result"][0]->name,
        //             'lbt_admin_image'  => $checkTeamMember["result"][0]->image,
        //             'lbt_admin_coutry'  => $checkTeamMember["result"][0]->country,
        //             'lbt_admin_type'  => $checkTeamMember["result"][0]->member_type,
        //             'lbt_admin_menu_access'  => $checkTeamMember["result"][0]->menu_access,
        //         );
        //         $session->set($data);
        //         echo 1;
        //     }else{
        //         echo 0;
        //     }
        // }

        public function team_add(){
            $session = \Config\Services::session();
            $operation = new Operation();
            $session_id = $session->get("lbt_admin_id");
            $data = array(
                'pageTitle' => 'Team List'
            );
            $country = $operation->get_data("app_country",'*',array('status'=>1));
            if(!empty($country['result'])){
                $data['country'] = $country['result'];
            }else{
                $data['country'] = '';
            }
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/team/team_add',$data);
                echo view('web/admin/includes/footer');
            }else{
                return redirect()->to(base_url('console')); 
            }
        }
    }