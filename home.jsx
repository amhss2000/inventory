import React, { useState } from 'react';

function LoadingPage() {
  const [isLoading, setIsLoading] = useState(false);

  const handleLoading = () => {
    setIsLoading(true);
    // Simulate loading for 2 seconds
    setTimeout(() => {
      setIsLoading(false);
    }, 2000);
  };

  return (
    <div>
      <h1>Welcome to the Loading Page</h1>
      {isLoading ? (
        <div>Loading...</div>
      ) : (
        <div>
          <p>This is the content of the page.</p>
          <button onClick={handleLoading}>Load Content</button>
        </div>
      )}
    </div>
  );
}

export default LoadingPage;
