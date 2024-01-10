<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
<style>
 body {
    font-family: Arial, sans-serif;
    background-color: #094958;
    color: #101111;
    padding: 140px;
}

h1 {
  text-align: center;
  margin-top: 20px;
}

form {
  width: 75%;
  max-width: 550px;
  margin: 20px auto;
  padding: 15px;
  background-color: #e9e7dd;
  border-radius: 15px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  font-weight: bold;
  margin-top: 5px;
}


input[type="text"] {
            width: 80%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #080808;
            border-radius: 3px;
        }

select {
  width: 70%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #080808;
  border-radius: 3px;
}

input[type="radio"],
input[type="checkbox"] {
  margin-top: 5px;
}

textarea {
  width: 79%;
  padding: 30px;
  margin-top: 5px;
  border: 3px solid #080808;
  border-radius: 20px;
}


button {
  background-color: #3d4d83;
  color: #ffffff;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  cursor: pointer;
  margin-top: 15px;
  display: inline-block;
}

 a button {
  background-color: #1c2f6d;
}

    </style>


</head>
<body>
    <form method="post" action="no3.php">
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
<Form method="POST" action="no3.php">
    <label for="firstname">First name : </label><br>
    <input type="text" name="first" id="first"required>
    <br><br>
    <label for="lastname">Last name : </label><br><br>
    <input type="text" name="last" id="last"required>
    <br><br>

    <label for="Gender">Gender</label><br><br>
    <input type="radio" name="gender" id="male" value="Laki-Laki">Male <br>
    <input type="radio" name="gender" id="female" value="Perempuan">Female <br><br>

   <label for="Nationality">Nationality</label><br><br>
   <select name="country" id="country">Nationality
        <option value="Indonesia">Indonesia</option>
        <option value="Inggris">Amerika</option>
        <option value="Inggris">Inggris</option>
    </select>
    <br><br>

    <label for="Language Spoken">Language Spoken</label><br><br>
    <input type="checkbox" name="bahasa[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
    <input type="checkbox" name="bahasa[]" value="English">English<br>
    <input type="checkbox" name="bahasa[]" value="Other">Other<br>
    <br>

    <label for="bio">Bio</label><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br><br>
    <button>Sign Up</button><br><br>
    </form>
</body>
</html>