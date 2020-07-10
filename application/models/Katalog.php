<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Katalog extends CI_Model
{
    private $table = 'katalog';
    private $primaryKey = 'id';

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
