<?php

class m_main extends CI_Model
{
    function getUser()
    {
        $this->db->select('*');
        $this->db->from('hb_user');
        $this->db->where(array('level' => 'low'));
        $this->db->or_where(array('level' => 'middle'));
        $query = $this->db->get();
        return $query;
    }
}
