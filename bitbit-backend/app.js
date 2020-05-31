const bodyParser = require('body-parser');
const cors = require('cors');
const express = require('express');
const routes = require('./routes');
const log = require('morgan')('dev');

// server config variables
const config = {
  PORT: process.env.APP_PORT || '9000',
  ENV: process.env.NODE_ENV || 'development',
}

// create express app
const app = express();

// import bodyParser to express app
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

app.use(cors());
app.use(log);

// import routes to express app with '/api' prefix
app.use('/api', routes);

// run the express app on PORT config.PORT
app.listen(config.PORT, (req, res) => {
  console.log(`Server is running on ${config.PORT} port.`);
});