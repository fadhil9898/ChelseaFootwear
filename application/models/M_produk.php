<?php
class M_produk extends CI_Model{
	public function get_produk_all()
	{
		return $this->db->query('SELECT * FROM produk ORDER BY id ASC')->result_array();
	}
	public function get_produk()
	{
		return $this->db->query('SELECT * FROM produk ORDER BY id ASC')->result_array();
	}

	public function get_one_produk()
	{
		return $this->db->query('SELECT * FROM produk WHERE id = '.$this->uri->segment(3).' ')->row_array();
	}
	public function insert_produk()
	{
		$simpan = [
			
			'judul'		        => $this->input->post('judul'),
			'sub_judul'		    => $this->input->post('sub_judul'),
			'nama_produk'           => $this->input->post('nama_produk'),
			'gambar_satu'       => $gambar_satu,
			'gambar_dua'	    => $gambar_dua,
			'gambar_tiga'	    => $gambar_tiga,
			'harga'     => $this->input->post('harga'),
			'type'	=> $this->input->post('type'),
			'sub_gambar_tiga'	=> $this->input->post('sub_gambar_tiga'),
			'warna'     => $this->input->post('warna')
		];

		$ok = $this->db->insert('produk', $simpan);
		return $ok;
	}
	public function update_produk()
	{
		$update = [
			
			'judul'		        => $this->input->post('judul'),
			'sub_judul'		    => $this->input->post('sub_judul'),
			'nama_produk'           => $this->input->post('nama_produk'),
			'gambar_satu'       => $gambar_satu,
			'gambar_dua'	    => $gambar_dua,
			'gambar_tiga'	    => $gambar_tiga,
			'harga'     => $this->input->post('harga'),
			'type'	=> $this->input->post('type'),
			'sub_gambar_tiga'	=> $this->input->post('sub_gambar_tiga'),
			'warna'     => $this->input->post('warna')
		];
        
		$this->db->where('id', $this->input->post('id'));
		$ok = $this->db->update('produk', $update);

		return true;
	}
	public function delete_produk()
    {
        $this->db->where('id', $this->uri->segment(3));
        $ok = $this->db->delete('produk');
        return true;
        
    }
}