<?php 
    $sql['SETTINGS']=$this->db->query("SELECT * FROM settings")->row(); 
?>
<?php $this->load->view('header',$sql); ?>
 <?=$content ?>
<?php $this->load->view('footer',$sql); ?>