<?php

session_start();

class Super_Admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('admin', 'refresh');
        }
        $this->load->model('super_admin_model');
    }

    public function index() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_category', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_category_info($data);
        $sdata = array();
        $sdata['message'] = "Category information saved successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_category');
    }

    public function manage_category() {
        $data = array();
        $data['all_category_info'] = $this->super_admin_model->all_category_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category_info($category_id) {
        $this->super_admin_model->set_unpublished_category_info($category_id);
        redirect('super_admin/manage_category');
    }

    public function published_category_info($category_id) {
        $this->super_admin_model->set_published_category_info($category_id);
        redirect('super_admin/manage_category');
    }

    public function edit_category($category_id) {
        $data = array();
        $data['category_info'] = $this->super_admin_model->take_category_info_by_id($category_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->update_category_info_by_id($data, $category_id);
        redirect('super_admin/edit_category/' . $category_id);
    }

    public function delete_category($category_id) {
        $this->super_admin_model->delete_category_info($category_id);
        redirect('super_admin/manage_category');
    }

    public function add_masael() {
        $data = array();
        $data['published_category_info'] = $this->super_admin_model->published_category_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_masael', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function masael_search() {
        $data = array();
        $data['published_category_info'] = $this->super_admin_model->published_category_info();
        $data['all_published_masael_info'] = $this->welcome_model->select_all_published_masael_info();
        $data['admin_maincontent'] = $this->load->view('admin/masael_search', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_masael() {
        $data = array();
        $data['masael_title'] = $this->input->post('masael_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['masael_short_description'] = $this->input->post('masael_short_description', true);
        $data['masael_long_description'] = $this->input->post('masael_long_description', true);
        $data['masael_author_name'] = $this->session->userdata('admin_full_name');
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_masael_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_masael');
    }

    public function manage_masael() {
        $data = array();
        $data['all_masael_info'] = $this->super_admin_model->all_masael_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_masael', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function published_masael_info($masael_id) {
        $this->super_admin_model->set_published_masael_info($masael_id);
        redirect('super_admin/manage_masael');
    }

    public function unpublished_masael_info($masael_id) {
        $this->super_admin_model->set_unpublished_masael_info($masael_id);
        redirect('super_admin/manage_masael');
    }

    public function edit_masael_info($masael_id) {
        $data = array();
        $data['published_category_info'] = $this->super_admin_model->published_category_info();
        $data['masael_info'] = $this->super_admin_model->select_masael_info_by_id($masael_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_masael', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_masael() {
        $data = array();
        $masael_id = $this->input->post('masael_id', true);
        $data['masael_title'] = $this->input->post('masael_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['masael_short_description'] = $this->input->post('masael_short_description', true);
        $data['masael_long_description'] = $this->input->post('masael_long_description', true);
        $data['masael_author_name'] = $this->session->userdata('admin_full_name');
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->update_masael_info_by_id($data, $masael_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/edit_masael_info/' . $masael_id);
    }

    public function delete_masael($masael_id) {
        $this->super_admin_model->delete_masael_info($masael_id);
        redirect('super_admin/manage_masael');
    }

    public function manage_comments() {
        $data = array();
        $data['all_comments_info'] = $this->super_admin_model->all_comments_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_comments', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function published_comments_info($comments_id) {
        $this->super_admin_model->set_published_comments_info($comments_id);
        redirect('super_admin/manage_comments');
    }

    public function unpublished_comments_info($comments_id) {
        $this->super_admin_model->set_unpublished_comments_info($comments_id);
        redirect('super_admin/manage_comments');
    }

    public function delete_comments($comments_id) {
        $this->super_admin_model->delete_comments_info($comments_id);
        redirect('super_admin/manage_comments');
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_full_name');
        $sdata = array();
        $sdata['message'] = "You have logged out successfully.";
        $this->session->set_userdata($sdata);
        redirect('admin/index');
    }

    public function add_madrasa_porichiti() {
        $data = array();
        $data['result'] = $this->welcome_model->select_madrasa_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_madrasa_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_madrasa_porichiti() {
        $data = array();
        $data['madrasa_title'] = $this->input->post('madrasa_title', true);
        $data['madrasa_description'] = $this->input->post('madrasa_description', true);

        $result = $this->welcome_model->select_madrasa_maincontent_info();
        if (!$result) {
            //Start file upload
            $config['upload_path'] = './image/madrasa_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('madrasa_image')) {
                $error = $this->upload->display_errors();
                $sdata = array();
                $sdata['message'] = $error;
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_madrasa_porichiti');
            } else {
                $fdata = $this->upload->data();
                $data['madrasa_image'] = $config['upload_path'] . $fdata['file_name'];
            }
            //End file upload
        }




        $this->super_admin_model->save_madrasa_porichiti_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_madrasa_porichiti');
    }

    public function manage_madrasa_porichiti() {
        $data = array();
        $data['madrasa_porichiti_info'] = $this->welcome_model->select_madrasa_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_madrasa_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_madrasa_porichiti($madrasa_id) {
        $data = array();
        $data['madrasa_porichiti_info_by_id'] = $this->super_admin_model->select_madrasa_info_by_id($madrasa_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_madrasa_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_madrasa_porichiti_with_image() {

        $data = array();
        $data['madrasa_title'] = $this->input->post('madrasa_title', true);
        $madrasa_id = $this->input->post('madrasa_id', true);
        $data['madrasa_description'] = $this->input->post('madrasa_description', true);
        
        
            $config['upload_path'] = './image/madrasa_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['remove_spaces']=TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('madrasa_image')) {
                $error = $this->upload->display_errors();
                $sdata = array();
                $sdata['message'] = $error;
                $this->session->set_userdata($sdata);
                redirect('super_admin/manage_madrasa_porichiti');
            } else {
                $fdata = $this->upload->data();
                
                
                    $data['madrasa_image'] = $config['upload_path'] . $fdata['file_name'];
                }
                
        $this->super_admin_model->update_madrasa_porichiti_info_by_id($data, $madrasa_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_madrasa_porichiti');

    }

    public function update_madrasa_porichiti_without_image() {

        $data = array();
        $data['madrasa_title'] = $this->input->post('madrasa_title', true);
        $madrasa_id = $this->input->post('madrasa_id', true);
        $data['madrasa_description'] = $this->input->post('madrasa_description', true);

        if (!$this->input->post('madrasa_image', true)) {
             $madrasa_porichiti_info_by_id = $this->super_admin_model->select_madrasa_info_by_id($madrasa_id);
                
                    $data['madrasa_image']=$madrasa_porichiti_info_by_id->madrasa_image;
        }


        $this->super_admin_model->update_madrasa_porichiti_info_by_id($data, $madrasa_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_madrasa_porichiti');
    }

    public function delete_madrasa_porichiti($madrasa_id) {
        $this->super_admin_model->delete_madrasa_porichiti($madrasa_id);
        redirect('super_admin/manage_madrasa_porichiti');
    }

    public function add_protisthata_porichiti() {
        $data = array();
        $data['result'] = $this->welcome_model->select_protisthata_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_protisthata_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_protisthata_porichiti() {
        $data = array();
        $data['protisthata_title'] = $this->input->post('protisthata_title', true);
        $data['protisthata_description'] = $this->input->post('protisthata_description', true);

        $result = $this->welcome_model->select_protisthata_maincontent_info();
        if (!$result) {
            //Start file upload
            $config['upload_path'] = './image/madrasa_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('protisthata_image')) {
                $error = $this->upload->display_errors();
                $sdata = array();
                $sdata['message'] = $error;
                $this->session->set_userdata($sdata);
                redirect('super_admin/add_protisthata_porichiti');
            } else {
                $fdata = $this->upload->data();
                $data['protisthata_image'] = $config['upload_path'] . $fdata['file_name'];
            }
            //End file upload
        }

        $this->super_admin_model->save_protisthata_porichiti_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_protisthata_porichiti');
    }

    public function manage_protisthata_porichiti() {
        $data = array();
        $data['protisthata_porichiti_info'] = $this->welcome_model->select_protisthata_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_protisthata_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_protisthata_porichiti($protisthata_id) {
        $data = array();
        $data['protisthata_porichiti_info_by_id'] = $this->super_admin_model->select_protisthata_info_by_id($protisthata_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_protisthata_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_protisthata_porichiti_with_image() {

        $data = array();
        $data['protisthata_title'] = $this->input->post('protisthata_title', true);
        $protisthata_id = $this->input->post('protisthata_id', true);
        $data['protisthata_description'] = $this->input->post('protisthata_description', true);
        
        
            $config['upload_path'] = './image/madrasa_image/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
            $config['remove_spaces']=TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('protisthata_image')) {
                $error = $this->upload->display_errors();
                $sdata = array();
                $sdata['message'] = $error;
                $this->session->set_userdata($sdata);
                redirect('super_admin/manage_protisthata_porichiti');
            } else {
                $fdata = $this->upload->data();
                
                
                    $data['protisthata_image'] = $config['upload_path'] . $fdata['file_name'];
                }
                
        $this->super_admin_model->update_protisthata_porichiti_info_by_id($data, $protisthata_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_protisthata_porichiti');

    }

    public function update_protisthata_porichiti_without_image() {

        $data = array();
        $data['protisthata_title'] = $this->input->post('protisthata_title', true);
        $protisthata_id = $this->input->post('protisthata_id', true);
        $data['protisthata_description'] = $this->input->post('protisthata_description', true);

        if (!$this->input->post('protisthata_image', true)) {
             $protisthata_porichiti_info_by_id = $this->super_admin_model->select_protisthata_info_by_id($protisthata_id);
                
                    $data['protisthata_image']=$protisthata_porichiti_info_by_id->madrasa_image;
        }


        $this->super_admin_model->update_protisthata_porichiti_info_by_id($data, $protisthata_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_protisthata_porichiti');
    }

    public function delete_protisthata_porichiti($protisthata_id) {
        $this->super_admin_model->delete_protisthata_porichiti($protisthata_id);
        redirect('super_admin/manage_protisthata_porichiti');
    }

    public function add_shikkhok_porichiti() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_shikkhok_porichiti', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_shikkhok_porichiti() {
        $data = array();
        $data['shikkhok_name'] = $this->input->post('shikkhok_name', true);
        $data['shikkhok_details'] = $this->input->post('shikkhok_details', true);

        $this->super_admin_model->save_shikkhok_porichiti_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_shikkhok_porichiti');
    }

    public function manage_shikkhok_porichiti() {
        $data = array();
        $data['shikkhok_porichiti_info'] = $this->welcome_model->select_shikkhok_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_shikkhok_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_shikkhok_porichiti($shikkhok_id) {
        $data = array();
        $data['shikkhok_porichiti_info_by_id'] = $this->super_admin_model->select_shikkhok_info_by_id($shikkhok_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_shikkhok_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_shikkhok_porichiti() {

        $data = array();
        $data['shikkhok_name'] = $this->input->post('shikkhok_name', true);
        $shikkhok_id = $this->input->post('shikkhok_id', true);
        $data['shikkhok_details'] = $this->input->post('shikkhok_details', true);
        
        
            
                
        $this->super_admin_model->update_shikkhok_porichiti_info_by_id($data, $shikkhok_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_shikkhok_porichiti');

    }

    public function delete_shikkhok_porichiti($shikkhok_id) {
        $this->super_admin_model->delete_shikkhok_porichiti($shikkhok_id);
        redirect('super_admin/manage_shikkhok_porichiti');
    }

    public function add_bivag_porichiti() {
        $data = array();
        $data['result_category'] = $this->super_admin_model->result_category_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_bivag_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_bivag_porichiti() {
        $data = array();
        $data['bivag_name'] = $this->input->post('bivag_name', true);
        $data['r_category_id'] = $this->input->post('r_category_id', true);

        $this->super_admin_model->save_bivag_porichiti_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_bivag_porichiti');
    }

    public function manage_bivag_porichiti() {
        $data = array();
        $data['bivag_porichiti_info'] = $this->welcome_model->select_bivag_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_bivag_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_year() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_year', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_year() {
        $data = array();
        $data['year'] = $this->input->post('year', true);

        $this->super_admin_model->save_year_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_year');
    }

    public function manage_year() {
        $data = array();
        $data['bivag_porichiti_info'] = $this->welcome_model->select_bivag_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_bivag_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_semester() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_semester', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_semester() {
        $data = array();
        $data['semester'] = $this->input->post('semester', true);

        $this->super_admin_model->save_semester_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_semester');
    }

    public function manage_semester() {
        $data = array();
        $data['bivag_porichiti_info'] = $this->welcome_model->select_bivag_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_bivag_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_bivag_porichiti($bivag_id) {
        $data = array();
        $data['result_category'] = $this->super_admin_model->result_category_info();
        $data['bivag_porichiti_info_by_id'] = $this->super_admin_model->select_bivag_info_by_id($bivag_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_bivag_porichiti', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_bivag_porichiti() {

        $data = array();
        $data['bivag_name'] = $this->input->post('bivag_name', true);
        $bivag_id = $this->input->post('bivag_id', true);
        $data['r_category_id'] = $this->input->post('r_category_id', true);
        
        
            
                
        $this->super_admin_model->update_bivag_porichiti_info_by_id($data, $bivag_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_bivag_porichiti');

    }

    public function delete_bivag_porichiti($bivag_id) {
        $this->super_admin_model->delete_bivag_porichiti($bivag_id);
        redirect('super_admin/manage_bivag_porichiti');
    }

    public function add_vorti_niom() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_vorti_niom', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_vorti_niom() {
        $data = array();
        $data['vorti_title'] = $this->input->post('vorti_title', true);
        $data['vorti_details'] = $this->input->post('vorti_details', true);

        $this->super_admin_model->save_vorti_bisoy_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_vorti_niom');
    }

    public function manage_vorti_niom() {
        $data = array();
        $data['vorti_niom_info'] = $this->welcome_model->select_vorti_niom_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_vorti_niom', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_vorti_niom($vorti_id) {
        $data = array();
        $data['vorti_niom_info_by_id'] = $this->super_admin_model->select_vorti_niom_info_by_id($vorti_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_vorti_niom', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_vorti_niom() {
        
        $data = array();
        $data['vorti_title'] = $this->input->post('vorti_title', true);
        $vorti_id = $this->input->post('vorti_id', true);
        $data['vorti_details'] = $this->input->post('vorti_details', true);

        $this->super_admin_model->update_vorti_niom_info($data,$vorti_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_vorti_niom');

    }

    public function delete_vorti_niom($vorti_id) {
        $this->super_admin_model->delete_vorti_niom_info($vorti_id);
        redirect('super_admin/manage_vorti_niom');
    }

    public function add_kitab_by_year() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_kitab_by_year', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_kitab_by_year() {
        $data = array();
        $data['jamat_name'] = $this->input->post('jamat_name', true);
        $data['kitab_name'] = $this->input->post('kitab_name', true);

        $this->super_admin_model->save_kitab_by_year_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_kitab_by_year');
    }

    public function manage_kitab_by_year() {
        $data = array();
        $data['kitab_by_year_info']=  $this->welcome_model->select_yearly_kitab_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_kitab_by_year', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_kitab_by_year($yearly_kitab_id) {
        $data = array();
        $data['yearly_kitab_info_by_id'] = $this->super_admin_model->select_yearly_kitab_info_by_id($yearly_kitab_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_kitab_by_year', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_kitab_by_year() {
        $data = array();
        $data['jamat_name'] = $this->input->post('jamat_name', true);
        $yearly_kitab_id = $this->input->post('yearly_kitab_id', true);
        $data['kitab_name'] = $this->input->post('kitab_name', true);

        $this->super_admin_model->update_kitab_by_year_info($data,$yearly_kitab_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_kitab_by_year');
    }

    public function delete_kitab_by_year($yearly_kitab_id) {
        $this->super_admin_model->delete_kitab_by_year_info($yearly_kitab_id);
        redirect('super_admin/manage_kitab_by_year');
    }

    public function add_bivag_category() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_bivag_category', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_bivag_category() {
        $data = array();
        $data['bivag_name'] = $this->input->post('bivag_name', true);
        $data['bivag_description'] = $this->input->post('bivag_description', true);
        $this->super_admin_model->save_bivag_category_info($data);
//        $sdata = array();
//        $sdata['message'] = "Category information saved successfully";
//        $this->session->set_userdata($sdata);
        redirect('super_admin/add_bivag_category');
    }

    public function manage_bivag_category() {
        $data = array();
        $data['bivag_category'] = $this->super_admin_model->select_bivag_category_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_bivag_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_bivag_category($bivag_id) {
        $data = array();
        $data['bivag_category_info_by_id'] = $this->super_admin_model->select_bivag_category_info_by_id($bivag_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_bivag_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_bivag_category() {
        $data = array();
        $data['bivag_name'] = $this->input->post('bivag_name', true);
        $bivag_id = $this->input->post('bivag_id', true);
        $data['bivag_description'] = $this->input->post('bivag_description', true);
        $this->super_admin_model->update_bivag_category_info($data,$bivag_id);
//        $sdata = array();
//        $sdata['message'] = "Category information saved successfully";
//        $this->session->set_userdata($sdata);
        redirect('super_admin/manage_bivag_category');
    }

    public function delete_bivag_category($bivag_id) {
        $this->super_admin_model->delete_bivag_category_info($bivag_id);
        redirect('super_admin/manage_bivag_category');
    }

    public function add_vorti_fee() {
        $data = array();
        $data['bivag_category'] = $this->super_admin_model->select_bivag_category_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_vorti_fee', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_vorti_fee() {
        $data = array();
        $data['bivag_id'] = $this->input->post('bivag_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['fee_amount'] = $this->input->post('fee_amount', true);

        $this->super_admin_model->save_vorti_fee_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_vorti_fee');
    }

    public function manage_vorti_fee() {
        $data = array();
        //$data['bivag_category'] = $this->super_admin_model->select_bivag_category_info();
        $data['vorti_fee_content'] = $this->welcome_model->select_vorti_fee_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_vorti_fee', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_vorti_fee($fee_id) {
        $data = array();
        $data['bivag_category'] = $this->super_admin_model->select_bivag_category_info();
        $data['vorti_fee_info_by_id'] = $this->super_admin_model->select_vorti_fee_info_by_id($fee_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_vorti_fee', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_vorti_fee() {
        $data = array();
        $data['bivag_id'] = $this->input->post('bivag_id', true);
        $fee_id = $this->input->post('fee_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['fee_amount'] = $this->input->post('fee_amount', true);

        $this->super_admin_model->update_vorti_fee_info($data,$fee_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_vorti_fee');
        
    }

    public function delete_vorti_fee($fee_id) {
        $this->super_admin_model->delete_vorti_fee_info($fee_id);
        redirect('super_admin/manage_vorti_fee');
    }

    public function add_jogajog_info() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_jogajog_info', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_jogajog_info() {
        $data = array();
        $data['name'] = $this->input->post('name', true);
        $data['pesha'] = $this->input->post('pesha', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['bank_name'] = $this->input->post('bank_name', true);
        $data['bank_details'] = $this->input->post('bank_details', true);

        $this->super_admin_model->save_jogajog_information($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_vorti_fee');
    }

    public function manage_jogajog_info() {
        $data = array();
        $data['jogajog_info']=  $this->welcome_model->select_contact_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_jogajog_info', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_jogajog_info($jogajog_id) {
        $data = array();
        $data['jogajog_info_by_id'] = $this->super_admin_model->select_jogajog_info_by_id($jogajog_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_jogajog_info', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_jogajog_info() {
        $data = array();
        $data['name'] = $this->input->post('name', true);
        $jogajog_id = $this->input->post('jogajog_id', true);
        $data['pesha'] = $this->input->post('pesha', true);
        $data['phone'] = $this->input->post('phone', true);
        $data['bank_name'] = $this->input->post('bank_name', true);
        $data['bank_details'] = $this->input->post('bank_details', true);

        $this->super_admin_model->update_jogajog_information($data,$jogajog_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_jogajog_info');
    }
    
    public function add_boyan() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_boyan', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_boyan() {
        $data = array();
        $data['boyan_title'] = $this->input->post('boyan_title', true);

        //Start file upload
        $config['upload_path'] = './boyan/';
        $config['allowed_types'] = 'mpg|mpe|qt|mov|avi|mp4|rv|mpeg|wav|mp3|gif|jpg|png|movie';
        //$config['max_size'] = '100MB';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('boyan')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_boyan');
        } else {
            $fdata = $this->upload->data();
            $data['boyan'] = $config['upload_path'] . $fdata['file_name'];
        }
        //End file upload




        $this->super_admin_model->save_boyan_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Boyan Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_boyan');
    }

    public function manage_boyan() {
        $data = array();
        //$data['bivag_category'] = $this->super_admin_model->select_bivag_category_info();
        $data['boyan_info'] = $this->welcome_model->select_boyan_maincontent_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_boyan', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_boyan($boyan_id) {
        $data = array();
        $data['boyan_info_by_id'] = $this->super_admin_model->select_boyan_info_by_id($boyan_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_boyan_info', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_boyan() {
        $data = array();
        $data['boyan_title'] = $this->input->post('boyan_title', true);

        //Start file upload
        $config['upload_path'] = './boyan/';
        $config['allowed_types'] = 'mpg|mpe|qt|mov|avi|mp4|rv|mpeg|wav|mp3|gif|jpg|png|movie';
        //$config['max_size'] = '100MB';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('boyan')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_boyan');
        } else {
            $fdata = $this->upload->data();
            $data['boyan'] = $config['upload_path'] . $fdata['file_name'];
        }
        //End file upload




        $this->super_admin_model->save_boyan_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Boyan Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_boyan');
        
        
        $data = array();
        $data['bivag_id'] = $this->input->post('bivag_id', true);
        $fee_id = $this->input->post('fee_id', true);
        $data['title'] = $this->input->post('title', true);
        $data['fee_amount'] = $this->input->post('fee_amount', true);

        $this->super_admin_model->update_vorti_fee_info($data,$fee_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_vorti_fee');
        
    }

    public function delete_boyan($fee_id) {
        $this->super_admin_model->delete_vorti_fee_info($fee_id);
        redirect('super_admin/manage_vorti_fee');
    }

    public function add_subject_by_bivag() {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['year_info'] = $this->super_admin_model->year_info();
        $data['semester_info'] = $this->super_admin_model->semester_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_subjects_by_bivag', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_subject_by_bivag() {
        $data = array();
        $data['bivag_id'] = $this->input->post('bivag_id', true);
        $data['year_id'] = $this->input->post('year_id', true);
        $data['semester_id'] = $this->input->post('semester_id', true);
        $data['subject_name'] = $this->input->post('subject_name', true);
        $data['course_code'] = $this->input->post('course_code', true);
        $data['credit'] = $this->input->post('credit', true);

        $this->super_admin_model->save_subject_by_bivag_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);$data['bivag_info'] = $this->super_admin_model->bivag_info();
        redirect('super_admin/add_subject_by_bivag');
    }

    public function manage_subject_by_bivag() {
        $data = array();
        $data['subject_by_bivag_info'] = $this->super_admin_model->select_subject_by_bivag_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_subject_by_bivag', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function edit_subject_by_bivag($subject_id) {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['subject_info_by_id'] = $this->super_admin_model->select_subject_info_by_id($subject_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_subject_by_bivag', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_subject_by_bivag() {
        $data = array();
        $data['bivag_id'] = $this->input->post('bivag_id', true);
        $subject_id = $this->input->post('subject_id', true);
        $data['subject_name'] = $this->input->post('subject_name', true);
        $data['course_code'] = $this->input->post('course_code', true);
        $data['credit'] = $this->input->post('credit', true);

        $this->super_admin_model->update_subject_by_bivag_info($data,$subject_id);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);$data['bivag_info'] = $this->super_admin_model->bivag_info();
        redirect('super_admin/manage_subject_by_bivag');

    }

    public function delete_subject_by_bivag($subject_id) {
        $this->super_admin_model->delete_subject_by_bivag_info($subject_id);
        redirect('super_admin/manage_subject_by_bivag');
    }

    public function add_student_info() {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_student_info', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_student_info() {
        $data = array();
        $data['student_name'] = $this->input->post('student_name', true);
        $data['student_roll'] = $this->input->post('student_roll', true);
        $data['bivag_id'] = $this->input->post('bivag_id', true);

        $this->super_admin_model->save_student_information($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_student_info');
    }

    public function manage_student() {
        $data = array();
        $data['all_student_info'] = $this->super_admin_model->all_student_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_student', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_student_mark($student_id) {
        $data = array();
        $data['student_id'] = $student_id;
        $data['student_info'] = $this->super_admin_model->student_info_by_id($student_id);
        $data['student_mark'] = $this->super_admin_model->select_all_student_mark_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_student_mark', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_student_mark() {
        $data = array();
        $data['student_id'] = $this->input->post('student_id', true);
        $data['subject_id'] = $this->input->post('subject_id', true);
        $data['ca'] = $this->input->post('ca', true);
        $data['part_a'] = $this->input->post('part_a', true);
        $data['part_b'] = $this->input->post('part_b', true);
        $data['total'] = $this->input->post('total', true);
        $data['grade'] = $this->input->post('grade', true);

        $this->super_admin_model->save_student_mark_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        //redirect('super_admin/add_student_mark/'.$data['student_id']);
        redirect('super_admin/add_student_mark/' . $data['student_id']);
    }

    public function add_all_student_mark1() {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['year_info'] = $this->super_admin_model->year_info();
        $data['semester_info'] = $this->super_admin_model->semester_info();
        $data['subject_info'] = $this->super_admin_model->subject_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_all_student_mark1', $data, true);
        $this->load->view('admin/admin_master', $data);
        
    }

    public function add_all_student_mark() {
        $data = array();
        $bivag_id=$data['bivag_id'] = $this->input->post('bivag_id', true);
        $data['year_id'] = $this->input->post('year_id', true);
        $data['semester_id'] = $this->input->post('semester_id', true);
        $subject_id=$data['subject_id']= $this->input->post('subject_id', true);
        $data['student_info_by_session'] = $this->super_admin_model->student_info_by_session($bivag_id);
        $student_mark_by_subject=$data['student_mark_by_subject'] = $this->super_admin_model->select_all_student_mark_info_by_subject($bivag_id,$subject_id);
        if($student_mark_by_subject){
            redirect('super_admin/add_all_student_mark1');
        }
        else{
            $data['admin_maincontent'] = $this->load->view('admin/add_all_student_mark', $data, true);
            $this->load->view('admin/admin_master', $data);
        }
        
        
    }

    public function save_all_student_mark() {
        
       foreach ($_POST['data'] as $data){
          $this->db->insert('tbl_mark',$data);
       }
        
        $sdata=array();
        $sdata['message']='Save mark Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_all_student_mark1');
        //redirect('super_admin/add_student_mark/' . $data['student_id']);
    }

    public function result_maker1() {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['year_info'] = $this->super_admin_model->year_info();
        $data['semester_info'] = $this->super_admin_model->semester_info();
        $data['admin_maincontent'] = $this->load->view('admin/student_result_maker1', $data, true);
        $this->load->view('admin/admin_master', $data);    
        
    }

    public function result_maker() {
        $data = array();
        $bivag_id=$this->input->post('bivag_id', true);
        $year_id =$data['year_id'] = $this->input->post('year_id', true);
        $semester_id =$data['semester_id'] = $this->input->post('semester_id', true);
        $category_id=$data['category_id']=$this->input->post('category_id', true);
        
        if($category_id==2){
            $data['improvement_student_info_by_session'] = $this->super_admin_model->improvement_student_info_by_session2($bivag_id,$year_id,$semester_id);
//            foreach($improvement_student_info_by_session as $improvement_student_info){
//                $data['student_info_by_session'] = $this->super_admin_model->student_info_by_session($improvement_student_info->bivag_id);
//            }
            
            $data['student_info_by_session'] = $this->super_admin_model->student_info_by_session($bivag_id);
            $data['subject_info_by_session'] = $this->super_admin_model->subject_info_by_session_year_semester($bivag_id,$year_id,$semester_id);
            $data['student_mark'] = $this->super_admin_model->select_all_student_mark_info();
            //$data['improvement_info'] = $this->super_admin_model->improvement_info_by_session($bivag_id);
            $data['admin_maincontent'] = $this->load->view('admin/improvement_student_result_maker', $data, true);
            $this->load->view('admin/admin_master', $data);
        }
        else{
            $data['student_info_by_session'] = $this->super_admin_model->student_info_by_session($bivag_id);
            $data['subject_info_by_session'] = $this->super_admin_model->subject_info_by_session_year_semester($bivag_id,$year_id,$semester_id);
            $data['student_mark'] = $this->super_admin_model->select_all_student_mark_info();
            //$data['improvement_info'] = $this->super_admin_model->improvement_info_by_session($bivag_id);
            $data['admin_maincontent'] = $this->load->view('admin/student_result_maker', $data, true);
            $this->load->view('admin/admin_master', $data);
        }
        
    }

    public function improvement_registration() {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['year_info'] = $this->super_admin_model->year_info();
        $data['semester_info'] = $this->super_admin_model->semester_info();
        $data['subject_info'] = $this->super_admin_model->subject_info();
        $data['all_student_info'] = $this->super_admin_model->all_student_info();
        $data['admin_maincontent'] = $this->load->view('admin/improvement_registration', $data, true);
        $this->load->view('admin/admin_master', $data);    
        
    }

    public function save_improvement_registration() {
        $data = array();
        $data['bivag_id'] = $this->input->post('bivag_id', true);
        $data['year_id'] = $this->input->post('year_id', true);
        $data['semester_id'] = $this->input->post('semester_id', true);
        $data['subject_id'] = $this->input->post('subject_id', true);
        $data['student_id'] = $this->input->post('student_id', true);
        $mark=$this->super_admin_model->select_mark_info_by_student($data['student_id'],$data['subject_id']);

        if($mark->grade>3){
            redirect('super_admin/improvement_registration');
        }
        else{
            
            $this->super_admin_model->save_improvement_registration_info($data);
            //$sdata=array();
            //$sdata['message']='Save masael Information Successfully !';
            //$this->session->set_userdata($sdata);
            //redirect('super_admin/add_student_mark/'.$data['student_id']);
            redirect('super_admin/improvement_registration');
        }
    }

    public function add_improvement_mark1() {
        $data = array();
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['year_info'] = $this->super_admin_model->year_info();
        $data['semester_info'] = $this->super_admin_model->semester_info();
        $data['subject_info'] = $this->super_admin_model->subject_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_improvement_mark1', $data, true);
        $this->load->view('admin/admin_master', $data);
        
    }

    public function add_improvement_mark() {
        $data = array();
        $bivag_id=$data['bivag_id'] = $this->input->post('bivag_id', true);
        $data['year_id'] = $this->input->post('year_id', true);
        $data['semester_id'] = $this->input->post('semester_id', true);
        $subject_id=$data['subject_id']= $this->input->post('subject_id', true);
        $data['improvement_student_info_by_session'] = $this->super_admin_model->improvement_student_info_by_session($bivag_id,$subject_id);
        $data['student_mark'] = $this->super_admin_model->select_all_student_mark_info();
        $data['admin_maincontent'] = $this->load->view('admin/add_improvement_mark', $data, true);
        $this->load->view('admin/admin_master', $data);
        
    }

    public function update_improvement_mark() {
        
       foreach ($_POST['data'] as $data){
           $mark=$this->super_admin_model->select_mark_info_by_student($data['student_id'],$data['subject_id']);
           $result_category=$this->super_admin_model->select_session_info_by_id($data['bivag_id']);
           
           if($data['grade']>$mark->grade){
               if($result_category->r_category_id == 2){
                   if($data['grade']>3){
                        $data['grade']=3;
                   }
               }
            
            $this->db->where('student_id',$data['student_id']);
            $this->db->where('subject_id',$data['subject_id']);
            $this->db->update('tbl_mark',$data);
           }
       }
        
        $sdata=array();
        $sdata['message']='Update mark Information Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_improvement_mark1');
        //redirect('super_admin/add_student_mark/' . $data['student_id']);
    }

    public function manage_answer() {

        $data = array();
        $data['all_answer_info'] = $this->super_admin_model->all_answer_info();
        $data['all_question_info'] = $this->super_admin_model->all_question_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_answer', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function give_answer($question_id) {
        $data = array();
        $data['published_category_info'] = $this->super_admin_model->published_category_info();
        $data['question_info_by_id'] = $this->super_admin_model->question_info_by_id($question_id);
        $data['admin_maincontent'] = $this->load->view('admin/give_answer', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_answer() {
        $data = array();
        $data['question_id'] = $this->input->post('question_id', true);
        $data['question'] = $this->input->post('question', true);
        $data['answer_title'] = $this->input->post('answer_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['short_answer'] = $this->input->post('short_answer', true);
        $data['long_answer'] = $this->input->post('long_answer', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_answer_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_answer');
    }

    public function edit_answer($question_id) {
        $data = array();
        $data['published_category_info'] = $this->super_admin_model->published_category_info();
        $data['answer_info_by_id'] = $this->super_admin_model->answer_info_by_id($question_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_answer', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_answer() {
        $data = array();
        $data['question_id'] = $this->input->post('question_id', true);
        $data['question'] = $this->input->post('question', true);
        $data['answer_title'] = $this->input->post('answer_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['short_answer'] = $this->input->post('short_answer', true);
        $data['long_answer'] = $this->input->post('long_answer', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->update_answer_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/manage_answer');
    }

    public function published_answer_info($answer_id) {
        $this->super_admin_model->set_published_answer_info($answer_id);
        redirect('super_admin/manage_answer');
    }

    public function unpublished_answer_info($answer_id) {
        $this->super_admin_model->set_unpublished_answer_info($answer_id);
        redirect('super_admin/manage_answer');
    }

    public function delete_answer($question_id) {
        $this->super_admin_model->delete_answer_info($question_id);
        $this->super_admin_model->delete_question_info($question_id);
        redirect('super_admin/manage_answer');
    }

    public function delete_question($question_id) {
        $this->super_admin_model->delete_question_info($question_id);
        redirect('super_admin/manage_answer');
    }

    public function add_slider_image() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_slider_image', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_slider_image() {
        $data = array();
        $data['image_title'] = $this->input->post('image_title', true);
        $data['image_details'] = $this->input->post('image_details', true);


        //Start file upload
        $config['upload_path'] = './image/slider_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '300';
        $config['max_width'] = '1624';
        $config['max_height'] = '968';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slider_image')) {
            $error = $this->upload->display_errors();
            $sdata = array();
            $sdata['message'] = $error;
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_slider_image');
        } else {
            $fdata = $this->upload->data();
            $data['slider_image'] = $config['upload_path'] . $fdata['file_name'];
        }
        //End file upload




        $this->super_admin_model->save_slider_image_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_slider_image');
    }

    public function add_jamia_songbad() {
        $data = array();
        $data['admin_maincontent'] = $this->load->view('admin/add_jamia_songbad', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_songbad() {
        $data = array();
        $data['title'] = $this->input->post('title', true);
        $data['songbad'] = $this->input->post('songbad', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->super_admin_model->save_songbad_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('super_admin/add_jamia_songbad');
    }

}
