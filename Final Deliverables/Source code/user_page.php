<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style> 
     body {
         background-image: url(https://img.freepik.com/free-vector/clean-medical-background_53876-97927.jpg?w=2000);
       }
</style>
</head>
<body>

<div class="container">

   <div class="content">
      <h1>Hai <span><?php echo $_SESSION['user_name'] ?></span>!</h1>
      <p>Welcome to Visualizing and Predicting Heart Diseases with an Interactive Dash Board</p>
      <a href="https://us3.ca.analytics.ibm.com/bi/?perspective=dashboard&id=i6B98C3852ACD432E8E75F43F50208AD4&objRef=i6B98C3852ACD432E8E75F43F50208AD4&options%5BdisableGlassPrefetch%5D=true&options%5Bcollections%5D%5BcanvasExtension%5D%5Bid%5D=com.ibm.bi.dashboard.canvasExtension&options%5Bcollections%5D%5BfeatureExtension%5D%5Bid%5D=com.ibm.bi.dashboard.core-features&options%5Bcollections%5D%5Bbuttons%5D%5Bid%5D=com.ibm.bi.dashboard.buttons&options%5Bcollections%5D%5Bwidget%5D%5Bid%5D=com.ibm.bi.dashboard.widgets&options%5Bcollections%5D%5BcontentFeatureExtension%5D%5Bid%5D=com.ibm.bi.dashboard.content-features&options%5Bcollections%5D%5BsaveServices%5D%5Bid%5D=com.ibm.bi.dashboard.saveServices&options%5Bcollections%5D%5Btemplates%5D%5Bid%5D=com.ibm.bi.dashboard.templates&options%5Bcollections%5D%5BvisualizationExtension%5D%5Bid%5D=com.ibm.bi.dashboard.visualizationExtensionCA&options%5Bcollections%5D%5BboardModel%5D%5Bid%5D=com.ibm.bi.dashboard.boardModelExtension&options%5Bcollections%5D%5BcontentTypes%5D%5Bid%5D=com.ibm.bi.dashboard.contentTypes&options%5Bcollections%5D%5BserviceExtension%5D%5Bid%5D=com.ibm.bi.dashboard.serviceExtension&options%5Bcollections%5D%5BlayoutExtension%5D%5Bid%5D=com.ibm.bi.dashboard.layoutExtension&options%5Bcollections%5D%5BcolorSetExtensions%5D%5Bid%5D=com.ibm.bi.dashboard.colorSetExtensions&options%5Bconfig%5D%5Bproduct%5D=CA&options%5Bconfig%5D%5BeditPropertiesLabel%5D=true&options%5Bconfig%5D%5BenableCustomVisualizations%5D=true&options%5Bconfig%5D%5BassetTags%5D%5B%5D=dashboard&options%5Bconfig%5D%5BfilterDock%5D=true&options%5Bconfig%5D%5BshowMembers%5D=true&options%5Bconfig%5D%5Bupgrades%5D=dashboard-core%2Fjs%2Fdashboard%2Fupgrades&options%5Bconfig%5D%5BassetType%5D=exploration&options%5Bconfig%5D%5BgeoService%5D=CA&options%5Bconfig%5D%5BsmartTitle%5D=true&options%5Bconfig%5D%5BnavigationGroupAction%5D=true&options%5Bconfig%5D%5BenableDataQuality%5D=false&options%5Bconfig%5D%5BmemberCalculation%5D=false&isAuthoringMode=true&boardId=i6B98C3852ACD432E8E75F43F50208AD4" class="btn">live Dashboard</a>
      <a href="https://drive.google.com/file/d/1yVDRr6KrIgDsxFlNSy5hGQTp5gxEWWGg/view?usp=sharing" class="btn">Predicted Dashboard</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>
