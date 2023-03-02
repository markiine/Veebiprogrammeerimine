
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 0404</title>
    <style>
        table, th, td
        {
            border: 1px solid black;
            width: 350px;
        }

    </style>
</head>
<body>
<pre>

Ülesanne 0404

Tee vorm &lt;form&gt; tagiga kangelase andmete sisestamiseks. Pange kogu vorm ka tabelisse. Paigutage lahtrite kirjelduse esimesse veergu ja lahtrid teise veergu. Nagu on näidatud siin. https://students.tmk.edu.ee/php/naited/user_database/insert_user.php
Nimi (&lt;input type=text&gt;)
Klass (&lt;select>, &lt;options&gt;)
Rass (&lt;select>, &lt;options&gt;)
Sugu (&lt;input type=radio&gt;)
Lemmikloom kaasas (&lt;input type=checkbox&gt;)
Kirjeldus (&lt;textarea>&gt;&lt;/textarea&gt;)
Submit nupp &lt;input type=submit&gt;
Vorm kinni.

</pre>


<h2>Sisesta kangelase andmed:</h2>

<form method="post">
    <label for="name">Sisesta kangelase nimi:</label>
    <input id="name" type="text" name="name" >
    <br><br>


    <label for="class">Kangelase klass:</label>
    <select id="class" name="class">
        <option value="tuli" selected>tuli</option>
        <option value="vesi">vesi</option>
        <option value="maa" >maa</option>
        <option value="õhk">õhk</option>
    </select>

    <br><br>

    <label for="race">Kangelase rass:</label>
    <select id="race" name="race">
        <option value="tulnukas" selected >tulnukas</option>
        <option value="mongoliidne">mongoliidne </option>
        <option value="negriidne" >negriidne </option>
        <option value="europiidne">europiidne</option>
    </select>
    <br><br>

    <label for="gender">Kangelase sugu:</label>
    <input id="gender" type="radio" name="gender"  value="naine">Naine
    <input id="gender" type="radio" name="gender"  value="mees">Mees
    <input id="gender" type="radio" name="gender"  value="puudub">Puudub

    <br><br>

    <label for="pet">Kas kangelasel on lemmikloom:</label><br><br>
    Jah:<input id="pet" type="checkbox" name="pet" value="jah">
    Ei:<input id="pet" type="checkbox" name="pet" value="ei">
    <br><br>
    <label for="description">Kirjelda kangelast:</label>
    <input id="description" type="text" name="description" >
    <br><br>
    <input type="submit" name="submit" value="Vajuta">
    <br><br>
</form>
<table >
    <tr>
        <th>Nimi:</th>
        <td></td>
    </tr>
    <tr>
        <th>Klass:</th>
        <td></td>
    </tr>
    <tr>
        <th>Rass:</th>
        <td></td>
    </tr>
    <tr>
        <th>Sugu:</th>
        <td></td>
    </tr>
    <tr>
        <th>Lemmikloom:</th>
        <td></td>
    </tr>
    <tr>
        <th>Kirjeldus:</th>
        <td></td>
    </tr>
</table>




</body>
</html>

