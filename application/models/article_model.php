<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Article_model extends CI_Model{
	
	public function __construct(){
		parent::__construct(); 
		$this->live_db = $this->load->database('live_db' , TRUE);
		$CI = &get_instance();
		$this->archive_db = $CI->load->database('archive_db' , TRUE);
		$this->load->library("memcached_library");
	}
	public function sectionDetails($id=''){
		return $this->live_db->query("SELECT Section_id , IsSubSection , ParentSectionID , URLSectionStructure , URLSectionName , Sectionname , MetaTitle , MetaDescription , MetaKeyword FROM sectionmaster WHERE Section_id='".$id."'")->row_array();
	}
	public function articleDetails($contentID ,$contentType ,$year){
	
		switch($contentType){
			case 3:
				$CacheID = 'galleries-'.$contentID;
				if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
					$article = $this->live_db->query("SELECT content_id , section_id , section_name , publish_start_date , last_updated_on , title , url , summary_html , first_image_path as  article_page_image_path , first_image_title as article_page_image_title , first_image_alt as article_page_image_alt , tags , agency_name , author_name , no_indexed , no_follow , meta_Title , meta_description FROM gallery WHERE status='P' AND publish_start_date < NOW() AND content_id='".$contentID."'")->row_array();
					$this->memcached_library->add($CacheID,$article);
				}else{
					$article = $this->memcached_library->get($CacheID);
				}
				if(count($article) > 0){
					return $article;
				}else{
					$tblname = 'gallery_'.$year;
					if($this->archive_db->table_exists($tblname)){
						$article = $this->archive_db->query("SELECT content_id , section_id , section_name , publish_start_date , last_updated_on , title , url , summary_html , first_image_path as  article_page_image_path , first_image_title as article_page_image_title , first_image_alt as article_page_image_alt , tags , agency_name , author_name , no_indexed , no_follow , meta_Title , meta_description FROM ".$tblname." WHERE status='P' AND publish_start_date < NOW() AND content_id='".$contentID."'")->row_array();
						$this->memcached_library->add($CacheID,$article);
						return $article;
					}
				}
			break;
			case 4:
				$CacheID = 'video-'.$contentID;
				if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
					$article = $this->live_db->query("SELECT content_id , section_id , section_name , publish_start_date , last_updated_on , title , url , summary_html , video_image_path as  article_page_image_path , video_image_title as article_page_image_title , video_image_alt as article_page_image_alt , tags , agency_name , author_name , no_indexed , no_follow , meta_Title , meta_description , video_script as article_page_content_html FROM video WHERE status='P' AND publish_start_date < NOW() AND content_id='".$contentID."'")->row_array();
					$this->memcached_library->add($CacheID,$article);
				}else{
					$article = $this->memcached_library->get($CacheID);
				}
				if(count($article) > 0){
					return $article;
				}else{
					$tblname = 'video_'.$year;
					if($this->archive_db->table_exists($tblname)){
						$article = $this->archive_db->query("SELECT content_id , section_id , section_name , publish_start_date , last_updated_on , title , url , summary_html , video_image_path as  article_page_image_path , video_image_title as article_page_image_title , video_image_alt as article_page_image_alt , tags , agency_name , author_name , no_indexed , no_follow , meta_Title , meta_description , video_script as article_page_content_html FROM ".$tblname." WHERE status='P' AND publish_start_date < NOW() AND content_id='".$contentID."'")->row_array();
						$this->memcached_library->add($CacheID,$article);
						return $article;
					}
				}
			break;
			default:
				$CacheID = 'article5-'.$contentID;
				if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){

					$article = $this->live_db->query("SELECT content_id , section_id , section_name , publish_start_date , last_updated_on , title , url , summary_html , article_page_content_html , article_page_image_path , article_page_image_title , article_page_image_alt , tags , agency_name , author_name , author_image_path , author_image_title , author_image_alt , no_indexed , no_follow , meta_Title , meta_description  FROM article WHERE status='P' AND publish_start_date < NOW() AND content_id='".$contentID."'")->row_array();
					$this->memcached_library->add($CacheID,$article);
				}else{
					$article = $this->memcached_library->get($CacheID);
				}
				if(count($article) > 0){
					return $article;
				}else{
					$tblname = 'article_'.$year;
					if($this->archive_db->table_exists($tblname)){
						$article = $this->archive_db->query("SELECT content_id , section_id , section_name , publish_start_date , last_updated_on , title , url , summary_html , article_page_content_html , article_page_image_path , article_page_image_title , article_page_image_alt , tags , agency_name , author_name , author_image_path , author_image_title , author_image_alt , no_indexed , no_follow , meta_Title , meta_description  FROM ".$tblname." WHERE status='P' AND publish_start_date < NOW() AND content_id='".$contentID."'")->row_array();
						$this->memcached_library->add($CacheID,$article);
						return $article;
					}
				}
			break;
		}
	}
	
	public function menuDetails(){
		$CacheID = 'menulist1';
		if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
			$menus = $this->live_db->query("SELECT Section_id , URLSectionStructure , Sectionname  FROM sectionmaster WHERE Status=1 AND ParentSectionID IS NULL AND IsSubSection=0 AND IsSeperateWebsite=0 AND MenuVisibility=1 ORDER BY DisplayOrder ASC LIMIT 11")->result_array();
			$this->memcached_library->add($CacheID,$menus);
		}else{
			$menus = $this->memcached_library->get($CacheID);
		}
		return $menus;
	}
	
	public function moreStories($sectionID , $contentType , $contentID){
		switch($contentType){
			case 3:
				$CacheID = 'gallery-'.$contentID.'-'.$sectionID;
				if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
					$moreStories = $this->live_db->query("SELECT ar.content_id , ar.title , ar.url , ar.first_image_path as article_page_image_path , ar.first_image_title article_page_image_title , ar.first_image_alt as article_page_image_alt FROM gallery_section_mapping as asp LEFT JOIN gallery as ar ON ar.content_id = asp.content_id  WHERE ar.status = 'P' AND ar.publish_start_date < NOW() AND ar.content_id!='".$contentID."' AND ( asp.section_id IN ( SELECT Section_id FROM sectionmaster WHERE IF(ParentSectionID !='0', ParentSectionID, Section_id) = '".$sectionID."' OR Section_id = '".$sectionID."' )) GROUP BY ar.content_id ORDER BY publish_start_date DESC LIMIT 8")->result_array();
					$this->memcached_library->add($CacheID,$article);
				}else{
					$moreStories = $this->memcached_library->get($CacheID);
				}
				return $moreStories;
			break;
			case 4:
				$CacheID = 'video-'.$contentID.'-'.$sectionID;
				if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
					$moreStories = $this->live_db->query("SELECT ar.content_id , ar.title , ar.url , ar.video_image_path as article_page_image_path , ar.video_image_title article_page_image_title , ar.video_image_alt as article_page_image_alt FROM video_section_mapping as asp LEFT JOIN video as ar ON ar.content_id = asp.content_id  WHERE ar.status = 'P' AND ar.publish_start_date < NOW() AND ar.content_id!='".$contentID."' AND ( asp.section_id IN ( SELECT Section_id FROM sectionmaster WHERE IF(ParentSectionID !='0', ParentSectionID, Section_id) = '".$sectionID."' OR Section_id = '".$sectionID."' )) GROUP BY ar.content_id ORDER BY publish_start_date DESC LIMIT 8")->result_array();
					$this->memcached_library->add($CacheID,$article);
				}else{
					$moreStories = $this->memcached_library->get($CacheID);
				}
				return $moreStories;
			break;
			default:
				$CacheID = 'article-'.$contentID.'-'.$sectionID;
				if(!$this->memcached_library->get($CacheID) && $this->memcached_library->get($CacheID) == ''){
					$moreStories = $this->live_db->query("SELECT ar.content_id , ar.title , ar.url , ar.article_page_image_path , ar.article_page_image_title , ar.article_page_image_alt FROM article_section_mapping as asp LEFT JOIN article as ar ON ar.content_id = asp.content_id  WHERE ar.status = 'P' AND ar.publish_start_date < NOW() AND ar.content_id!='".$contentID."' AND ( asp.section_id IN ( SELECT Section_id FROM sectionmaster WHERE IF(ParentSectionID !='0', ParentSectionID, Section_id) = '".$sectionID."' OR Section_id = '".$sectionID."' )) GROUP BY ar.content_id ORDER BY publish_start_date DESC LIMIT 8")->result_array();
					$this->memcached_library->add($CacheID,$article);
				}else{
					$moreStories = $this->memcached_library->get($CacheID);
				}
				return $moreStories;
			break;
		}
	}
	
	public function galleryRelatedDetails($contentID , $year=''){
		$data =  $this->live_db->query("SELECT gallery_image_path , gallery_image_title , gallery_image_alt FROM gallery_related_images WHERE content_id='".$contentID."' ORDER BY display_order ASC")->result_array();
		if(count($data)){
			return $data ;
		}else{
			$tblname = 'gallery_related_images_'.$year;
			if($this->archive_db->table_exists($tblname)){
				$data =  $this->archive_db->query("SELECT gallery_image_path , gallery_image_title , gallery_image_alt FROM ".$tblname." WHERE content_id='".$contentID."' ORDER BY display_order ASC")->result_array();
				return $data ;
			}
		}
	}
}
?> 