<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        Username: <input type="text" name="txtUsername" placeholder="Username" value="Admin">
        <br><br>
        Birthdate: <input type="date" name="txtBirthdate" placeholder="Birthdate" value="2019-12-20">
        <br><br>
        Password: <input type="password" name="txtPw" placeholder="Pw">
        <br><br>
        Gender: 
            <label>
                <input type="radio" name="gender" value="male"> Male
            </label>
            <input type="radio" name="gender" value="female" id="txtFemale"> 
            <label for="txtFemale">Female</label>
        <br><br>
        Message: <textarea name="txtMessage" rows="3">123456</textarea>
        <br><br>
        Course: 
        <select name="txtCourse">
            <option value="PHP">PHP & MySQL</option>
            <option value="Mean">Mean</option>
            <option value="React">React</option>
            <option value="Android">Android</option>
        </select>
        <br><br>
        Course: 
        <select name="txtCourse" multiple>
            <option value="PHP">PHP & MySQL</option>
            <option value="Mean">Mean</option>
            <option value="React">React</option>
            <option value="Android">Android</option>
        </select>
        <br><br>
        <button type="reset">Reset</button>
        <button type="button">No action</button>
        <button type="submit">Send</button>
    </form>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<!-- 
    text
    url
    range
    color
    pw
    date
    datetime
    radio
    checkbox
 -->