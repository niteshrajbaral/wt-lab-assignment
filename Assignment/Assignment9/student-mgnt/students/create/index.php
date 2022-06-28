<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style type="text/css">
        .form-group{
            margin-top: 3px;
        }
    </style>
</head>
<body>
    <form method="post" action="../action/save.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" name="name">
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="text" name="email" placeholder="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" id="password" placeholder="*****" name="password">
        </div>
        <div class="form-group">
            <label for="DOB">D.O.B.</label>
            <input type="date" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="favourite-color">favourite-color</label>
            <input type="color" id="favourite-color" name="color">
        </div>
        <div class="form-group">
            <label for="weight">weight(kg)</label>
            <input type="number" id="weight" name="weight">
        </div>
        <div class="form-group">
            <label>gender</label>
            <div>
                <label for="male">male</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="female">female</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="other">other</label>
                <input type="radio" id="other" name="gender" value="other">
            </div>
        </div>
        <div class="form">
            <label>Hobbies</label>
            <input type="checkbox" id="travelling" name="hobbies[]" value="traveling">
            <label for="travelling"> Travelling</label>
            <input type="checkbox" id="dancing" name="hobbies[]" value="dancing">
            <label for="dancing"> Dancing</label>
            <input type="checkbox" id="singing" name="hobbies[]" value="singing">
            <label for="singing"> Singing</label>
        </div>
        <div class="form-group">
            <label for="nationality" name="nationality">nationality</label>
            <select>
                <option value="NP">Nepal</option>
                <option value="IN">India</option>
                <option value="CH">China</option>
                <option value="UK">United Kingdom</option>
           </select>
        </div>
        <div class="form-group">
            <label for="profile"> Profile</label>
            <input type="file" id="profile" accept="image/png,image/jpeg" name="profile">
        </div>
        <div class="form-group">
            <input type="submit" value="create"/>
            <input type="reset" value="cancel"/>
        </div>
    </form>
</body>
</html>