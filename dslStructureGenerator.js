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

var rows = document.getElementsByClassName("row");
// loop thru rows
    for(i = 0; i < rows.length; i++){
        temp += "row{\n";
        var containers = rows[i].getElementsByTagName("div");
        for(a = 0; a < containers.length; a++){
            if(containers[a].className){
            temp += ClassGUIs(containers[a].className) + "{\n";
                var title = containers[a].getElementsByTagName("h4");
                if(title){
                    temp += "small-title,";
                }
                var paragraph = containers[a].getElementsByTagName("p");
                if(title){
                    temp += "text,";
                }
                var button = containers[a].getElementsByClassName("btn");
                temp += ClassGUIs(button[0].className);
                // console.log(button);
                temp += "\n}\n";
        }
        }
        temp += "}\n";
    }
    console.log(temp);
    // console.log(containers);

    function ClassGUIs(className){
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