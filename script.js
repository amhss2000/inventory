document.addEventListener('DOMContentLoaded', function() {
    var uniformTotalQuantityInput = document.getElementById('uniformTotalQuantity');
    var uniformInputQuantityInput = document.getElementById('uniformInputQuantity');
    var uniformRemainingQuantityInput = document.getElementById('uniformRemainingQuantity');
  
    uniformTotalQuantityInput.addEventListener('input', updateRemainingQuantity);
    uniformInputQuantityInput.addEventListener('input', updateRemainingQuantity);
  
    function updateRemainingQuantity() {
      var totalQuantity = parseInt(uniformTotalQuantityInput.value) || 0;
      var inputQuantity = parseInt(uniformInputQuantityInput.value) || 0;
      uniformRemainingQuantityInput.value = totalQuantity - inputQuantity;
    }
  
    document.getElementById('saveBtn').addEventListener('click', function() {
      var uniformSize = document.getElementById('uniformSize').value;
      var uniformGrade = document.getElementById('uniformGrade').value;
      var uniformTotalQuantity = parseInt(uniformTotalQuantityInput.value) || 0;
      var uniformInputQuantity = parseInt(uniformInputQuantityInput.value) || 0;
      var uniformRemainingQuantity = parseInt(uniformRemainingQuantityInput.value) || 0;
  
      google.script.run.saveData('Uniform', uniformSize, uniformGrade, uniformTotalQuantity, uniformInputQuantity, uniformRemainingQuantity);
    });
  
    // Add similar event listeners and functions for other product sections
  });
  