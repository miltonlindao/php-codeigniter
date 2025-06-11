<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
$config["template_dir"] = "";
$config["SITE_ROOT_IMAGE"] ="http://".$_SERVER['HTTP_HOST']."/assets/sitesfile/image/";
$config["DIR_ROOT_IMAGE"] = $_SERVER['DOCUMENT_ROOT']."assets/sitesfile/image/";
$config["DIR_IMAGE_PATH"] = "http://".$_SERVER['HTTP_HOST']."/assets/sitesfile/";
$config["kritid_template_admin"] = $config["template_dir"]."catalog/";
$config["kritid_template_admin_inclu"] = $config["template_dir"]."catalog/include/";
$config["kritid_template_admin_cv"] = $config["template_dir"]."catalog/center_view/";
//basic api key for drive location update
$config["API_KEY"] = "your_api_key";
//send grid
$config["SENDGRID_API_KEY_"] = "your_sendgrid_api_key";
$config["DRIVER_DOCUMENTS_BUCKET_"] = "app-drivers-documents-bucket";
$config["MAX_SIZE_FILE_BUCKET_"] = 7000000;
$config["PATH_AVATAR_PROFILE"] = "assets/images/users/";
// overdue and earlier padding minutes
$config["ORDER_OVERDUE_PADDING_MINUTES"] = 15;
$config["ORDER_EARLY_PADDING_MINUTES"] = 15;
