<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>FOOBAR - Admin Platform</title>
        <!-- Favicon icon -->
        <link href="<?php echo site_url("assets/css/style.css") ?>" rel="stylesheet">
        
        <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png')?>" type="image/icon">
<?php
        $this->load->view('catalog/include/header_login');
        $this->load->view($page);
        $this->load->view('catalog/include/footer_login');
?>	
    
   