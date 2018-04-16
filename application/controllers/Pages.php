<?php

class Pages extends CI_Controller {

    public function view($page = 'home')
    {
        if(file_exists('application/views/pages/' . $page . '.php'))
        {
            $this->load->view('header');
            $this->load->view('pages/' . $page );
        }
        else
        {
            show_404();
        }
    }
}
