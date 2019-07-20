<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="JQuery/jquery-3.4.1.min.js"></script>
</head>
<body>
<script type="text/javascript">
    $(document).ready(function () {
        $("#ajaxButton").click(function () {
            $.ajax({
                type: "POST",
                url: "ajax.php", //goi toi file ajax.php
                data: "name=" + $("#name").val() + "&year=" + $("#year").val(),//du lieu gui di
                success: function (html) {
                    $("#responseDiv").html(html);
                }
            });
        });
    });
</script>

<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" id="name"/></td>
    </tr>
    <tr>
        <td>Year:</td>
        <td><input type="text" id="year"/></td>
    </tr>
</table>
<div>
    <input type="button" value="Submit" id="ajaxButton"/>
</div>
<div id="responseDiv"> </div>
</body>
</html>