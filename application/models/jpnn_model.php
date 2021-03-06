<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jpnn_Model extends CI_Model
{
	function __construct() 
    {
        parent::__construct();
        $this->load->library('redirect_url');
    }
	function save_links($link)
    {
        $query_str = "insert into document_links (link, portal_id) values (?, ?)";
        $this->db->query($query_str, array($link, 2));
    }

    //-----get data from database-----//
    function get_links()
    {
    	$this->db->select('link_id, link');
        $this->db->where('link_id >', 134);
    	$query = $this->db->get('document_links');
        return $query->result_array();
    }
    function get_document_links()
    {
        $this->db->select('document.document_id, document.link_id, document_links.link');
        $this->db->from('document');
        $this->db->where('document.link_id >', 134);
        $this->db->join('document_links', 'document_links.link_id = document.link_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    function save_document($title, $date, $text, $text_id)
    {        
        $data = array(
            'document_title' => $title,
            'date_published' => $date,
            'document_content' => $text,
            'kataPenting' => '',
            'link_id' => $text_id,
            'portal_id' => 2
            );
        $this->db->insert('document', $data);
    }

    function save_comments($text, $document_id)
    {
        $query_str = "insert into comment (comment_content, document_id) values (?, ?)";
        $this->db->query($query_str, array($text, $document_id));
    }

    function date_check($bulan)
    {
        $nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
        return array_search($bulan, $nama_bulan);
    }
}