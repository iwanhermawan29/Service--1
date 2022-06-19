<?php 
use GuzzleHttp\Client;
class Posts_model extends CI_model {

private $_client;

public function __construct()
{
    $this->_client = new Client([
        'base_uri' => 'http://localhost:8080/RestAPI/api/',
        'auth' => ['iwan','1234']
    ]); 
}

    public function getAllPosts()
    {

        
        $response = $this->_client->request('GET', 'article',
         [ 
           
             'query' => [
                 'article-key' => 'rahasia',
             ]

         ]); 

         $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getPostsById($id)
    {
        

        $response = $this->_client->request('GET', 'article',
         [ 
            
             'query' => [
                 'article-key' => 'rahasia',
                 'Id' => $id
             ]

         ]); 

         $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }


    

    public function tambahDataPosts()
    {
        $data = [
            "title" => $this->input->post('title', true),
            "content" => $this->input->post('content', true),
            "category" => $this->input->post('category', true),
            "status" => $this->input->post('status', true),
            'article-key' => 'rahasia'
        ];

        $response = $this->_client->request('POST', 'article',
        [ 
            'form_params' => $data
        ]);  

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

    public function hapusDataPosts($id)
    {
        $response = $this->_client->request('DELETE', 'article',
         [ 
            
             'form_params' => [
                 'Id' => $id,
                 'article-key' => 'rahasia',
             ]

         ]); 

         $result = json_decode($response->getBody()->getContents(), true);

        return $result;
    }

   

    public function ubahDataPosts()
    {
        $data = [
            "title" => $this->input->post('title', true),
            "content" => $this->input->post('content', true),
            "category" => $this->input->post('category', true),
            "status" => $this->input->post('status', true),
            "Id" => $this->input->post('id', true),
            'article-key' => 'rahasia'
        ];

        $response = $this->_client->request('PUT', 'article',
        [ 
            'form_params' => $data
        ]);  

        $result = json_decode($response->getBody()->getContents(), true);

        return $result;

     
    }

    public function cariDataPosts()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}