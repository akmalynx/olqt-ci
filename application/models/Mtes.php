<?php

class Mtes extends CI_Model{
  function __construct(){
    parent::__construct();
  }

  function tes_coba($nosoal){
    // SELECT s.idsoal,s.soal,o.ayat,o2.ayat,o3.ayat,o4.ayat,s.opsia,s.opsib,s.opsic,s.opsid,j.idopsi from soal s inner join quran o on s.opsia = o.ID inner join quran o2 on s.opsib = o2.ID inner join quran o3 on s.opsic = o3.ID inner join quran o4 on s.opsid = o4.ID inner join jawaban j on j.idopsi = o.ID or j.idopsi = o2.ID or j.idopsi = o3.ID or j.idopsi = o4.ID where s.idsoal=1
    // SELECT s.idsoal,s.soal,o.ayat,o2.ayat,o3.ayat,o4.ayat,s.opsia,s.opsib,s.opsic,s.opsid from soal s inner join quran o on s.opsia = o.ID inner join quran o2 on s.opsib = o2.ID inner join quran o3 on s.opsic = o3.ID inner join quran o4 on s.opsid = o4.ID where s.idsoal=1
    // $query = $this->db->query("SELECT * from soal where idsoal = 1 ");
    $query = $this->db->query("SELECT * from soal where idsoal= ?",array($nosoal));
    return $query;

    $query=null;
  }
}
 ?>
