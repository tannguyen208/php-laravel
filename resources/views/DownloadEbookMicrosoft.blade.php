<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body>
    <button id="get-data">Click Here</button>
    <div id="show-data"></div>
    
    <script>
        $(document).ready(function () {
            $('#get-data').click(function () {
                var showData = $('#show-data');

                $.getJSON('https://drive.google.com/file/d/1PdpFRGUxRSXL3hh7lauUZsQAc1tjAZKx/view', function (data) {
                console.log(data);

                var items = data.items.map(function (item) {
                    return item.key + ': ' + item.value;
                });
                showData.empty();
                if (items.length) {
                    var content = '<li>' + items.join('</li><li>') + '</li>';
                    var list = $('<ul />').html(content);
                    showData.append(list);
                }
                });
                showData.text('Loading the JSON file.');
            });
            });
    </script>

</body>
</html>