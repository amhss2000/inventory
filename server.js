const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

// Database connection
mongoose.connect('mongodb://localhost:27017/belt', { useNewUrlParser: true, useUnifiedTopology: true });
const db = mongoose.connection;
db.once('open', () => console.log('Connected to MongoDB'));

// Define schema
const stockSchema = new mongoose.Schema({
    dateTime: String,
    totalQuantity: Number,
    size: Number,
    inputQuantity: Number,
    remainingQuantity: Number
});

const Stock = mongoose.model('Stock', stockSchema);

// Middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// Save data to database
app.post('/stocks', (req, res) => {
    const stockData = req.body;
    const stock = new Stock(stockData);
    stock.save((err, savedStock) => {
        if (err) {
            console.error(err);
            res.status(500).send('Error saving data');
        } else {
            res.status(201).send(savedStock);
        }
    });
});

// Get all stocks from database
app.get('/stocks', async (req, res) => {
    try {
        const stocks = await Stock.find({});
        res.json(stocks);
    } catch (err) {
        console.error(err);
        res.status(500).send('Error fetching data');
    }
});

app.listen(PORT, () => console.log(`Server running on port ${PORT}`));
s