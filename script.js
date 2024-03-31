document.addEventListener('DOMContentLoaded', function() {
    var totalQuantityInput = document.getElementById('totalQuantityInput');
    var inputQuantityInput = document.getElementById('inputQuantityInput');
    var remainingQuantityInput = document.getElementById('remainingQuantityInput');
  
    totalQuantityInput.addEventListener('input', updateRemainingQuantity);
    inputQuantityInput.addEventListener('input', updateRemainingQuantity);
  
    function updateRemainingQuantity() {
      var totalQuantity = parseInt(totalQuantityInput.value) || 0;
      var inputQuantity = parseInt(inputQuantityInput.value) || 0;
      remainingQuantityInput.value = totalQuantity - inputQuantity;
    }
  
    document.getElementById('saveBtn').addEventListener('click', function() {
      var product = document.getElementById('productSelect').value;
      var size = document.getElementById('sizeInput').value;
      var grade = document.getElementById('gradeInput').value;
      var totalQuantity = parseInt(totalQuantityInput.value) || 0;
      var inputQuantity = parseInt(inputQuantityInput.value) || 0;
      var remainingQuantity = parseInt(remainingQuantityInput.value) || 0;
  
      google.script.run.saveData(product, size, grade, totalQuantity, inputQuantity, remainingQuantity);
    });
  });
  