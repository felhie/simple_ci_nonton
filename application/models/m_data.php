<?php

class M_Data extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }
        public function ambil_data($sampai,$dari)
        {       
                $this->db->order_by('id', 'desc');
                $query = $this->db->get('film',$sampai,$dari);
                return $query->result();
        }
 
        public function jumlah(){
                $query = $this->db->get('film')->num_rows();
                return $query;
        }

        public function nonton($id= '')
        {
                $this->db->where('id', $id);
                $query = $this->db->get('film');
                return $query->result();
        }

}

?>
