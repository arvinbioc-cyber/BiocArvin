<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CV.css">
</head>
<body>
    <div class="container">
        <form action="CV2.php" method="get">
                <h2>CURRICULUM VITAE FORM</h2>
            <div class="container2">
                <div class="container3">
                <div class="fill1">
            Name: <input type="text" name="name" placeholder="Name">
            Position: <input type="text" name="position" placeholder="Position">
                </div>
                <div class="fill2">
            Contact:
            <input type="text" id="phone" name="phone" placeholder="Phone">
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="text" id="location" name="location" placeholder="Location">

            Select an image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                </div>
                <div class="container4">
                <div class="fill3">
            Skills:
            <input type="text" name="skills" placeholder="Skills">
            Languages:
            <input type="text" name="languages" placeholder="Languages">
            Hobbies:
            <input type="text" name="hobbies" placeholder="Hobbies">
                </div>
                <div class="fill4">
            Profile:<br>
            <input type="text" id="profile" name="profile" placeholder="Profile">
            Work Experience:<br>
            <input type="text" id="work" name="work" placeholder="Work Experience">
            Education:<br>
            <input type="text" id="education" name="education" placeholder="Education">
                </div>
                </div>
            </div>
            <div class="cont-submit">
            <input type="submit" id="submit" value="Submit">
            </div>
           

        </form>
    </div>
</body>
</html>