function generateRandomNumbers() {
    const n = parseInt(prompt("Enter the number of elements:"));
    const randomNumbers = Array.from({ length: n }, () => Math.floor(Math.random() * n) + 1);
    document.getElementById('numbers').value = randomNumbers.join(',');
  }
  
  function sendData(method) {
    const numbers = document.getElementById('numbers').value.split(',').map(Number);
    const jsonData = JSON.stringify({ numbers });
  
    $.ajax({
      type: method,
      url: `server.php`,
      data: { data: jsonData },
      success: function (response) {
        displayResults(response);
      },
      error: function () {
        alert('Error occurred during AJAX request.');
      }
    });
  }
  
  function displayResults(response) {
    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = '';
  
    const results = JSON.parse(response);
  
    resultDiv.innerHTML += `<p>Average: ${results.average}</p>`;
    resultDiv.innerHTML += `<p>Median: ${results.median}</p>`;
    resultDiv.innerHTML += `<p>Standard Deviation: ${results.standardDeviation}</p>`;
    resultDiv.innerHTML += `<p>Min: ${results.min}</p>`;
    resultDiv.innerHTML += `<p>Max: ${results.max}</p>`;
  }
  