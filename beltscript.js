document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('stockForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        let totalQuantity = parseInt(document.getElementById('total_quantity').value);
        let size75 = parseInt(document.getElementById('size_75').value);
        let size95 = parseInt(document.getElementById('size_95').value);
        let size110 = parseInt(document.getElementById('size_110').value);
        
        document.getElementById('input_75').textContent = size75;
        document.getElementById('input_95').textContent = size95;
        document.getElementById('input_110').textContent = size110;
        
        document.getElementById('remaining_75').textContent = totalQuantity - size75;
        document.getElementById('remaining_95').textContent = totalQuantity - size95;
        document.getElementById('remaining_110').textContent = totalQuantity - size110;
    });

    document.getElementById('printButton').addEventListener('click', function() {
        window.print();
    });

    document.getElementById('saveToSheetsButton').addEventListener('click', function() {
        let totalQuantity = document.getElementById('total_quantity').value;
        let size75 = document.getElementById('size_75').value;
        let size95 = document.getElementById('size_95').value;
        let size110 = document.getElementById('size_110').value;

        // Send the data to the server to handle saving to Google Sheets
        fetch('/save-to-sheets', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                totalQuantity: totalQuantity,
                size75: size75,
                size95: size95,
                size110: size110
            })
        })
        .then(response => {
            if (response.ok) {
                alert('Data saved to Google Sheets successfully!');
            } else {
                alert('Error saving data to Google Sheets!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error saving data to Google Sheets!');
        });
    });
});
