<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
    <link rel="stylesheet" href="Styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans&display=swap');

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: auto;
            margin: 0;
            background: linear-gradient(rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.2)), url('https://images.unsplash.com/photo-1514890084135-f16d926f4d03?crop=entropy&cs=tinysrgb&fm=jpg&ixid=MnwzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2NTc4NzU4NzE&ixlib=rb-1.2.1&q=80');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
            font-size: 1.2rem;
            line-height: 1.618;
            color: rgb(255, 255, 255);
        }

        h1 {
            font-size: 2rem;
            font-family: 'Merriweather', serif;
            text-transform: uppercase;
        }

        h1,
        p {
            margin: 1em auto;
            text-align: center;
        }

        form {
            width: 60vw;
            max-width: 500px;
            min-width: 300px;
            margin: 0 auto;
            padding-bottom: 2em;
        }

        fieldset {
            border: none;
            padding: 1.2rem 0;
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            display: block;
            margin: 0.5rem 0;
        }

        .inline {
            width: unset;
            margin: 0 0.5em 0 0;
            vertical-align: middle;
        }

        input,
        textarea,
        select {
            margin: 7px 0 0 15px;
            width: 100%;
            min-height: 2em;
        }

        select,
        .room {
            width: 7rem;
            padding: 5px;
            border: none;
            background-color: rgba(255, 255, 255);
            box-shadow: rgba(0, 0, 0, .1) 0 0 8px;
        }

        select {
            position: relative;
            border-radius: 5px;
            display: inline-block;
        }

        input,
        textarea {
            border: none;
            border-radius: 5px;
            color: rgba(10, 10, 35, 0.7);
        }

        input[type="submit"] {
            display: block;
            width: 60%;
            margin: 1em auto;
            height: 2em;
            font-size: 1.1rem;
            background-color: #3b3b4f;
            border-color: white;
            min-width: 300px;
            color: inherit;
        }
    </style>
</head>

<body>
    <h1>Book Online Now</h1>
    <p>Please fill out this form with the required information</p>
    <form action="/book_data" method="POST">
        <?php echo csrf_field(); ?>
        <fieldset>
            <label>First Name
                <input type="text" name="fname" value="<?php echo e(session('user')); ?>" required /></label>
            <label>Last Name
                <input type="text" name="lname" required />
            </label>
            <label>Email
                <input type="email" name="email" value="<?php echo e(session('email')); ?>" required />
            </label>
            <label>Phone Number
                <input type="text" name="phone" required />
            </label>
            <label>Address
                <input type="text" name="address" required />
            </label>
            <label>Room Name
                <input type="text" name="room_name" value="<?php echo e($data['room_name']); ?>" readonly />
            </label>
            <label>Price
                <input type="text" name="room_price" value="<?php echo e($data['price']); ?>" readonly />
            </label>
            <label>Check-in Date
                <input type="date" name="check_in" min="<?php echo e(date('Y-m-d')); ?>"  required />
            </label>
            <label>Check-out Date
                <input type="date" name="check_out" required />
            </label>
        </fieldset>
        <fieldset>

            <label>Adult's   <input type="number" name="adult" min="1" max="120"
                    class="room" /><br>
            <label>Children's <input type="number" name="child" min="0" max="120"
                    class="room" /><br>    
            </label><br>
                <label>Additional Requests
                    <textarea name="additional" rows="5" cols="30" placeholder="Your message ..."></textarea>
                </label>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\Hotel_Managment\resources\views/booking.blade.php ENDPATH**/ ?>