<!DOCTYPE html>
<html>
<head>
    <title>Activator Recruitment Form</title>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        margin: 0;
        padding: 15px;
    }

    .container {
        width: 100%;
        max-width: 600px;
        margin: 40px auto;
        background: #fff;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        font-size: 22px;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 15px;
        margin-bottom: 5px;
        color: #333;
        font-size: 14px;
    }

    input, textarea {
        width: 100%;
        padding: 12px;
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
        font-size: 12px;
        color: #777;
        margin-top: 10px;
    }

    /*  MOBILE OPTIMIZATION */
    @media (max-width: 600px) {
        .container {
            margin: 15px auto;
            padding: 18px;
            border-radius: 8px;
        }

        h2 {
            font-size: 18px;
        }

        input, textarea {
            font-size: 16px;
        }

        button {
            font-size: 15px;
        }
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