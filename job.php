<?php  include_once 'config/init.php';?>

<?php
$job = new job;
 if(isset($_POST['del_id']))
 {
     $del_id= $_POST['del_id'];
     if($job->delete($del_id))
     {
         redirect('index.php', 'job Deleted', 'success');
     }
     else{
        redirect('index.php', 'job Not Deleted', 'error');
     }
 }
$template = new template('templates/job-single.php');
$job_id= isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);
echo $template;

?>




