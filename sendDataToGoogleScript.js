var data = {
    "name": "amhss",
    "age": 24
};

fetch('https://script.google.com/macros/s/AKfycbw5AnoWntKDMCpfEQUoANtuAFqA6Ipbe0C7VktkxUEt/dev', {
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
