<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hari 1 - Joyful Umboh</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h4>Sign Up Form</h4>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <p>
            <label for="first_name">First Name:</label><br><br>
            <input type="text" id="first_name" name="first_name">
        </p>
        
        <p>
            <label for="last_name">Last Name:</label><br><br>
            <input type="text" id="last_name" name="last_name">
        </p>

        <p>
            <label for="gender">Gender:</label><br><br>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label><br>
            
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label><br>

            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label><br>
          </p>
        
        <p>
            <label for="nationality">Nationality:</label><br><br>
            <select id="nationality" name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="malaysian">Malaysian</option>
                <option value="singapura">Singapura</option>
                <option value="australian">Australian</option>
                <option value="other">Other</option>
            </select>
        </p>
        <p>
            <label for="language_spoken">Language Spoken:</label><br><br>
            <input type="checkbox" name="language_spoken[]" value="bahasa_indonesia">
            <label for="bahasa_indonesia">Bahasa Indonesia</label><br>
            <input type="checkbox" name="language_spoken[]" value="english">
            <label for="english">English</label><br>
            <input type="checkbox" name="language_spoken[]" value="other">
            <label for="other">Other</label><br>
        </p>
        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="10" cols="35"></textarea><br>
        
        <input type="submit" value="Sign Up">
      </form>
</body>
</html>
