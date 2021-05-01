// create each object e.g.     elements   double   : 'col-lg-6'
                            // object     key      : 'value'

// col-lg-6 read from js variable
// double printed to dsl

// var elements = {
//     row: 'row',
//     single: 'col-lg-12',
//     double: 'col-lg-6',
//     triple: 'col-lg-4',
//     quadruple: 'col-lg-3'
// };

// for (var key in elements){
//     console.log(key);
//     console.log(myObject[key]);
// }

console.log("#########################################")
var temp = "";

// TODO: INCLUDE HEADER RANDOMISATION

var navbar = document.getElementsByTagName("nav");
temp += classesGUI(navbar[0].className) + " {&";
// whether dark or light = if function
// navbar-dark{ navbar-light{
// NAVBAR BRAND SHOW - NOT DYNAMIC, JUST INCLUDE IN TEMP STRING 
// RECHECK { AND SPACE FORMAT
temp += "brand&";
// NAVBAR COLOUR DARK/LIGHT RANDOMISATION
// console.log(navbar[0].className);
    temp += "navbar {&"; // NOT DYNAMIC

// NAVBAR BUTTON QTY + ON/OFF RANDOMISATION
var headerBtnQty = document.getElementsByTagName("li");
// console.log(headerBtnQty.length);
for(x = 0; x < headerBtnQty.length; x++){
    temp += classesGUI(headerBtnQty[x].className) + ", ";
}
temp = temp.slice(0, -2) // remove extra comma and space after final loop iteration
temp += "&}&";
// 5 btns - either active or inactive
// nav-btn-active{ nav-btn-inactive{


var rows = document.getElementsByClassName("row");
// loop thru rows
    for(i = 0; i < rows.length; i++){
        temp += "row {&";
        var containers = rows[i].getElementsByTagName("div");
        for(a = 0; a < containers.length; a++){
            if(containers[a].className){
            temp += classesGUI(containers[a].className) + " {&";
                var title = containers[a].getElementsByTagName("h4");
                if(title){
                    temp += "small-title, ";
                }
                var paragraph = containers[a].getElementsByTagName("p");
                if(title){
                    temp += "text, ";
                }
                var button = containers[a].getElementsByClassName("btn");
                temp += classesGUI(button[0].className);
                // console.log(button);
                temp += "&}&";
        }
        }
        temp += "}&";
    }
    console.log(temp);
    // console.log(containers);

    function classesGUI(className){
        if(className == "col-lg-12"){
            return "single";
        }
        else if(className == "col-lg-6"){
            return "double";
        }
        else if(className == "col-lg-4"){
            return "triple";
        }
        else if(className == "col-lg-3"){
            return "quadruple";
        } 
        else if(className == "btn btn-danger"){
            return "btn-red";
        } 
        else if(className == "btn btn-success"){
            return "btn-green";
        }
        else if(className == "btn btn-warning"){
            return "btn-yellow";
        }
        else if(className == "navbar navbar-expand-lg navbar-dark bg-dark"){
            return "navbar-dark";
        }
        else if(className == "navbar navbar-expand-lg navbar-light bg-light"){
            return "navbar-light";
        }
        else if(className == "nav-item active"){
            return "nav-active";
        }
        else if(className == "nav-item inactive"){
            return "nav-inactive";
        }
        else{
            return "";
        }
    }
    
    const Http = new XMLHttpRequest();
    const url='http://localhost:8000/toFile/' + temp + "/" + timerino;
    Http.open("POST", url);
    Http.send();
    console.log(timerino);
// create file $timestamp.png + print contents to