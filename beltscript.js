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
});
