function display1(){
    fetch('fetch.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
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

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
}

function sortN(){

    fetch('sortN.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
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

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
}


function sortI(){

    fetch('sortI.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
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

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
}



function first(){

    fetch('First.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
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

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
}
function next(){

    fetch('next.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
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

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
}
function previous(){

    fetch('previous.php')
    .then(response => response.json())
    .then(data => {
    // Create a table element
    const table = document.createElement('table');
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

    // Append the table to the body or another HTML element
    document.body.appendChild(table);
  })
  .catch(error => console.error('Error:', error));
}

function find() {
    fetch('find.php')
        .then(response => response.json())
        .then(data => {
            // Create a table element
            const table = document.createElement('table');
            table.border = '1';

            // Create table header
            const headerRow = table.insertRow();
            const columns = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'edit'];

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

                // Add Edit button to each row
                const editCell = row.insertCell();
                const editButton = document.createElement('button');
                editButton.innerHTML = 'Edit';
                editButton.onclick = function () {
                    // Call the PHP edit script with the row data
                    editFunction(rowData.id);
                };
                editCell.appendChild(editButton);
            });

            // Append the table to the body or another HTML element
            document.body.appendChild(table);
        })
        .catch(error => console.error('Error:', error));
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