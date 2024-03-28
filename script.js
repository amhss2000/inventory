// script.js
document.addEventListener("DOMContentLoaded", function() {
    const loadingIndicator = document.querySelector('.loading-indicator');
    const loadContentBtn = document.getElementById('loadContentBtn');
    const content = document.getElementById('content');

    loadContentBtn.addEventListener('click', function() {
        loadingIndicator.style.display = 'block'; // Show loading indicator
        loadContentBtn.disabled = true; // Disable the button during loading
        
        // Simulate loading for 2 seconds
        setTimeout(function() {
            loadingIndicator.style.display = 'none'; // Hide loading indicator
            content.style.display = 'block'; // Show content
            loadContentBtn.disabled = false; // Re-enable the button
        }, 2000);
    });
});
