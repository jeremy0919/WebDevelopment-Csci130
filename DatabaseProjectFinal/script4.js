

function display1(){
    fetch('fetch.php')
    .then(response => {
      if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
  })
  .then(data => {
      const table = createTable(data);
      replaceTableContent(table);
  })
}

function sortN(){

    fetch('sortN.php')
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.text(); 
    })
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    })
}


function insert1() {
    var formData = new FormData();

    formData.append('Pokemon', document.getElementById('InsPokemon').value);
    formData.append('evolution', document.getElementById('InsEvolution').value);
    formData.append('shinyColor', document.getElementById('insShinyColor').value);
    formData.append('averageSize', document.getElementById('InsAverageSize').value);
    formData.append('type', document.getElementById('InsType').value);
    formData.append('weakTo', document.getElementById('InsWeakTo').value);
    formData.append('canEvolve', document.getElementById('InsCanEvolve').value);
    
    var imgInput = document.getElementById('fileup');
    var file = imgInput.files[0];
    formData.append('fileup', file);
    
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };
    
    xhr.open('POST', 'insert.php', true);
    xhr.send(formData);
    
  
    document.getElementById("InsPokemon").value = "";
    document.getElementById("InsEvolution").value = "";
    document.getElementById("insShinyColor").value = "";
    document.getElementById("InsAverageSize").value = "";
    document.getElementById("InsType").value = "";
    document.getElementById("InsWeakTo").value = "";
    document.getElementById("InsCanEvolve").value = "";
    document.getElementById("displayIMG").src = "";
    document.getElementById("fileup").value = null;

}
function sortI(){

    fetch('sortI.php')
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.text(); 
    })
    .then(data => {
    
        console.log(data);
    })
    .catch(error => {
        console.error('Error fetching data:', error);
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

        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        document.getElementById("displayIMG").src = "uploads/"+rowData['image'];
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

        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        document.getElementById("displayIMG").src = "uploads/"+rowData['image'];
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
 
        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        document.getElementById("displayIMG").src = "uploads/"+rowData['image'];
    })
  })

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
    data.forEach(rowData => {
 
        document.getElementById("InsPokemon").value = rowData['name'];
        document.getElementById("InsEvolution").value = rowData['stage'];
        document.getElementById("insShinyColor").value = rowData['ShinyColor'];
        document.getElementById("InsAverageSize").value = rowData['size'];
        document.getElementById("InsType").value = rowData['type'];
        document.getElementById("InsWeakTo").value = rowData['weakTo'];
        document.getElementById("InsCanEvolve").value = rowData['CanEvolve'];
        console.log("Full Image URL:", "/uploads/" + rowData['image']);
        document.getElementById("displayIMG").src = "uploads/"+rowData['image'];
        
    })
  })

}




function createTable(data) {
  const table = document.createElement('table');
  const headerRow = table.insertRow();
  const columns = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo','image'];

  columns.forEach(columnName => {
      const th = document.createElement('th');
      th.innerHTML = columnName;
      headerRow.appendChild(th);
  });

  data.forEach(rowData => {
    const row = table.insertRow();
    const columnNames = ['id', 'name', 'type', 'ShinyColor', 'stage', 'CanEvolve', 'size', 'weakTo', 'image'];

    columnNames.forEach(columnName => {
        const cell = row.insertCell();
        if (columnName === 'image') {
            const img = document.createElement('img');
            img.src = 'uploads/' + rowData[columnName];
    
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

          
            const table = document.createElement('table');
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

            replaceTableContent(table);
        })
        .catch(error => {
            alert("error");
            console.error('Error:', error);
        });
}

