const mysql = require('mysql');
const express = require('express');

const bodyParser = require('body-parser');

const port = process.env.PORT || 3050;

const app = express();
const ejs = require("ejs");

// Indica que se debe utilizar 'view engine'
app.set("view engine", "ejs");

app.use(bodyParser.json());
app.use(express.static("public"));

app.use((req, res, next)=>{
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Credentials', true);
  next();
});

const  connection = mysql.createPool({
    // connectionLimit : 1000,
    // connectTimeout  : 60 * 60 * 1000,
    // acquireTimeout  : 60 * 60 * 1000,
    // timeout         : 60 * 60 * 1000,
    host: 'b3ze40eyepzsvc5mo5gg-mysql.services.clever-cloud.com',
    port: 3306,
    user: 'uovn71xhnghjkaeu',
    password: '6ggKKOSfUZjjssRQRbZT',
    database: 'b3ze40eyepzsvc5mo5gg'
});

//
app.get('/', (req, res) => {
  res.type("text/html");
  res.render(
    "index",
    (err, html) => {
      if (err) throw err;
      res.send(html);
    }
  );
});

app.get('/menu', (req, res) => {
  let type = req.query.type;
  let num = req.query.n;

  res.type('text/html');
  res.render(
    'pages/menu',
    {
      filterNom: type,
      filterNum: num
    },
    (err, html) => {
      if (err) throw err;
      res.send(html);
    }
  );
});

// Get all products or product by type
app.get('/products', (req, res) => {
  const sql = 'SELECT * FROM producto';
  
  connection.query(sql, (error, results)=> {
    if(error) throw error;
    if(results.length > 0)
      res.json(results);
    else
      res.send('Not result');
    });
});
    
app.get('/bSProducts', (req, res) => {
  const sql = 'SELECT p.id_producto, p.nombre, p.costo, p.descripcion, p.foto FROM producto p INNER JOIN venta v ON p.id_producto = v.producto_id GROUP BY v.producto_id LIMIT 4'

  connection.query(sql, (error, results)=> {
    if(error) throw error;
    if(results.length > 0)
      res.json(results);
    else
      res.send('Not result');
  });
});

app.listen(port, () => {
  console.log(`Server running on port ${port}`)
}).on('error', (err) => {

  process.once('SIGUSR2', () => {
    process.kill(process.pid, 'SIGUSR2');
  });

  process.on('SIGINT', () => {
    process.kill(process.pid, 'SIGINT');
  });

  process.on('uncaughtException', (err) => {
    console.log('UNCAUGHT EXCEPTION');
    console.log('[Inside "uncaught Exception"]');
  });
});
