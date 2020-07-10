<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Model
{
    private $table = 'buku ';
    private $primaryKey = 'isbn';

    public function __construct()
    {
        parent::__construct();
    }
    public function getAll()
    {
        $data = $this->db->get($this->table);
        return $data->result();
    }
}
