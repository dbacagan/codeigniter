<?php
class Tasks extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('tasks_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['tasks'] = $this->tasks_model->get_tasks();
                $data['title'] = 'Tasks';

                $this->load->view('templates/header', $data);
                $this->load->view('tasks/index', $data);
                $this->load->view('templates/footer');
        }

        public function show($id) {
                    $this->load->model('news_model');
                    $news = $this->news_model->get_news($id);
                    $data['title'] = $news['title'];
                    $data['body'] = $news['body'];
                    $this->load->view('news_article', $data);
        }


}