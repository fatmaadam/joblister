<?php  include_once 'config/init.php';?>

<?php
$job = new job;
$template = new template('templates/frontpage.php');
$category= isset($_GET['category']) ? $_GET['category'] : null;
if($category)
{
    $template->jobs=$job->getByCategory($category);
    $template->title='Jobs In'. $job->getCategory($category)->name;
}
else
{
    $template->title = ' latest jobs';
    $template->jobs = $job->getAlljobs();
}

$template->categories = $job->getCategories();
echo $template;

?>




