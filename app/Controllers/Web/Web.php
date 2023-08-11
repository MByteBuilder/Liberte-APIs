<?php

    namespace App\Controllers\Web;
    use App\Controllers\BaseController;
    use App\Models\Operation;

    class Web extends BaseController{

        /**
			* Load Tutorial page
		*/

        public function opensea(){
            $operation = new Operation();
            $data = array(
                'pageTitle' => 'Tutorials'
            );
            echo view('web/includes/header');
            echo view('web/profile/opensea');
            echo view('web/includes/footer');
        }
        public function nft_listing(){
            $operation = new Operation();
            $data = array(
                'pageTitle' => 'Tutorials'
            );
            echo view('web/includes/header');
            echo view('web/profile/nft_listing');
            echo view('web/includes/footer');
        }
        public function listing(){
            $operation = new Operation();
            $data = array(
                'pageTitle' => 'Tutorials'
            );
            echo view('web/includes/header');
            echo view('web/profile/listing');
            echo view('web/includes/footer');
        }
        public function explore_collection(){
            $operation = new Operation();
            $data = array(
                'pageTitle' => 'Tutorials'
            );
            echo view('web/includes/header');
            echo view('web/profile/explore_collection');
            echo view('web/includes/footer');
        }

    }
?>