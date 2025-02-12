<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body{
        margin: 0;
        padding: 0;
        background-color:rgb(4, 0, 24);
        }
        table {
            width: 100%;
        }
        img {
            width: 250px;
            height: 200px;
            margin-right: 20px;
        }
        .card{
            background-color: rgb(255, 251, 251);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }
        .card-showcase{
            background-color: rgb(255, 251, 251);
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            height: 500px;
        }
        .navbar{
            border-bottom: 2px solid black;
            text-align: center;
            padding: 10px;
        }
        .navbar a{
            font-size: 18px;
            text-decoration: none;
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 5px 5px;
            margin: 5px;
            border: 2px solid black;
            border-radius: 5px;
        }
        .navbar a:hover{
            background-color: rgb(255, 251, 251);
            color: black;
        }
        .show{
            font-size: 18px;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            background-color: rgb(255, 251, 251);
            text-align: center;
            color: black;
            overflow-y: scroll;
            scrollbar-width: none;
        }
        .show::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <table>
            <tr >
                <td style="width: 75%; border-right: 2px solid black;">
                    <h1>Maulana Lukman</h1>
                    <p>
                        I am a Web Developer experienced in JavaScript, PHP and MySQL.
                    </p>
                </td>
                <td>
                    <img src="w.png" alt="Profile Picture">
                </td>
            </tr>
        </table>
    </div>
    <div class="card-showcase">
        <div class="navbar">
            <a href="#" id="about">about me</a>
            <a href="#" id="project">project</a>
            <a href="#" id="skill">specialist</a>
            <a href="#" id="contact">contact</a>
        </div>
        <div class="show" id="show">

        </div>
    </div>

</body>
</html>

<script>
    $(document).ready(function() {
        $(".show").load("about.php");
        $("#about").click(function() {
            $(".show").load("about.php");
        });
        $("#project").click(function() {
            $(".show").load("project.php");
        });
        $("#skill").click(function() {
            $(".show").load("skill.php");
        });
        $("#contact").click(function() {
            $(".show").load("contact.php");
        });
    });
</script>