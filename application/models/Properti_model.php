<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Properti_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function get_total()
  {
    return $this->db->count_all("properti");
  }

  public function get_total_harga()
  {
    $this->db->select_sum('harga');
    $query = $this->db->get('properti')->row();;
    return $query->harga;
  }

  public function get_limit()
  {
    $this->db->order_by('properti.tanggal', 'DESC');
    $this->db->limit(4);
    $query = $this->db->get('properti');

    return $query->result();
  }

  public function get($limit = FALSE, $offset = FALSE)
  {
    if ( $limit ) {
      $this->db->limit($limit, $offset);
    }

    $this->db->order_by('properti.tanggal', 'DESC');
    $this->db->from('properti');

    $query = $this->db->get();
    return $query->result();
  }

  public function get_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('properti');
    $this->db->join('jenis_properti', 'properti.id_jenis_properti = jenis_properti.id_jenis_properti');
    $this->db->join('kondisi', 'properti.id_kondisi = kondisi.id_kondisi');
    $this->db->where(array('properti.id_properti' => $id));

    $query = $this->db->get();
    return $query->row();
  }

  public function create($data)
  {
    return $this->db->insert('properti', $data);
  }

  public function update($data,$id)
  {
    $this->db->where('id_properti', $id);
    return $this->db->update('properti', $data);
  }

  public function delete($id)
  {
    if ( !empty($id) ){
      $delete = $this->db->delete('properti', array('id_properti'=>$id) );
      return $delete ? true : false;
    } else {
      return false;
    }
  }
}


?>
