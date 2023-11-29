
function saveName() {
    var nameInput = document.getElementById('nameInput').value;

    // Using jQuery for simplicity, you can also use Fetch API for modern browsers
    $.ajax({
        type: 'POST',
        url: 'saveName.php',
        data: { name: nameInput },
        dataType: 'json',
        success: function(response) {
            alert(response.message);
        }
    });
}

function getName() {
    // Using jQuery for simplicity, you can also use Fetch API for modern browsers
    $.ajax({
        type: 'POST',
        url: 'getName.php',
        dataType: 'json',
        success: function(response) {
            var name = response.name || 'No name found';
            document.getElementById('output').innerHTML = '<p>Name: ' + name + '</p>';
        }
    });
}

// Initial load of the name
getName();