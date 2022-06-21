<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday</title>
</head>
<body>
    <script>

        function birthday(){

            var bday = document.getElementById("date");
            var today = new date();
            var date = today.getFullYear();
            document.write(date)

        }
    </script>
    <form>
        Enter your birthday: <input type="date" id="date">
        <input type="submit" onclick="birthday();">
    </form>
</body>
</html>