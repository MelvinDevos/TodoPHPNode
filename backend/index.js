const express = require("express");
const dotenv = require("dotenv").config();
const cors = require('cors')
const pool = require("./modules/db");
const app = express();

app.use(cors()) //CORS error
app.use(express.json()); //Used to parse JSON bodies

// Routes
const todos = require("./routes/todos");
app.use("/api/todos", todos);

const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`TODO api listening on port: ${port}`);
});