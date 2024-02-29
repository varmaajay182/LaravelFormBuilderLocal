<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 27%; /* Adjust the width as needed */
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px; /* Adjust the margin as needed */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-bottom: 5px; /* Adjust the margin as needed */
            display: inline-block; /* Display checkboxes and radios inline */
        }

        label.checkbox-label {
            display: inline-block;
            margin-bottom: 10px; /* Adjust the margin as needed */
            margin-right: 10px; /* Add spacing between checkbox and label */
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <form action="/submit" method="post">
        <header>
            <h2>Form Header</h2>
        </header>

        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label>Interests:</label>
        <div>
            <input type="checkbox" id="interest1" name="interests[]" value="interest1">
            <label class="checkbox-label" for="interest1">Interest 1</label>
        </div>
        <div>
            <input type="checkbox" id="interest2" name="interests[]" value="interest2">
            <label class="checkbox-label" for="interest2">Interest 2</label>
        </div>
        <div>
            <input type="checkbox" id="interest3" name="interests[]" value="interest3">
            <label class="checkbox-label" for="interest3">Interest 3</label>
        </div>

        <label>Preferred Contact Method:</label>
        <div>
            <input type="radio" id="contactEmail" name="contactMethod" value="email" required>
            <label class="checkbox-label" for="contactEmail">Email</label>
        </div>
        <div>
            <input type="radio" id="contactPhone" name="contactMethod" value="phone" required>
            <label class="checkbox-label" for="contactPhone">Phone</label>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
  