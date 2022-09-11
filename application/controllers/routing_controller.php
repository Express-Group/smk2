<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class routing_controller extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index(){
		redirect(BASEURL , 301);
	}
	
	public function section($sectionname){
		$this->live_db = $this->load->database('live_db' , TRUE);
		$section =  $this->live_db->query("SELECT URLSectionStructure FROM sectionmaster WHERE (Sectionname='".urldecode($sectionname)."' OR URLSectionName ='".urldecode($sectionname)."') LIMIT 1")->row_array();
		if(count($section) > 0){
			redirect(BASEURL.$section['URLSectionStructure'] , 301);
		}else{
			redirect(BASEURL , 301);
		}
	}
	
	public function article($contentID ,$contentType='article'){
		echo $contentID;
		echo $contentType;
	
		if(strtolower($this->uri->segment(2))=='galleries'){
			$contentType='gallery';
		}
		$this->live_db = $this->load->database('live_db' , TRUE);
		$article =  $this->live_db->query("SELECT url FROM ".$contentType." WHERE content_id='".$contentID."'")->row_array();
		if(count($article) > 0){
			redirect(BASEURL.$article['url'] , 301);
		}else{
			redirect(BASEURL , 301);
		}
		
	}
}
?> 