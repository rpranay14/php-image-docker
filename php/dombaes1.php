<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOM-based XSS Example</title>
</head>
<body>
    <h1>User Search</h1>
    <form id="searchForm">
        <label for="username">Search for a user:</label>
        <input type="text" id="username" name="username">
        <button type="submit">Search</button>
    </form>
    <div id="result"></div>

    <script>
        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var username = document.getElementById('username').value;
            fetch(`search_users.php?username=${encodeURIComponent(username)}`)
                .then(response => response.json())
                .then(data => {
                    var resultDiv = document.getElementById('result');
                    if (data.found) {
                        resultDiv.innerHTML = `<p>User found: ${data.user.fullname} - ${data.user.email}</p>`;
                    } else {
                        // Inject the user input directly into the DOM
                        resultDiv.innerHTML = `<p>User not found: ${username} <img src="x" onerror="document.getElementById('result').innerHTML='User not found: ${username}';"></p>`;
                    }
                });
        });
    </script>
</body>
</html>
