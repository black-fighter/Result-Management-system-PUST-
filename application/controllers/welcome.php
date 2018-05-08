<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data = array();
        $data['title'] = "www.resultmanagementpust.com";
        $data['slider_image']=  $this->welcome_model->select_slider_image_info();
        $data['jamiar_songbad']=  $this->welcome_model->select_songbad_info();
        $data['madrasa_porichiti']=  $this->welcome_model->select_madrasa_maincontent_info();
        $data['protisthata_maincontent']=  $this->welcome_model->select_protisthata_maincontent_info();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['maincontent'] = $this->load->view('home_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function songbad_details($songbad_id) {
        $data = array();
        $data['title'] = 'Songbad Details';
        $data['songbad_info'] = $this->welcome_model->select_songbad_info_by_id($songbad_id);
        $data['masael_maincontent'] = $this->load->view('songbad_details', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function about() {
        $data = array();
        $data['title'] = "মাদ্রাসা পরিচিতি";
        $data['madrasa_maincontent']=  $this->welcome_model->select_madrasa_maincontent_info();
        $data['about_us_maincontent']=   $this->load->view('madrasa_porichiti_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('about_us_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function protisthata() {
        $data = array();
        $data['title'] = "প্রতিষ্ঠাতা পরিচিতি";
        $data['protisthata_maincontent']=  $this->welcome_model->select_protisthata_maincontent_info();
        $data['about_us_maincontent']=   $this->load->view('protisthata_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('about_us_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function shikkhok() {
        $data = array();
        $data['title'] = "শিক্ষক পরিচিতি";
        $data['shikkhok_maincontent']=  $this->welcome_model->select_shikkhok_maincontent_info();
        $data['about_us_maincontent']=   $this->load->view('shikkhok_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('about_us_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function bivag() {
        $data = array();
        $data['title'] = "বিভাগসমুহ";
        $data['bivag_maincontent']=  $this->welcome_model->select_bivag_maincontent_info();
        $data['academic_maincontent']=   $this->load->view('bivag_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('academic_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function vorti_rules_full() {
        $data = array();
        $data['title'] = "ভর্তির নিয়ম";
        $data['vorti_niom_content']=  $this->welcome_model->select_vorti_niom_info();
        $data['vorti_niom_maincontent']=   $this->load->view('vorti_niom_maincontent',$data, true);
        
        $data['yearly_kitab_content']=  $this->welcome_model->select_yearly_kitab_info();
        $data['yearly_kitab_maincontent']=   $this->load->view('yearly_kitab_maincontent',$data, true);
        
        $data['vorti_fee_content']=  $this->welcome_model->select_vorti_fee_info();
        $data['vorti_fee_maincontent']=   $this->load->view('vorti_fee_maincontent',$data, true);
        
        $data['maincontent'] = $this->load->view('vorti_rules_full_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function boyan() {
        $data = array();
        $data['title'] = "বয়ান";
        $data['boyan_maincontent']=  $this->welcome_model->select_boyan_maincontent_info();
        $data['media_maincontent']=   $this->load->view('boyan_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('media_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function download($boyan_id) {
        $data = array();
        $data['title'] = "বয়ান";
        $boyan_content_by_id=  $this->welcome_model->select_boyan_info_by_id($boyan_id);
       
        $this->load->helper('download');

        $data = file_get_contents(base_url() . $boyan_content_by_id->boyan); // Read the file's contents
        $name = $boyan_content_by_id->boyan;

        force_download($name, $data);
        
//        $data = file_get_contents(APPPATH . 'controllers/upload/project_name/bc68gdas9jfeh9yfj/' . $this->uri->segment(3)); // Read the file's contents
//        $name = $this->uri->segment(3);
//        force_download($name, $data);
    }

    public function courses() {
        $data = array();
        $data['title'] = "Courses";
        $data['maincontent'] = $this->load->view('course_content', '', true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function price() {
        $data = array();
        $data['title'] = "Price";
        $data['maincontent'] = $this->load->view('price_content', '', true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function videos() {
        $data = array();
        $data['title'] = "Videos";
        $data['maincontent'] = $this->load->view('video_content', '', true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function contact() {
        $data = array();
        $data['title'] = "Contact";
        $data['contact_maincontent']=  $this->welcome_model->select_contact_maincontent_info();
        $data['contact_content']=   $this->load->view('contact_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('contact_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function masael() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['title'] = "Masael";
        $data['all_published_masael_info'] = $this->welcome_model->select_all_published_masael_info();
        $data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['masael_maincontent'] = $this->load->view('masael_maincontent', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function masael_search($masael_title)
    {
        //echo $masael_title;
        $data = array();
        $all_published_masael_info_by_search = $this->welcome_model->select_all_published_masael_info_by_search($masael_title);
        
        
        foreach ($all_published_masael_info_by_search as $v_masael) {
                echo "<ul><li><a href=\" ".base_url()."welcome/masael_maincontent_details/".$v_masael->masael_id." \">".$v_masael->masael_title."</a></li></ul>";
        } 
         
//        $data['masael_title_by_search'] = $this->load->view('masael_search', $data, true);
//        return $data['masael_title_by_search'];
        
        
//        if($masael_title==NULL)
//       {
//           echo 'Please Enter Email Address';
//       }
//       else{
//            $result= $this->checkout_model->ajax_email_check_info($email_address);
//            if($result)
//                {
//                    echo 'Email Address Alredy Exist !';
//                }
//                else{
//                    echo 'Email Address Avilable';
//                }
//       }
       
    }

    public function masael_maincontent_details($masael_id) {
        $data = array();
        $data['title'] = 'Masael Details';
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['masael_details_info'] = $this->welcome_model->select_masael_long_description_info($masael_id);
        $data['comments_info'] = $this->welcome_model->select_all_published_comments_info_by_masael($masael_id);
        $hit_count = $data['masael_details_info']->hit_count + 1;
        $this->welcome_model->update_hit_count_info($masael_id, $hit_count);
        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['masael_maincontent'] = $this->load->view('masael_maincontent_details', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function masael_by_category($category_id) {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['title'] = "Category Masael";
        $data['all_published_masael_info'] = $this->welcome_model->select_all_published_masael_by_category($category_id);
        $data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['masael_maincontent'] = $this->load->view('masael_maincontent', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function user_sineup() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['title'] = "User SineUp";
        $data['all_published_masael_info'] = $this->welcome_model->select_all_published_masael_info();
        $data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['masael_maincontent'] = $this->load->view('user_sineup', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function save_user() {
        $data = array();
        $data['user_name'] = $this->input->post('user_name', true);
        $data['email_address'] = $this->input->post('email_address', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['age'] = $this->input->post('age', true);
        $this->welcome_model->save_user_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('welcome/user_sineup');
    }

    public function user_login() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['title'] = "User Login";
        $data['all_published_masael_info'] = $this->welcome_model->select_all_published_masael_info();
        $data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['masael_maincontent'] = $this->load->view('user_login', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function user_login_info() {
        $email_address = $this->input->post('email_address', true);
        $password = $this->input->post('password', true);
        $result = $this->welcome_model->check_user_login_info($email_address, $password);
        $sdata = array();
        if ($result) {
            $sdata['user_id'] = $result->user_id;
            $sdata['user_name'] = $result->user_name;
            $this->session->set_userdata($sdata);

            redirect('welcome/masael');
        } else {
            $sdata['message'] = "Invalid userid and/or password !";
            $this->session->set_userdata($sdata);
            redirect('welcome/user_login');
        }
    }

    public function user_logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_name');
        $sdata = array();
        $sdata['message'] = "You have logged out successfully.";
        $this->session->set_userdata($sdata);
        redirect('welcome/masaels');
    }

    public function save_comments($user_id) {
        $data = array();
        $data['comments'] = $this->input->post('comments', true);
        $data['masael_id'] = $this->input->post('masael_id', true);
        $data['user_id'] = $user_id;
        $this->welcome_model->save_comments_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('welcome/masael_maincontent_details/' . $data['masael_id']);
    }

    public function result() {
        $data = array();
        $data['title'] = "Result";
        $data['bivag_info'] = $this->super_admin_model->bivag_info();
        $data['subject_content']=  $this->welcome_model->select_subject_content_info();
        $data['result_maincontent']=  $this->welcome_model->select_result_maincontent_info();
        $data['result_content']=   $this->load->view('result_maincontent',$data, true);
        $data['maincontent'] = $this->load->view('result_content',$data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }
    public function question() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['title'] = "Proshno";
        $data['all_published_masael_info'] = $this->welcome_model->select_all_published_masael_info();
        $data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['masael_maincontent'] = $this->load->view('question', $data, true);
        $data['maincontent'] = $this->load->view('masael_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function save_jiggasa() {
        $data = array();
        $data['question'] = $this->input->post('question', true);
        $this->welcome_model->save_jiggasa_info($data);
        //$sdata=array();
        //$sdata['message']='Save masael Information Successfully !';
        //$this->session->set_userdata($sdata);
        redirect('welcome/masael');
    }

    public function question_answer() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        $data['title'] = "Question & Answer";
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        //$data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        //$data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['question_answer_maincontent'] = $this->load->view('question_answer_maincontent', $data, true);
        $data['maincontent'] = $this->load->view('question_answer_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

    public function question_answer_maincontent_details($answer_id) {
        $data = array();
        $data['title'] = 'Question & Answer Details';
        $data['all_published_category'] = $this->welcome_model->select_all_published_category_info();
        //$data['recent_masael_info'] = $this->welcome_model->select_recent_published_masael_info();
        $data['question_answer_details_info'] = $this->welcome_model->select_question_answer_details_info($answer_id);
//        $data['comments_info'] = $this->welcome_model->select_all_published_comments_info_by_masael($masael_id);
//        $hit_count = $data['masael_details_info']->hit_count + 1;
//        $this->welcome_model->update_hit_count_info($masael_id, $hit_count);
//        $data['popular_masael_info'] = $this->welcome_model->select_popular_published_masael_info();
        $data['question_answer_maincontent'] = $this->load->view('question_answer_maincontent_details', $data, true);
        $data['maincontent'] = $this->load->view('question_answer_content', $data, true);
        $data['all_published_question_answer_info'] = $this->welcome_model->select_all_published_question_answer_info();
        $this->load->view('master', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */