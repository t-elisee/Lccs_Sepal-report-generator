<html>
 <head>
  <title>LCCS SEPAL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <style>
      
      .bord{
        border: 2px solid #AEC2C0;
      }
      .top-header{
          background-color : #50B5CA;
          color: #fff;
          border: 2px solid #AEC2C0;
      }
      .top-title{
          background-color : #D5E9F2;
      }
  </style>
 </head>
 
 <body id="element">
     
    <?php

    $filename = 'CAFI.csv';
    
    // The nested array to hold all the arrays
    $the_big_array = []; 
    
    // Open the file for reading
    if (($h = fopen("{$filename}", "r")) !== FALSE) 
    {
      // Each line in the file is converted into an individual array that we call $data
      // The items of the array are comma separated
      while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
      {
        // Each individual array is being pushed into the nested array
        $the_big_array[] = $data;		
      }
    
      // Close the file
      fclose($h);
    }
    
    // Display the code in a readable format
    /*
    echo "<pre>";
    var_dump($the_big_array);
    echo "</pre>";  */
    ?>

<?php foreach(array_slice($the_big_array, 1) as $data): ?>
   
    <div class="container mb-5">
        <div class="row justify-content-center text-center top-header">

        <h4> 
        <?php if($data[2]) : ?>
            <?php  print_r($data[2]); ?>
        <?php endif; ?>
        </h4>
        </div>
        <div class="row">
            <div class="col-md-5 text-center top-title"> 
            <h4>Picture</h4>
                
            </div>
            <div class="col-md-7 text-center top-title">
                <h4>Description</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5 p-0 bord"> 
                <div class="m-0 p-0">
                <?php if($data[7]) : ?>
                    <img src="photo_plot/<?php  print_r($data[7]) ; ?>" width="100%" height="auto">
                <?php endif; ?>
                </div>
                <div class="m-0 p-0">
                <?php if($data[8]) : ?>
                    <img src="photo_planet/<?php  print_r($data[8]) ; ?>" width="100%" height="auto">
                <?php endif; ?>
                </div>
                <!--
                <div >
                    <img src="DJI_0191.JPG" width="100%" height="auto">
                </div>
                -->
            </div>
            <div class="col-md-7 bord">
                <?php  print_r($data[3]); ?>
            </div>
        </div>

        <div class="row justify-content-center">
            <h4 class="top-title m-0">LCCS Diagram</h4>
            <div class="text-center p-0 bord"> 
            <?php if($data[4]) : ?>
                    <img src="lccs_diagram/<?php  print_r($data[4]) ; ?>" width="100%" height="auto">
                <?php endif; ?>
            </div>
        </div>
    
    </div>
    <div class="html2pdf__page-break"> </div>
<?php endforeach; ?>

 

 </body>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>

<script src="app.js"></script>
</html>