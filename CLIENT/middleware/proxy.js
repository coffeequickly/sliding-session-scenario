const proxy = require('express-http-proxy');
const app = require('express')();

app.use('/api', proxy('http://dev.half.engineer'));

export default app
