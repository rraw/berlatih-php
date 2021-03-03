<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Pendaftaran</title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
        <form action="/welcome" method ="POST"> 
            @csrf 
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name"><br><br> 
            <!-- akan ditangkap POST karena id == for nya -->

            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name"><br><br>
            <!-- akan ditangkap POST karena id == for nya -->

            <label for="gender">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br><br>

            <label for="nationality">Nationality:</label><br>
            <select name ="nationality" id="kewarganegaraan">
                <option value="Indonesian">Indonesian</option>
                <option value="Malaysian">Malaysian</option>
                <option value="Singaporean">Singaporean</option>
                <option value="Australian">Australian</option>
                <option value="Other">Other</option>
            </select><br><br>

            <label for="language_spoken">Language Spoken:</label><br>
            <input type="checkbox" id="language1" name="language1" value="Indonesian">
            <label for="language1"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="language2" name="language2" value="English">
            <label for="language2"> English</label><br>
            <input type="checkbox" id="language3" name="language3" value="Other">
            <label for="language3"> Other</label><br><br>

            <label for="bio">Bio:</label><br>
            <textarea name="bio" id="biodata" cols="30" rows="10"></textarea><br><br>

            <input type="submit" value="masuk">
        </form>
    </body>
</html>