<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function get_total($id_rayon = NULL)
  {
    return $this->db->count_all("barang");
    // $this->db->where('barang.id_rayon', $id_rayon);
    // $this->db->from('my_table');
    // $query = $this->db->get();
    // return $query->result();
  }

  public function get_total_harga()
  {
    $this->db->select_sum('harga');
    $query = $this->db->get('barang')->row();
    return $query->harga;
  }

  public function get_limit($id_rayon = NULL)
  {

    $this->db->order_by('barang.tanggal', 'DESC');
    $this->db->limit(4);
    $this->db->where('barang.id_rayon', $id_rayon);
    $this->db->join('jenis_barang', 'barang.id_jenis_barang = jenis_barang.id_jenis_barang');
    $this->db->join('kondisi', 'barang.id_kondisi = kondisi.id_kondisi');
    $this->db->from('barang');

    $query = $this->db->get();
    return $query->result();
  }

  public function get($limit = FALSE, $offset = FALSE, $id_rayon = NULL)
  {
    if ( $limit ) {
      $this->db->limit($limit, $offset);
    }

    $this->db->order_by('barang.tanggal', 'DESC');
    $this->db->where('barang.id_rayon', $id_rayon);
    $this->db->join('jenis_barang', 'barang.id_jenis_barang = jenis_barang.id_jenis_barang');
    $this->db->join('kondisi', 'barang.id_kondisi = kondisi.id_kondisi');
    $this->db->from('barang');

    $query = $this->db->get();
    return $query->result();
  }

  public function get_by_id($id)
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->join('jenis_barang', 'barang.id_jenis_barang = jenis_barang.id_jenis_barang');
    $this->db->join('kondisi', 'barang.id_kondisi = kondisi.id_kondisi');
    $this->db->where(array('barang.id_barang' => $id));

    $query = $this->db->get();
    return $query->row();
  }

  public function create($data)
  {
    return $this->db->insert('barang', $data);
  }

  public function update($data,$id){
    $this->db->where('id_barang', $id);
    return $this->db->update('barang', $data);
  }

  public function delete($id)
  {
    if ( !empty($id) ){
      $delete = $this->db->delete('barang', array('id_barang'=>$id) );
      return $delete ? true : false;
    } else {
      return false;
    }
  }
}


?>
