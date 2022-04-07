<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class ContactController extends AppController
    {
        public function index()
        {
            $data=[
                'title' => 'INTROSPECTIVE LEADERSHIP | Mindfulness | Mano Lead'

            ];

            $this->set('data',$data);
        }

    }