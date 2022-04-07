<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class ConsultingController extends AppController
    {
        public function index()
        {
            $data=[
                'title' => 'INTROSPECTIVE LEADERSHIP | Mindfulness | Mano Lead'
    
            ];
    
            $this->set('data',$data);
        }
    }