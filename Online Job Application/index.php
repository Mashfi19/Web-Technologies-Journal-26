<!DOCTYPE html>
<html>
<head>
    <title>Online Job Application</title>
</head>

<body>

<h1>Online Job Application Form</h1>

<form action="process.php" method="POST" enctype="multipart/form-data">

    <label for="id">Applicant ID:</label>
    <input type="text" id="id" name="id" required>
    <br><br>

    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <label>Gender:</label>
    <label><input type="radio" id="male" name="gender" value="Male" required>Male</label>
    <label><input type="radio" id="female" name="gender" value="Female">Female</label>
    <br><br>

    <label for="position">Job Position:</label>
    <select id="position" name="position" required>
        <option value="">Select Position</option>
        <option value="Database Administrator">Database Administrator</option>
        <option value="Web Developer">Web Developer</option>
        <option value="Software Engineer">Software Engineer</option>
        <option value="Network Engineer">Network Engineer</option>
    </select>
    <br><br>

    <label for="qualification">Educational Qualification:</label>
    <input type="text"id="qualification"name="qualification"required>
    <br><br>

    <label for="address">Address:</label><br>
    <textarea id="address"name="address"rows="5"cols="40"required></textarea>
    <br><br>

    <label for="cv">Upload CV:</label>
    <input type="file"id="cv"name="cv"accept=".pdf"required>
    <br><br>

    <button type="submit">Apply</button>

</form>

</body>
</html>