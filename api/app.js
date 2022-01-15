// Definitions
const express = require("express"),
    cors = require("cors"),
    app = express();


app.use(cors());

/// OAuth2 
const fetch = require("node-fetch")

require("dotenv").config()
const PORT = process.env.PORT || '80';

// api things 


var corsOptions = {
    origin: '*',
    optionsSuccessStatus: 200
}

/* 
const name = require("../package.json").name,
    description = require("../package.json").description,
    version = require("../package.json").version,
    author = require("../package.json").author,
    url = require("../package.json").repository.url;
*/


// ROUTES
app.get("/api/", cors(corsOptions), (req, res) => {
    const mainpage = (`API for invalidlenni.de`);
    return res.send(mainpage)
});

app.get("/api/status", cors(corsOptions), (req, res) => {
    const mainpage = (`API for invalidlenni.de`);
    return res.send(mainpage)
});

// Website (Utilities)
app.get("/api/current/year", cors(corsOptions), (req, res) => {
    const y = new Date();
    date = document.getElementById('current_year').innerHTML = Date(date)
    return res.send(date)
});


app.get("/r/support", cors(corsOptions), (req, res) => {
    return res.redirect(`https://deinserverhost.de/store/aff.php?aff=4224`)
});

app.get("/r/discord/devplace", cors(corsOptions), (req, res) => {
    return res.redirect(`https://discord.gg/ntJEy5ADMu`)
});

app.get("/r/discord/community", cors(corsOptions), (req, res) => {
    return res.redirect(`https://discord.gg/mnZtwzaQdY`)
});

app.get("/r/linktree", cors(corsOptions), (req, res) => {
    return res.redirect(`https://linktr.ee/lennii`)
});

app.get("/r/blog", cors(corsOptions), (req, res) => {
    return res.redirect(`https://medium.com/@invalidlenni`)
});


app.use(function (req, res, next) {
    res.status(404).send("Sorry, can't find that!")
});

app.use(function (req, res, next) {
    res.status(201).send("Missing parameters!")
});


app.use(function (req, res, next) {
    res.status(403).send("Missing access")
});

app.use(function (req, res, next) {
    res.status(500).send("Internal Server Error")
});



app.listen(PORT, console.log(`invalidlenni.de-api is listing to`, PORT));
