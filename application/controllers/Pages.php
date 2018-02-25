<?php
    class pages extends CI_Controller{
        
        public function view($page = 'home'){


            //Check if the requested page exisist
            if( ! file_exists(APPPATH."/views/pages/". $page . ".php")){
                //show not found page
                show_404();
            }


            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page , $data);
            $this->load->view('templates/footer', $data);

        }
    }
?>