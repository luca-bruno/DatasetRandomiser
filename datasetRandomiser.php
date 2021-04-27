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

    include 'navbarRandomiser.php'; ?>

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

    <?php

        $timestamp = time();
        ?>

    <?php include 'rowRandomiser.php'; ?>
    <?php include 'rowRandomiser.php'; ?>
    <?php include 'rowRandomiser.php'; ?>

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

    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
    // scrape webpage by getting all elements
    
    var navbar = document.getElementsByTagName("nav")[0].className;
    var brand = document.getElementsByClassName("navbar-brand")[0].className;
    var headerBtnQty = document.getElementsByTagName("li")[0].className;

    // console.log(header);
    
    console.log("### NAV BAR MODE ###")
    if(navbar == "navbar navbar-expand-lg navbar-dark bg-dark"){
    console.log("navbar-dark bg-dark");
    } else if(navbar == "navbar navbar-expand-lg navbar-light bg-light"){
    console.log("navbar-light bg-light");
    };
    
    console.log("### NAV BAR BRAND ###")
    console.log(brand);
    
    console.log("### NAV BAR BUTTONS ###")
    // console.log(headerBtnQty);
    // how many LI in headerBtnQty ie navbar-nav
    for(a = 0; a <= document.getElementsByTagName("li").length -1; a++){
        var navbarBtnType = document.getElementsByTagName("li")[a].className;
        console.log(navbarBtnType);
    }
    
    // brand
    // nav buttons inactive or nothing " "/active
    // big text/ titles
    // small text?
    // footers probably not => Generated by Luca Bruno

    var row = document.getElementsByClassName("row");
    // var btnR = document.getElementsByClassName("btn-danger");
    // var btnG = document.getElementsByClassName("btn-success");
    // var btnY = document.getElementsByClassName("btn-warning");

// console.log(row);

// console.log(row[0]);

    console.log("### ROW 1 ###")
    var rowDiv = row[0].getElementsByTagName("div")[0].className;
    console.log(row[0]);
    console.log(rowDiv);
    
    if(rowDiv == "col-lg-3"){
        console.log("4 elements");
        // limit array to 4 elements 0 1 2 3
        row[0].getElementsByClassName("btn").length = 4;
    }
    else if(rowDiv == "col-lg-4"){
        console.log("3 elements");
        // limit array to 3 elements 0 1 2
        row[0].getElementsByClassName("btn").length = 3;
    }else if(rowDiv == "col-lg-6"){
        console.log("2 elements");
        // limit array to 2 elements 0 1
        row[0].getElementsByClassName("btn").length = 2;
    }else if(rowDiv == "col-lg-12"){
        console.log("1 element");
        // limit array to 1 element 0
        row[0].getElementsByClassName("btn").length = 1;
    }
    
    console.log("### ROW 2 ###")
    var rowDiv2 = row[1].getElementsByTagName("div")[0].className;
    console.log(row[1]);
    console.log(rowDiv2);
    
    if(rowDiv2 == "col-lg-3"){
        console.log("4 elements");
        // limit array to 4 elements 0 1 2 3
        row[1].getElementsByClassName("btn").length = 4;
    }
    else if(rowDiv2 == "col-lg-4"){
    console.log("3 elements");
    // limit array to 3 elements 0 1 2
    row[1].getElementsByClassName("btn").length = 3;
    }else if(rowDiv2 == "col-lg-6"){
    console.log("2 elements");
    // limit array to 2 elements 0 1
    row[1].getElementsByClassName("btn").length = 2;
    }else if(rowDiv2 == "col-lg-12"){
        console.log("1 element");
    // limit array to 1 element 0
    row[1].getElementsByClassName("btn").length = 1;
    }
    
    console.log("### ROW 3 ###")
    var rowDiv3 = row[2].getElementsByTagName("div")[0].className;
    console.log(row[2]);
    console.log(rowDiv3);
    

    if(rowDiv3 == "col-lg-3"){
    console.log("4 elements");
    // limit array to 4 elements 0 1 2 3
    row[2].getElementsByClassName("btn").length = 4;
    }
    else if(rowDiv3 == "col-lg-4"){
    console.log("3 elements");
    // limit array to 3 elements 0 1 2
    row[2].getElementsByClassName("btn").length = 3;
    }else if(rowDiv3 == "col-lg-6"){
    console.log("2 elements");
    // limit array to 2 elements 0 1
    row[2].getElementsByClassName("btn").length = 2;
    }else if(rowDiv3 == "col-lg-12"){
        console.log("1 element");
    // limit array to 1 element 0
    row[2].getElementsByClassName("btn").length = 1;
    }


// console.log(row[2].getElementsByClassName("btn"));


    console.log("### ROW 1 BUTTONS ###");
// open up loops
    for(i = 0; i <= row[0].getElementsByClassName("btn").length -1; i++){
        var rowBtn1 = row[0].getElementsByClassName("btn")[i].className;
        console.log(rowBtn1);
    }

    console.log("### ROW 2 BUTTONS ###");

    for(i = 0; i <= row[1].getElementsByClassName("btn").length -1; i++){
        var rowBtn2 = row[1].getElementsByClassName("btn")[i].className;
        console.log(rowBtn2);
    }
    
    console.log("### ROW 3 BUTTONS ###");

    for(i = 0; i <= row[2].getElementsByClassName("btn").length -1; i++){
        var rowBtn3 = row[2].getElementsByClassName("btn")[i].className;
        console.log(rowBtn3);
    }

    // create vars of txt needed
  })    

    // var logBackup = console.log;
    // var logMessages = [];

    // console.log = function() {
    // logMessages.push.apply(logMessages, arguments);
    // logBackup.apply(console, arguments);
    // };

    // console.log(logMessages);
    // console.log("Hello");




    var timerino = <?php echo $timestamp ?>
    </script>
    
    <script src="./dslStructureGenerator.js"></script>

    <button id="CaptureButton" style="opacity: 0" onclick="doCapture();">Capture</button>
        </body>
            </html>
        <!-- check DSL mapping to make exact to original -->