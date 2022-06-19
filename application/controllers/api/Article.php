<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Article extends REST_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model','article');

        $this->methods['index_get']['limit'] = 1000;
    }
    public function index_get()
    {

        $id = $this->get('Id');
        if($id === null){
            $article =  $this->article->getArticle();
        }else{
            $article =  $this->article->getArticle($id);
        }
        
        //var_dump($article);

        if($article){
            $this->response([
                'status' => true,
                'data' => $article
            ], REST_Controller::HTTP_OK);
        } else{
            $this->response([
            'status' => false,
            'data' => 'Id Not Found'
        ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('Id');

        if($id === null)
        {
            $this->response([
                'status' => false,
                'data' => 'Provide in Id!'
            ], REST_Controller::HTTP_BAD_REQUEST);

        } else{
            if($this->article->deleteArticle($id) > 0)
            {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'data' => 'Delete'
                ], REST_Controller::HTTP_NO_CONTENT);
            }else{
                $this->response([
                    'status' => false,
                    'data' => 'Id Not Found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }


    public function index_post()
    {
        $data  = [
            'Title' => $this->post('title'),
            'Content' => $this->post('content'),
            'Category' => $this->post('category'),
            'Status' => $this->post('status'),
        ];

        if($this->article->createArticle($data)>0)
        {
            $this->response([
                'status' => true,
                'message' => 'New Article has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Create new data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }


    public function index_put()
    {
        $id = $this->put('Id');
        $data  = [
            'Title' => $this->put('title'),
            'Content' => $this->put('content'),
            'Category' => $this->put('category'),
            'Status' => $this->put('status'),
        ];

        if($this->article->updateArticle($data, $id)>0)
        {
            $this->response([
                'status' => true,
                'message' => 'New Article has been updated'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Failed to Update  data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}