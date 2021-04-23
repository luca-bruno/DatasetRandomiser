const express = require("express");
const app = express();



console.log('Printing DSL structure...');

// set up endpoint for var temp


app.get("/", function(req, res){
    res.send("jimmy");
})

app.post("/toFile/:string/:timerino", async function(req, res){
    fs = require('fs');
    fs.writeFile('uploads/' + req.params.timerino + '.gui', req.params.string, function (err, data) {
        if (err){
            return console.log(err);
        } else {
            console.log(data);
        }
    });
    res.send(req.params.string);
    // res.send("jimmy");
})

app.listen(process.env.port||8000, function(){
    console.log("joshua");
});