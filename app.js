const express = require("express");
const mongoose = require("mongoose");

const app = express();

app.get("/", (req, res) => {
  res.render("index.html");
});

const port = process.env.PORT || 5000;

app.listen(port, () => {
  console.log(`Server started at port ${port}`);
});
