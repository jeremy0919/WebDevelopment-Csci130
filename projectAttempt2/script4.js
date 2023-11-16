

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

function insert1() {
    var pokemon = encodeURIComponent(document.getElementById('InsPokemon').value);
    var evolution = encodeURIComponent(document.getElementById('InsEvolution').value);
    var shinyColor = encodeURIComponent(document.getElementById('insShinyColor').value);
    var averageSize = encodeURIComponent(document.getElementById('InsAverageSize').value);
    var type = encodeURIComponent(document.getElementById('InsType').value);
    var weakTo = encodeURIComponent(document.getElementById('InsWeakTo').value);
    var canEvolve = encodeURIComponent(document.getElementById('InsCanEvolve').value);
    var img = encodeURIComponent(document.getElementById('InsImage').value);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle the response from the server
            console.log(xhr.responseText);
        }
    };

    var data = "Pokemon=" + pokemon +
        "&evolution=" + evolution +
        "&shinyColor=" + shinyColor +
        "&averageSize=" + averageSize +
        "&type=" + type +
        "&weakTo=" + weakTo +
        "&canEvolve=" + canEvolve +
        "&img=" + img;

    xhr.open("POST", "insert.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);

    // Reset the form values
    document.getElementById("InsPokemon").value = "";
    document.getElementById("InsEvolution").value = "";
    document.getElementById("insShinyColor").value = "";
    document.getElementById("InsAverageSize").value = "";
    document.getElementById("InsType").value = "";
    document.getElementById("InsWeakTo").value = "";
    document.getElementById("InsCanEvolve").value = "";
    document.getElementById("InsImage").value = "";
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
    data.forEach(rowData => {
     //   const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'image'];

        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
       // document.getElementById("InsImage").value = rowData['image'];
    })
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
    data.forEach(rowData => {
     //   const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'image'];

        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        document.getElementById("InsImage").value = rowData['image'];
    })
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
    data.forEach(rowData => {
     //   const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'image'];

        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        document.getElementById("InsImage").value = rowData['image'];
    })
  })

}
function makeEdit(){


// Create a submit button element
const submitButton = document.createElement("button");
submitButton.type = "button";
submitButton.textContent = "Edit";
submitButton.addEventListener("click", PrepareEdit());

// Append the input and submit button to the form

const container = document.getElementById('table-container');
container.appendChild(submitButton);

}


/*function() {
    // Get the value from the input
    alert("in edit");
    // Create a new FormData object to send data to the PHP script
    const formData = new FormData();
    

    // Use fetch to call the PHP script
    fetch('edit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
    })
    .then(data => {
        // Handle the response data if needed
        console.log('Response data:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
});*/
// Function to handle the edit action

function last1(){
 
  fetch('last.php')
  .then(response => {
    if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
    }
    return response.json();
})
.then(data => {
    data.forEach(rowData => {
     //   const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'image'];

        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        document.getElementById("InsImage").value = rowData['image'];
    })
  })

}




function createTable(data) {
  // Create a table element
  const table = document.createElement('table');
 // table.setAttribute("id","table-container");
  table.border = '1';

  // Create table header
  const headerRow = table.insertRow();
  const columns = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo','image'];

  columns.forEach(columnName => {
      const th = document.createElement('th');
      th.innerHTML = columnName;
      headerRow.appendChild(th);
  });

  // Create table rows
  data.forEach(rowData => {
    const row = table.insertRow();
    const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'image'];

    columnNames.forEach(columnName => {
        const cell = row.insertCell();
        if (columnName === 'image') {
            const img = document.createElement('img');
            img.src = rowData[columnName]; 
    
            img.alt = 'Pokemon Image';
            
           
            img.style.width = '100px';
            img.style.height = 'auto'; 
            
            cell.appendChild(img);
        } else {
            cell.innerHTML = rowData[columnName];
        }
    });
});

  return table;
}

function replaceTableContent(newTable) {
  // Replace the existing table content or append it to a specific container element
  const container = document.getElementById('table-container');
  container.innerHTML = '';
  container.appendChild(newTable);
}


function displayIND1() {
    fetch('display.php')
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log('Received data:', data);

            // Create a table element
            const table = document.createElement('table');
            table.border = '1';

            // Create table header
            const headerRow = table.insertRow();
            const columns = ['Num_Pokemon', 'Current_index'];

            columns.forEach(columnName => {
                const th = document.createElement('th');
                th.innerHTML = columnName;
                headerRow.appendChild(th);
            });

            const dataRow = table.insertRow();
            const cell1 = dataRow.insertCell();
            cell1.innerHTML = data[0]; // Num_Pokemon
            const cell2 = dataRow.insertCell();
            cell2.innerHTML = data[1]; // Current_index

            // Replace the existing table content or append it to a specific container element
            replaceTableContent(table);
        })
        .catch(error => {
            alert("error");
            console.error('Error:', error);
        });
}

function PrepareEdit(){
    fetch('edit1.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      // Create a table element
        const obj1 = document.getElementById("InsPokemon");
        const obj2 = document.getElementById("InsEvolution");
        const obj3 = document.getElementById("insShinyColor");
        const obj4 = document.getElementById("InsAverageSize");
        const obj5 = document.getElementById("InsType");
        const obj6 = document.getElementById("InsWeakTo"); // gets data in form
        const obj7 = document.getElementById("InsCanEvolve");
        const obj8 = document.getElementById("InsImage");
        // pulls php data from unnamed php file
        obj1.innerHTML = data['name'][0];
        alert(data['name'][0]);
        obj2.innerHTML = data['type'];
        obj3.innerHTML = data['ShinyColor'];
        obj4.innerHTML = data['stage'];
        obj5.innerHTML = data['CanEvolve'];
        obj6.innerHTML = data['size'];
        obj7.innerHTML = data['weakTo'];
        obj8.innerHTML = data['image'];
        const submitButton = document.createElement("button");
        submitButton.type = "button";
        submitButton.textContent = "save";
        submitButton.addEventListener("click", save());
        
        // Append the input and submit button to the form
        
        const container = document.getElementById('save');
        container.appendChild(submitButton);
})


}
function save(){

    //calls delete
    //calls insert
}
/*
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

function find() {
    // Get the value from the input field
    const findValue = encodeURIComponent(document.getElementById('findInput').value);
    fetch(`find.php?find=${findValue}`) // sends value to php file using fetch
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
        .catch(error => {
            alert("error");
            console.error('Error:', error);
        });
}
*/