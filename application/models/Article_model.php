<?php

class Article_model extends CI_Model
{
    public  function getArticle($id = null)
    {
        if($id === null){
            return $this->db->get('posts')->result_array();
        }else{
            return $this->db->get_where('posts', ['Id' => $id])->result_array();    
        }
        
    }

    public function deleteArticle($id)
    {
        $this->db->delete('posts', ['Id' => $id]);
        return $this->db->affected_rows();
    }


    public function createArticle($data)
    {
        $this->db->insert('posts', $data);
        return $this->db->affected_rows();
    }


    public function updateArticle($data, $id)
    {
        $this->db->update('posts', $data, ['Id' => $id ]);
        return $this->db->affected_rows();
    }
}