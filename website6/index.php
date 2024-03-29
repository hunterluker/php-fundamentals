<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Search User</title>
    <script>
        function showSuggestion(str) {
            if(str.length === 0) {
                document.getElementById('output').innerHTML = '';
            } else {
                // AJAX REQUEST
                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open('GET', "suggest.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<body>

    <div class="container">
        <h1>Search Users</h1>
        <form action="">
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)" />
        </form>
        <p>Suggestions: <span id="output" style="font-weight: bold"></span></p>
    </div>
    
</body>
</html>