<?php

class Welcome_Model extends CI_Model {
    //put your code here
    public function select_all_published_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_all_published_masael_info() {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $this->db->where('publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_all_published_masael_info_by_search($masael_title) {
        $sql= "SELECT * FROM tbl_masael WHERE masael_title LIKE '$masael_title%' AND publication_status=1 ";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function select_recent_published_masael_info() {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $this->db->where('publication_status',1);
        $this->db->order_by('masael_id','desc');
        $this->db->limit(3);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_popular_published_masael_info() {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $this->db->where('publication_status',1);
        $this->db->order_by('hit_count','desc');
        $this->db->limit(3);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function update_hit_count_info($masael_id,$hit_count) {
        $this->db->set('hit_count',$hit_count);
        $this->db->where('masael_id',$masael_id);
        $this->db->update('tbl_masael');
    }
    public function select_masael_long_description_info($masael_id) {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $this->db->where('masael_id',$masael_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function select_all_published_masael_by_category($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $this->db->where('publication_status',1);
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function save_user_info($data)
    {
        $this->db->insert('tbl_user',$data);
    }
    public function check_user_login_info($email_address,$password)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email_address',$email_address);
        $this->db->where('password',  md5($password));
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function save_comments_info($data)
    {
        $this->db->insert('tbl_comments',$data);
    }
    public function select_all_published_comments_info_by_masael($masael_id) {
        $sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
        
//        $sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
//        $query_result=$this->db->query($sql); 
//        $result=$query_result->result();
//        
//        
//        return $result;
    }
    public function select_madrasa_maincontent_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_madrasa_porichiti');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_protisthata_maincontent_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_protisthata_porichiti');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_shikkhok_maincontent_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_shikkhok_porichiti');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_bivag_maincontent_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_bivag');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_subject_by_bivag_info()
    {
        $sql="select s.*,b.* from tbl_subjects as s,tbl_bivag as b where s.bivag_id=b.bivag_id";
        //$sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
        
    }
    public function select_vorti_niom_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_vorti_niom');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_yearly_kitab_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_yearly_kitab');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_vorti_fee_info()
    {
        $sql="select v_f.*,b_c.* from tbl_vorti_fee as v_f,tbl_bivag_category as b_c where v_f.bivag_id=b_c.bivag_id";
        //$sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
    }
    public function select_contact_maincontent_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_jogajog');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_boyan_maincontent_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_boyan');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_boyan_info_by_id($boyan_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_boyan');
        $this->db->where('boyan_id',$boyan_id);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }
    public function select_subject_content_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_subjects');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
        
    }
    public function select_result_maincontent_info()
    {
        $sql="SELECT s.*,m.* FROM tbl_student as s,tbl_mark as m WHERE s.student_id=m.student_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
        
    }
    public function save_jiggasa_info($data)
    {
        $this->db->insert('tbl_question',$data);
    }
    public function select_all_published_question_answer_info() {
        $this->db->select('*');
        $this->db->from('tbl_answer');
        $this->db->where('publication_status',1);
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_question_answer_details_info($answer_id) {
        $this->db->select('*');
        $this->db->from('tbl_answer');
        $this->db->where('answer_id',$answer_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function select_slider_image_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider_image');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_songbad_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_songbad');
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }
    public function select_songbad_info_by_id($songbad_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_songbad');
        $this->db->where('songbad_id',$songbad_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}
