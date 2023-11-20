<?php
class siswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-input-datasiswa');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgl' => $this->input->post('tgl'),
            'tempat' => $this->input->post('tempat'),
            'alamat' => $this->input->post('alamat'),
            'jkel' => $this->input->post('jkel'),
            'agama' => $this->input->post('agama')
        ];
        $this->load->view('view-data-siswa', $data);
    }
}
