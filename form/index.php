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
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
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
                            <input class="form-control" type="text" name="txtUsername" placeholder="Username" value="Admin" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">
                        Birthdate:
                        </label>
                        <div class="col-8">
                            <input class="form-control" type="date" name="txtBirthdate" placeholder="Birthdate" value="2019-12-20">
                        </div>
                    </div>
                     
                    <div class="form-group">
                        <label>Password:</label>
                        <input class="form-control" type="password" name="txtPw" placeholder="Pw">
                    </div>
                     
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
                    <select name="hobbies" multiple>
                        <option value="PHP">PHP & MySQL</option>
                        <option value="Mean">Mean</option>
                        <option value="React">React</option>
                        <option value="Android">Android</option>
                    </select>
                    <br><br>
                    Course:
                    <select name="txtCourse">
                        <option value="PHP">PHP & MySQL</option>
                        <option value="Mean">Mean</option>
                        <option value="React">React</option>
                        <option value="Android">Android</option>
                    </select>
                    <br><br>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="button" class="btn btn-danger">No action</button>
                    <button type="submit" class="btn btn-primary">Send</button>
                    <a class="btn btn-info" href="https://khoapham.vn/dang-ki-hoc.html" target="_blank">khoapham.vn</a>
                </form>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
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