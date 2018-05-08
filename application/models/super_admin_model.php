<?php

class Super_Admin_Model extends CI_Model{
    
    public function save_category_info($data){
        $this->db->insert('tbl_category',$data);
    }
    public function all_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function set_unpublished_category_info($category_id) {
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function set_published_category_info($category_id) {
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    public function take_category_info_by_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_category_info_by_id($data,$category_id) {
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
    }
    public function delete_category_info($category_id) {
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    public function published_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function save_masael_info($data)
    {
        $this->db->insert('tbl_masael',$data);
    }
    public function all_masael_info() {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function set_published_masael_info($masael_id) {
        $this->db->set('publication_status',1);
        $this->db->where('masael_id',$masael_id);
        $this->db->update('tbl_masael');
    }
    public function set_unpublished_masael_info($masael_id) {
        $this->db->set('publication_status',0);
        $this->db->where('masael_id',$masael_id);
        $this->db->update('tbl_masael');
    }
    public function select_masael_info_by_id($masael_id) {
        $this->db->select('*');
        $this->db->from('tbl_masael');
        $this->db->where('masael_id',$masael_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_masael_info_by_id($data,$masael_id) {
        $this->db->where('masael_id',$masael_id);
        $this->db->update('tbl_masael',$data);
    }
    public function delete_masael_info($masael_id) {
        $this->db->where('masael_id',$masael_id);
        $this->db->delete('tbl_masael');
    }
    public function all_comments_info() {
        $this->db->select('*');
        $this->db->from('tbl_comments');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function set_published_comments_info($comments_id) {
        $this->db->set('publication_status',1);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
    }
    public function set_unpublished_comments_info($comments_id) {
        $this->db->set('publication_status',0);
        $this->db->where('comments_id',$comments_id);
        $this->db->update('tbl_comments');
    }
    public function delete_comments_info($comments_id) {
        $this->db->where('comments_id',$comments_id);
        $this->db->delete('tbl_comments');
    }
    public function save_madrasa_porichiti_info($data)
    {
        $this->db->insert('tbl_madrasa_porichiti',$data);
    }
    public function save_protisthata_porichiti_info($data)
    {
        $this->db->insert('tbl_protisthata_porichiti',$data);
    }
    public function save_shikkhok_porichiti_info($data)
    {
        $this->db->insert('tbl_shikkhok_porichiti',$data);
    }
    public function save_year_info($data)
    {
        $this->db->insert('tbl_year',$data);
    }
    public function save_semester_info($data)
    {
        $this->db->insert('tbl_semester',$data);
    }
    public function save_bivag_porichiti_info($data)
    {
        $this->db->insert('tbl_bivag',$data);
    }
    public function bivag_info() {
        $this->db->select('*');
        $this->db->from('tbl_bivag');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_session_info_by_id($bivag_id){
        $this->db->select('*');
        $this->db->from('tbl_bivag');
        $this->db->where('bivag_id',$bivag_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function year_info() {
        $this->db->select('*');
        $this->db->from('tbl_year');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function semester_info() {
        $this->db->select('*');
        $this->db->from('tbl_semester');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function subject_info() {
        $this->db->select('*');
        $this->db->from('tbl_subjects');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function save_subject_by_bivag_info($data)
    {
        $this->db->insert('tbl_subjects',$data);
    }
    public function save_vorti_bisoy_info($data)
    {
        $this->db->insert('tbl_vorti_niom',$data);
    }
    public function save_kitab_by_year_info($data)
    {
        $this->db->insert('tbl_yearly_kitab',$data);
    }
    public function save_bivag_category_info($data)
    {
        $this->db->insert('tbl_bivag_category',$data);
    }
    public function select_bivag_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_bivag_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function save_vorti_fee_info($data)
    {
        $this->db->insert('tbl_vorti_fee',$data);
    }
    public function save_jogajog_information($data)
    {
        $this->db->insert('tbl_jogajog',$data);
    }
    public function save_boyan_info($data)
    {
        $this->db->insert('tbl_boyan',$data);
    }
    public function save_student_information($data)
    {
        $this->db->insert('tbl_student',$data);
    }
    public function all_student_info() {
        
        $sql="SELECT s.*,b.* FROM tbl_student as s,tbl_bivag as b WHERE s.bivag_id=b.bivag_id";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function student_info_by_session($bivag_id) {
        $this->db->select('*');
        $this->db->from('tbl_student');
        $this->db->where('bivag_id',$bivag_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function improvement_student_info_by_session($bivag_id,$subject_id) {
        $sql="SELECT s.*,i.* FROM tbl_student as s,tbl_improvement as i WHERE s.student_id=i.student_id AND $subject_id=i.subject_id";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
      
    }
    
    public function subject_info_by_session_year_semester($bivag_id,$year_id,$semester_id){
        $sql="SELECT * FROM tbl_subjects WHERE bivag_id=$bivag_id AND year_id=$year_id AND semester_id=$semester_id";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function improvement_info_by_session($bivag_id) {
        $this->db->select('*');
        $this->db->from('tbl_improvement');
        $this->db->where('bivag_id',$bivag_id);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function improvement_student_info_by_session2($bivag_id,$year_id,$semester_id) {
        $sql="SELECT * FROM tbl_improvement WHERE bivag_id=$bivag_id AND year_id=$year_id AND semester_id=$semester_id";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
      
    }
    public function student_info_by_id($student_id) {
        
        $sql="SELECT s.*,sub.* FROM tbl_student as s,tbl_subjects as sub WHERE s.bivag_id=sub.bivag_id AND s.student_id=$student_id";
        $query_result= $this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    public function save_student_mark_info($data)
    {
        $this->db->insert('tbl_mark',$data);
    }
    public function save_all_student_mark_info($data)
    {
        $this->db->insert('tbl_mark',$data);
    }
    public function save_improvement_registration_info($data)
    {
        $this->db->insert('tbl_improvement',$data);
    }
    public function select_all_student_mark_info() {
        $this->db->select('*');
        $this->db->from('tbl_mark');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_all_student_mark_info_by_subject($bivag_id,$subject_id) {
        $sql="select * from tbl_mark where bivag_id=$bivag_id AND  subject_id=$subject_id";
        //$sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result = $this->db->query($sql);
        $result=$query_result->row();
        return $result;
        
        $this->db->select('*');
        $this->db->from('tbl_mark');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function select_mark_info_by_student($student_id,$subject_id) {
        $sql="select * from tbl_mark where student_id=$student_id AND  subject_id=$subject_id";
        //$sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result = $this->db->query($sql);
        $result=$query_result->row();
        return $result;
    }
    public function all_question_info() {
        $this->db->select('*');
        $this->db->from('tbl_question');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function all_answer_info() {
        $this->db->select('*');
        $this->db->from('tbl_answer');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    public function question_info_by_id($question_id) {
        $this->db->select('*');
        $this->db->from('tbl_question');
        $this->db->where('question_id',$question_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function save_answer_info($data)
    {
        $this->db->insert('tbl_answer',$data);
    }
    public function answer_info_by_id($question_id) {
        $this->db->select('*');
        $this->db->from('tbl_answer');
        $this->db->where('question_id',$question_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_answer_info($data)
    {
        $this->db->update('tbl_answer',$data);
    }
    public function set_published_answer_info($answer_id) {
        $this->db->set('publication_status',1);
        $this->db->where('answer_id',$answer_id);
        $this->db->update('tbl_answer');
    }
    public function set_unpublished_answer_info($answer_id) {
        $this->db->set('publication_status',0);
        $this->db->where('answer_id',$answer_id);
        $this->db->update('tbl_answer');
    }
    public function delete_answer_info($question_id) {
        $this->db->where('question_id',$question_id);
        $this->db->delete('tbl_answer');
    }
    public function delete_question_info($question_id) {
        $this->db->where('question_id',$question_id);
        $this->db->delete('tbl_question');
    }
    public function save_slider_image_info($data)
    {
        $this->db->insert('tbl_slider_image',$data);
    }
    public function save_songbad_info($data)
    {
        $this->db->insert('tbl_songbad',$data);
    }
    public function select_madrasa_info_by_id($madrasa_id) {
        $this->db->select('*');
        $this->db->from('tbl_madrasa_porichiti');
        $this->db->where('madrasa_id',$madrasa_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_madrasa_porichiti_info_by_id($data,$madrasa_id) {
        $this->db->where('madrasa_id',$madrasa_id);
        $this->db->update('tbl_madrasa_porichiti',$data);
    }
    public function delete_madrasa_porichiti($madrasa_id) {
        $this->db->where('madrasa_id',$madrasa_id);
        $this->db->delete('tbl_madrasa_porichiti');
    }
    public function select_protisthata_info_by_id($protisthata_id) {
        $this->db->select('*');
        $this->db->from('tbl_protisthata_porichiti');
        $this->db->where('protisthata_id',$protisthata_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_protisthata_porichiti_info_by_id($data,$protisthata_id) {
        $this->db->where('protisthata_id',$protisthata_id);
        $this->db->update('tbl_protisthata_porichiti',$data);
    }
    public function delete_protisthata_porichiti($protisthata_id) {
        $this->db->where('protisthata_id',$protisthata_id);
        $this->db->delete('tbl_protisthata_porichiti');
    }
    public function select_shikkhok_info_by_id($shikkhok_id) {
        $this->db->select('*');
        $this->db->from('tbl_shikkhok_porichiti');
        $this->db->where('shikkhok_id',$shikkhok_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_shikkhok_porichiti_info_by_id($data,$shikkhok_id) {
        $this->db->where('shikkhok_id',$shikkhok_id);
        $this->db->update('tbl_shikkhok_porichiti',$data);
    }
    public function delete_shikkhok_porichiti($shikkhok_id) {
        $this->db->where('shikkhok_id',$shikkhok_id);
        $this->db->delete('tbl_shikkhok_porichiti');
    }
    public function select_bivag_info_by_id($bivag_id) {
        $this->db->select('*');
        $this->db->from('tbl_bivag');
        $this->db->where('bivag_id',$bivag_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_bivag_porichiti_info_by_id($data,$bivag_id) {
        $this->db->where('bivag_id',$bivag_id);
        $this->db->update('tbl_bivag',$data);
    }
    public function delete_bivag_porichiti($bivag_id) {
        $this->db->where('bivag_id',$bivag_id);
        $this->db->delete('tbl_bivag');
    }
    public function select_subject_by_bivag_info()
    {
        $sql="select s.*,b.* from tbl_subjects as s,tbl_bivag as b where s.bivag_id=b.bivag_id ";
        //$sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();

        return $result;
        
    }
    
    public function select_subject_info_by_id($subject_id) {
        $this->db->select('*');
        $this->db->from('tbl_subjects');
        $this->db->where('subject_id',$subject_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_subject_by_bivag_info($data,$subject_id) {
        $this->db->where('subject_id',$subject_id);
        $this->db->update('tbl_subjects',$data);
    }
    public function delete_subject_by_bivag_info($subject_id) {
        $this->db->where('subject_id',$subject_id);
        $this->db->delete('tbl_subjects');
    }
    public function select_vorti_niom_info_by_id($vorti_id) {
        $this->db->select('*');
        $this->db->from('tbl_vorti_niom');
        $this->db->where('vorti_id',$vorti_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_vorti_niom_info($data,$vorti_id) {
        $this->db->where('vorti_id',$vorti_id);
        $this->db->update('tbl_vorti_niom',$data);
    }
    public function delete_vorti_niom_info($vorti_id) {
        $this->db->where('vorti_id',$vorti_id);
        $this->db->delete('tbl_vorti_niom');
    }
    public function select_yearly_kitab_info_by_id($yearly_kitab_id) {
        $this->db->select('*');
        $this->db->from('tbl_yearly_kitab');
        $this->db->where('yearly_kitab_id',$yearly_kitab_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_kitab_by_year_info($data,$yearly_kitab_id) {
        $this->db->where('yearly_kitab_id',$yearly_kitab_id);
        $this->db->update('tbl_yearly_kitab',$data);
    }
    public function delete_kitab_by_year_info($yearly_kitab_id){
        $this->db->where('yearly_kitab_id',$yearly_kitab_id);
        $this->db->delete('tbl_yearly_kitab');
    }
    public function select_bivag_category_info_by_id($bivag_id) {
        $this->db->select('*');
        $this->db->from('tbl_bivag_category');
        $this->db->where('bivag_id',$bivag_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_bivag_category_info($data,$bivag_id) {
        $this->db->where('bivag_id',$bivag_id);
        $this->db->update('tbl_bivag_category',$data);
    }
    public function delete_bivag_category_info($bivag_id){
        $this->db->where('bivag_id',$bivag_id);
        $this->db->delete('tbl_bivag_category');
    }
    public function select_vorti_fee_info_by_id($fee_id) {
        $sql="select v_f.*,b_c.* from tbl_vorti_fee as v_f,tbl_bivag_category as b_c where v_f.bivag_id=b_c.bivag_id AND v_f.fee_id=$fee_id";
        //$sql="SELECT u.*,c.* FROM tbl_comments as c,tbl_user as u WHERE c.user_id=u.user_id AND c.masael_id=$masael_id AND c.publication_status=1";
        $query_result = $this->db->query($sql);
        $result=$query_result->row();
        return $result;
    }
    public function update_vorti_fee_info($data,$fee_id) {
        $this->db->where('fee_id',$fee_id);
        $this->db->update('tbl_vorti_fee',$data);
    }
    public function delete_vorti_fee_info($fee_id){
        $this->db->where('fee_id',$fee_id);
        $this->db->delete('tbl_vorti_fee');
    }
    public function select_jogajog_info_by_id($jogajog_id) {
        $this->db->select('*');
        $this->db->from('tbl_jogajog');
        $this->db->where('jogajog_id',$jogajog_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_jogajog_information($data,$jogajog_id) {
        $this->db->where('jogajog_id',$jogajog_id);
        $this->db->update('tbl_jogajog',$data);
    }
    public function select_boyan_info_by_id($boyan_id) {
        $this->db->select('*');
        $this->db->from('tbl_boyan');
        $this->db->where('boyan_id',$boyan_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    public function update_boyan_info($data,$fee_id) {
        $this->db->where('fee_id',$fee_id);
        $this->db->update('tbl_vorti_fee',$data);
    }
    public function delete_boyan_info($fee_id){
        $this->db->where('fee_id',$fee_id);
        $this->db->delete('tbl_vorti_fee');
    }
    public function result_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_result_category');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
}