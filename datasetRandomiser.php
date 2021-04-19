<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
    <style>
    .header{margin:20px 0}
    nav ul.nav-pills li{background-color:#333;border-radius:4px;margin-right:10px}
    /* .col-lg-3{width:24%;margin-right:1.333333%}
    .col-lg-6{width:49%;margin-right:2%} */
    /* .col-lg-4{width:32.64%;;margin-right:1.033333%} */
    .col-lg-12,.col-lg-3,.col-lg-6,.col-lg-4{margin-bottom:0px;border-radius:6px;padding:20px}
    .row .col-lg-3:last-child,.row .col-lg-6:last-child,.row .col-lg-4:last-child{margin-right:0}  /* add col-lg-4 up here? */
    /* .row{flex-wrap: nowrap} */
    footer{padding:20px 0;text-align:center;border-top:1px solid #bbb}
    </style>

<?php
        $page = $_SERVER['PHP_SELF'];
        // $sec = "5"; ?>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <!-- refresh page every 5 seconds -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dataset Randomizer</title>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
        <script src="html2canvas.js"></script>
</head>
<body>


    <?php 

function generateRandomString() {
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < rand(4, 9); $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomString;
}

function generateRandomLongString() {
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomLongString = '';
for ($i = 0; $i < rand(7, 20); $i++) {
    $randomLongString .= $characters[rand(0, $charactersLength - 1)];
}
return $randomLongString;
}

$randomButtonActiveArray = [
0 => " ",
1 => "active"
];

$randomNavbarLightDarkArray = [
0 => "navbar-light bg-light",
1 => "navbar-dark bg-dark"
];

$string = <<<EOC
this is a complex string
EOC;

$timestamp = time();
?>


<nav class="navbar navbar-expand-lg <?php echo $randomNavbarLightDarkArray[rand(0, 1)] ?>">
<a class="navbar-brand" href="#"> <?php echo generateRandomString() ?></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        
        <!-- for loop for number of nav items, and each random array -->
        <?php
    $randomNavButtonQuantity = rand(0, 4);
    ?>

<?php for($randomNavButtonQuantity = 0; $randomNavButtonQuantity <= 4; $randomNavButtonQuantity++){ ?>
<li class="nav-item <?php echo $randomButtonActiveArray[rand(0, 1)]?>"> 
    <a class="nav-link" href="#"><?php echo generateRandomString() ?></a>
</li>
<?php
    }
    ?>
    </ul>
</div>
</nav>

<div class="container-fluid">
<?php
        $ColumnsArray = [ 
            1 => "12",
            2 => "6", 
            3 => "4", 
            4 => "3"
        ];
        $randomColumnsArray = array_rand(array_flip($ColumnsArray), 1); 
        // picks random element's value
        
        // echo $randomColumnsArray;
        
        $ButtonColourArray = [ 
            0 => "danger",
            1 => "success", 
            2 => "warning"
        ];
        ?>
            
            
            <div class="row">
                <?php 
                    for($i = 1; $i <= (12 / $randomColumnsArray); $i++){ ?>
                        <div class="col-lg-<?php echo $randomColumnsArray ?>">
                        <div class="bound">

                            <h4><?php echo generateRandomLongString() ?></h4>
                            <p>
                                <?php for($a = 0; $a <= (rand(1, 3)); $a++){
                                    echo generateRandomLongString();
                                    echo " ";
                                } ?>
                            </p>
                            <a class="btn btn-<?php echo $ButtonColourArray[rand(0, 2)] ?>" href="#" role="button"><?php echo generateRandomString() ?></a>
                        </div>
                        </div>
                        <?php 
                    }
                    ?>
        </div>
        
        <?php
        $randomColumnsArray = array_rand(array_flip($ColumnsArray), 1); 
        // echo $randomColumnsArray;
        ?>
    
    <div class="row">
        <?php 
                    for($i = 1; $i <= (12 / $randomColumnsArray); $i++){ ?>
                        <div class="col-lg-<?php echo $randomColumnsArray ?>">
                        <div class="bound">
                            <h4><?php echo generateRandomLongString() ?></h4>
                            <p>
                                <?php for($a = 0; $a <= (rand(1, 3)); $a++){
                                    echo generateRandomLongString();
                                    echo " ";
                                } ?>
                            </p>
                            <a class="btn btn-<?php echo $ButtonColourArray[rand(0, 2)] ?>" href="#" role="button"><?php echo generateRandomString() ?></a>
                        </div>
                        </div>
                        <?php 
                    }
                    ?>
        </div>
        
        <?php
        $randomColumnsArray = array_rand(array_flip($ColumnsArray), 1); 
        // echo $randomColumnsArray;
        // add in spacing/margin or padding instead of counter
        ?>
    
    <style>
        .bound{
            margin-right: 10px;
            background-color:#f5f5f5;
            padding: 12px;
            };
    </style>

    <div class="row">
        <?php 
                    for($i = 1; $i <= (12 / $randomColumnsArray); $i++){ ?>
                        
                        <div class="col-lg-<?php echo $randomColumnsArray ?>">
                            <div class="bound">
                                <h4><?php echo generateRandomLongString() ?></h4>
                                <p>
                                    <?php for($a = 0; $a <= (rand(1, 3)); $a++){
                                        echo generateRandomLongString();
                                        echo " ";
                                    } ?>
                                </p>
                                <a class="btn btn-<?php echo $ButtonColourArray[rand(0, 2)] ?>" href="#" role="button"><?php echo generateRandomString() ?></a>

                            </div>
                        </div>
                        
                        <?php 
                    }
                    ?>
        </div>
    </div>
    
    
    <footer class="footer">
        <p>&copy; <?php echo generateRandomString()?> 2020 </p>
    </footer>

    <script> 
        function doCapture(){
        html2canvas(document.body).then(function(canvas) {
            console.log(canvas.toDataURL("image/png, 0.9"));
            document.body.appendChild(canvas);

            var ajax = new XMLHttpRequest();
            ajax.open("POST", "save-capture.php", true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send("ts=<?=$timestamp?>" + "&image=" + canvas.toDataURL("image/png, 0.9"));

            ajax.onreadstatechange = function (){
                if (this.readyState == 4 && this.status == 200){
                    console.log(this.responseText);
                }
            }
        });
    }
    </script>

    <button id="CaptureButton" style="opacity: 0" onclick="doCapture();">Capture</button>
        </body>
            </html>
        <!-- check DSL mapping to make exact to original -->