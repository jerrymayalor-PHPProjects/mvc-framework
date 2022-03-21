<?php include 'view/TestView.php'; ?>
<?php include 'model/TestModel.php'; ?>
<?php include 'controller/TestController.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $objectView = new TestView;
        $objectModel = new TestModel;
        $objectController = new TestController;

        echo $objectView->view . " " . $objectModel->db . " " . $objectController->controller; 
    
    
    ?>

    
</body>
</html>