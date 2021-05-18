const express = require("express");
const pool = require("../modules/db");

const router = express.Router();

//Routes

// Todos tonen (allemaal of op basis van ID)
router.get("/show/:id?", (req, res) => {
  const ID = req.params.id;
  let sql = "SELECT * FROM todos";
  if (ID) sql = `SELECT * FROM todos WHERE user_id = ${ID}`;

  console.log(sql);

  const connection = pool.query(sql, (error, result) => {
    if (error) return res.status(400).send({ message: error.sqlMessage });
    res.status(200).json(result);
  });
});

// Todo aanmaken op basis van ID
router.post("/create/:id", (req, res) => {
  console.log(req.body);

  let date = new Date().toLocaleTimeString("nl-BE", {
    year: "numeric",
    month: "numeric",
    day: "numeric",
    hour: "2-digit",
    minute: "2-digit",
  });

  let SQL = `INSERT INTO todos (title, date, user_id) VALUES ('${req.body.title}', '${date}', ${req.params.id})`;

  console.log(SQL);
  const connection = pool.query(SQL, (error, result) => {
    if (error) return res.status(400).send({ message: error.sqlMessage });
    res.status(200).json({
      message: "TODO created",
      todo: { id: result.insertId, title: req.body.title, date: date },
    });
  });
});

router.delete("/delete/:id", (req, res) => {
  let SQL = `DELETE FROM todos WHERE id=${req.params.id}`;

  console.log(SQL);
  const connection = pool.query(SQL, (error, result) => {
    if (error) return res.status(400).send({ message: error.sqlMessage });

    res.status(200).json({
      message: "TODO deleted",
      todo: { id: req.params.id },
    });
  });
});

module.exports = router;
