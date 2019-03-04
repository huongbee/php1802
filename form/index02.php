<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-6">
                <h2>Form</h2>
                <form>
                    <div class="form-group row">
                        <label class="col-4">
                            Username:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="text" name="txtUsername" placeholder="Username"  value="Admin" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">
                            Birthdate:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="date" name="txtBirthdate" placeholder="Birthdate"
                                value="2019-12-20">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">
                            Password:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="password" name="txtPw" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-4">
                            Gender:
                        </label>
                        <div class="col-2">
                            <label><input type="radio" name="gender" value="male"> Male</label>
                        </div>
                        <div class="col-3">
                            <label><input type="radio" name="gender" value="female" id="txtFemale"> Female</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-4">Course:</label>

                        <div class="col-8">
                            <select class="form-control" name="hobbies">
                                <option value="PHP">PHP & MySQL</option>
                                <option value="Mean">Mean</option>
                                <option value="React">React</option>
                                <option value="Android">Android</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>