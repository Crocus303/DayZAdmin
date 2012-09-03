<?php
if (isset($_SESSION['user_id']))
{
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" href="css/menu.css" />    
<link rel="stylesheet" href="css/flexcrollstyles.css" />    
<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.8.1.min.js"></script>    
<script src="js/flexcroll.js" type="text/javascript"></script>
<script src="js/modalpopup.js" type="text/javascript"></script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

    <!-- start logo -->
    <div id="logo">
        <a href=""><img src="<?echo $path;?>images/logo.png" width="150px" height="72px" alt="" /></a>
    </div>
    <!-- end logo -->
    
    <!-- start watch -->

    <!-- end watch -->
    
    <!--  start top-search -->
    <div id="top-search">
    <?php 
    include ('searchbar.php');
    ?>
    </div>
     <!--  end top-search -->
     <div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
    
<div class="clear">&nbsp;</div>
 
<?php 
include ('navbar.php');
?>
 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">
<?php
}
else
{
    header('Location: index.php');
}
?>