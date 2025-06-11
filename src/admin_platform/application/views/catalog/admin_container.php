
<?php
    $this->load->view('catalog/include/header');
    $this->load->view('catalog/include/left_content');
    $this->load->view('catalog/center_view/'.$page);
    $this->load->view('catalog/include/right_content');
    $this->load->view('catalog/include/footer');
?>