<?php 
    class Comenta extends CI_Model{
        public function agregar($comenta){
            $this->db->insert('comentarios',$comenta);
        }

        public function seleccionar_todo()
        {
            $this->db->select('*');
            $this->db->from('comentarios');
            return $this->db->get()->result();
        }

        public function eliminar($id_comenta){
            $this->db->where('id', $id_comenta);
            $this->db->delete('comentarios');
        }

        public function actualizar($comenta, $id_comenta){
            $this->db->where('id', $id_comenta);
            $this->db->update('comentarios', $comenta);
        } 
    }


?>