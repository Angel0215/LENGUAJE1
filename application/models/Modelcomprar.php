<?php 
    class Modelcomprar extends CI_Model{
        public function agregar($modelcomprar){
            $this->db->insert('botoncompra',$modelcomprar);
        }

        public function seleccionar_todo()
        {
            $this->db->select('*');
            $this->db->from('botoncompra');
            return $this->db->get()->result();
        }

        public function eliminar($id_modelcomprar){
            $this->db->where('id', $id_modelcomprar);
            $this->db->delete('botoncompra');
        }

        public function actualizar($modelcomprar, $id_modelcomprar){
            $this->db->where('id', $id_modelcomprar);
            $this->db->update('botoncompra', $modelcomprar);
        } 
    }

?>