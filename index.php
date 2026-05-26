<!DOCTYPE html>
<html>
<head>
    <title>Activator Recruitment Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
        }

        input:focus, textarea:focus {
            border-color: #007bff;
        }

        textarea {
            resize: none;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        .note {
            text-align: center;
            font-size: 13px;
            color: #777;
            margin-top: 10px;
        }
    </style>

</head>
<body>

<div class="container">

    <h2>Geneith Health Competition<br>Activator Recruitment</h2>

    <form action="submit.php" method="POST">

        <label>Full Name</label>
        <input type="text" name="fullname" required>

        <label>WhatsApp Number</label>
        <input type="text" name="whatsapp" required>

        <label>State & LGA</label>
        <input type="text" name="location" required>

        <label>Why are you interested in becoming an Activator?</label>
        <textarea name="reason" rows="5" required></textarea>

        <button type="submit">Submit Application</button>

    </form>

    <div class="note">
        Please ensure all information is correct before submitting.
    </div>

</div>

</body>
</html>