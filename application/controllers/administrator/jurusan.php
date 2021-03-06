<?php

class Jurusan extends CI_Controller
{
    public function index()
    {
        $data['jurusan']    = $this->jurusan_model->tampil_data()->result();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/jurusan', $data);
        $this->load->view('template_administrator/footer');
    }
 
    public function input()
    {
        $data = array(
            'id_jurusan'    => set_value('id_jurusan'),
            'kode_jurusan'  => set_value('kode_jurusan'),
            'nama_jurusan'  => set_value('nama_jurusan'),
        );
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('administrator/jurusan_form', $data);
        $this->load->view('template_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == false) {
            $this->input();
        } else {
            $data = array(
                'kode_jurusan'  => $this->input->POST('kode_jurusan', true),
                'nama_jurusan'  => $this->input->POST('nama_jurusan', true),
            );

            $this->jurusan_model->input_data($data);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data jurusan berhasil ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('administrator/jurusan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_jurusan', 'kode_jurusan', 'required', ['required' => 'Kode Jurusan Wajib diisi!']);
        $this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required', ['required' => 'Nama Jurusan Wajib diisi!']);
    }
}
