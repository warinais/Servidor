const express = require('express');
const expressLayouts = require('express-ejs-layouts');

const app = express();

app.set('view engine', 'ejs');

app.use(expressLayouts);
app.set('layout', 'layouts/app');

app.get('/', (req, res) => {
    res.render('inicio');
});

app.listen(3000, () => {
    console.log('Servidor iniciado en http://localhost:3000');
});