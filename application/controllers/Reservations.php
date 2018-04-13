<?php
class Reservation extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('reserve_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {

                $data['reservations'] = $this->reserve->get_news();
                $data['title'] = 'Reservations';

                $this->load->view('templates/header', $data);
                $this->load->view('book/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['res-id'] = $this->reserve_model->get_news($custId);
        }

        public function create()        
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Book';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('book/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->news_model->set_news();
                $this->load->view('book/success');
            }
        }


}
