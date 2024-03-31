var data = {
    "name": "amhss",
    "age": 24
};

fetch('https://script.google.com/macros/s/AKfycbxX454JFFDHnJpQ3VM2RDvUeTfuZ5E9gASVVGU61rKTAGXojuEIac8qU3-QF_Fx2NTD4w/exec', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
})
.then(response => {
    if (response.ok) {
        console.log('Data sent successfully');
    } else {
        console.error('Failed to send data');
    }
})
.catch(error => {
    console.error('Error:', error);
});
