<?php

    namespace App\Controllers\Web\admin;
    use App\Controllers\BaseController;
    use App\Models\Operation;

    class Home extends BaseController{
        public function index(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $data = array(
                'pageTitle' => 'Login'
            );
            $session_id = $session->get("lbt_admin_id");
            if($session_id==""){
                echo view('web/admin/includes/login_header');
                echo view('web/admin/home/login');
                echo view('web/admin/includes/login_footer');
            }else{
                return redirect()->to(base_url('console/dashboard')); 
            }
            
        }

        public function login_action(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $userName = $this->input_post("username");
            $password = $this->input_post("password");
            $checkTeamMember = $operation->get_data("team_member",'*',array('email'=>$userName,'password'=>md5($password),'status'=>1));
            if($checkTeamMember["num_rows"] > 0){
                $data= array(
                    'lbt_admin_id' => $checkTeamMember["result"][0]->id,
                    'lbt_admin_email'  => $checkTeamMember["result"][0]->email,
                    'lbt_admin_name'  => $checkTeamMember["result"][0]->name,
                    'lbt_admin_image'  => $checkTeamMember["result"][0]->image,
                    'lbt_admin_coutry'  => $checkTeamMember["result"][0]->country,
                    'lbt_admin_type'  => $checkTeamMember["result"][0]->member_type,
                    'lbt_admin_menu_access'  => $checkTeamMember["result"][0]->menu_access,
                );
                $session->set($data);
                echo 1;
            }else{
                echo 0;
            }
        }

        public function dashboard(){
            $session = \Config\Services::session();
            $session_id = $session->get("lbt_admin_id");
            if($session_id != ""){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/home/dashboard');
                echo view('web/admin/includes/footer');
            }else{
                return redirect()->to(base_url('console')); 
            }
        }
        ///////////////////created - 15.02.23/////////////////////
        public function logout(){
            $session = \Config\Services::session();
            $session_id = $session->get("lbt_admin_id");
            $session->destroy();
            if($session_id==""){
                echo view('web/admin/includes/login_header');
                echo view('web/admin/home/login');
                echo view('web/admin/includes/login_footer');
            }else{
                return redirect()->to(base_url('console/dashboard')); 
            }
        }
        public function profile(){
            $operation = new Operation();
            $session = \Config\Services::session();
            $session_id = $session->get("lbt_admin_id");
            $apiUrl = 'profile-list';
            $apiData = array(
             "user_id"=> $session_id,
            );
            $Datalist = $operation->get_api($apiUrl,$apiData);
            if(!empty($Datalist->status == true)){
                $data['profile_list'] = $Datalist->data;
            }else{
                $data['profile_list'] = '';
            }
            $country = $operation->get_data("app_country",'*',array('status'=>1));
            if(!empty($country['result'])){
                $data['country'] = $country['result'];
            }else{
                $data['country'] = '';
            }
            // echo "<pre>";
            // print_r($data);
            // die();
            if($session_id != " "){
                echo view('web/admin/includes/header');
                echo view('web/admin/includes/leftbar');
                echo view('web/admin/home/profile',$data);
                echo view('web/admin/includes/footer');
            }else{
                return redirect()->to(base_url('console/dashboard')); 
            }
        }

    }