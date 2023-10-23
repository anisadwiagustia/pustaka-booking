<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_length' => 'Kode terlalu pendek'
            ]
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]
        );

        if ($this->form_validation->run() != true) {
            //jika kondisinya salah, data tidak akan diproses, dan akan dikembalikan pada tampilan input
            $this->load->view('view-form-matakuliah');
        } else {
            //jika kondisinya beanar / sesuai dengan validasi
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
