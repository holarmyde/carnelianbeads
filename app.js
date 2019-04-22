const express = require("express");
const mongoose = require("mongoose");

const app = express();

const port = process.env.PORT || 5002;

app.listen(port, (req, res) => {
  console.log(`Server started at port ${port}`);
});
