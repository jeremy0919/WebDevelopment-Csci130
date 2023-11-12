

function display1(){
    fetch('fetch.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}

function sortN(){

    fetch('sortN.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}


function sortI(){

    fetch('sortI.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}



function first1(){

    fetch('first.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}


function next1(){
    fetch('next.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}
function previous1(){
    fetch('previous.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
  const button = document.createElement("button");
  button.onclick()//hmmmm
}

function find() {
    fetch('find.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
      const table = createTable(data);

      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}

// Function to handle the edit action
function editFunction(id) {
    // Make an AJAX request to the edit.php script
    fetch('edit.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'edit': true,
            'id': id,
        }),
    })
    .then(response => response.text())
    .then(formHTML => {
        // Display the form returned by the PHP script
        const formContainer = document.getElementById('editFormContainer');
        formContainer.innerHTML = formHTML;
    })
    .catch(error => console.error('Error:', error));
}
function last1(){
 
  fetch('last.php')
  .then(response => {
    if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
})
.then(data => {
    // Create a table element
    const table = createTable(data);

    // Replace the existing table content or append it to a specific container element
    replaceTableContent(table);
})
}




function createTable(data) {
  // Create a table element
  const table = document.createElement('table');
 // table.setAttribute("id","table-container");
  table.border = '1';

  // Create table header
  const headerRow = table.insertRow();
  const columns = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo'];

  columns.forEach(columnName => {
      const th = document.createElement('th');
      th.innerHTML = columnName;
      headerRow.appendChild(th);
  });

  // Create table rows
  data.forEach(rowData => {
      const row = table.insertRow();
      const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo'];

      columnNames.forEach(columnName => {
          const cell = row.insertCell();
          cell.innerHTML = rowData[columnName];
      });
  });

  return table;
}

function replaceTableContent(newTable) {
  // Replace the existing table content or append it to a specific container element
  const container = document.getElementById('table-container'); // Replace 'table-container' with your actual container ID
  container.innerHTML = '';
  container.appendChild(newTable);
}


function displayIND() {
    fetch('display.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
        const table = document.createElement('table');
      // table.setAttribute("id","table-container");
       table.border = '1';
     
       // Create table header
       const headerRow = table.insertRow();
       const columns = ['Num Pokemon', 'Current index'];
     
       columns.forEach(columnName => {
           const th = document.createElement('th');
           th.innerHTML = columnName;
           headerRow.appendChild(th);
       });
     
       // Create table rows
       data.forEach(rowData => {
           const row = table.insertRow();
           const columnNames = ['Num Pokemon', 'Current index'];
     
           columnNames.forEach(columnName => {
               const cell = row.insertCell();
               cell.innerHTML = rowData[columnName];
           });
       });
     
      // Replace the existing table content or append it to a specific container element
      replaceTableContent(table);
  })
}