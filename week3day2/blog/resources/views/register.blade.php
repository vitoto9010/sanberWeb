<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PENDAFTARAN</title>
</head>

<body>
    <div style="margin: 10px">
        <h2>Buat Akun Baru</h2>

        <form action={{ url("/welcome") }} method="POST">
            @csrf
            <div>
                <label for="fname">First name:</label><br><br>
                <input type="text" id="fname" name="fname"><br><br>

                <label for="lname">Last name:</label><br><br>
                <input type="text" id="lname" name="lname">
            </div>

            <br><br>

            <div>
                <label for="gender">Gender:</label><br><br>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>

            <br><br>

            <div>
                <label for="nationality">Nationality:</label><br><br>
                <select id="nationality" name="nationality">
                    <option value="indonesian">Indonesian</option>
                    <option value="american">American</option>
                    <option value="japanese">Japanese</option>
                    <option value="italian">Italian</option>
                </select>
            </div>

            <br><br>

            <div>
                <label for="gender">Spoken language:</label><br><br>
                <input type="checkbox" id="lang1" name="lang1" value="bahasa indonesia">
                <label for="vehicle1"> Bahasa Indonesia</label><br>
                <input type="checkbox" id="lang2" name="lang2" value="english">
                <label for="vehicle2"> English</label><br>
                <input type="checkbox" id="lang3" name="lang3" value="other">
                <label for="vehicle3"> Other</label>
            </div>

            <br><br>

            <div>
                <label for="bio">Bio:</label><br><br>
                <textarea name="bio" id="bio" rows="10" cols="30"></textarea>
            </div>
            <br>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>
