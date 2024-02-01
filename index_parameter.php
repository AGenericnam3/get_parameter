<?php
    print_r($_GET);
    print_r($_POST);
    // Get input parameters
    $firstname = htmlspecialchars($_GET['first']);
    $lastname = htmlspecialchars($_GET['last']);
    $age = intval($_GET['age']);

    //Filter and sanatize input paramaters
    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING);

    // Output name
    if (!empty($firstname) && !empty($lastname)) {
        echo "<p>Hello, my name is $firstname $lastname.</p>";
    // Output age-related statement
    if ($age !== null) {
        echo "<p>";
    if ($age >= 18) {
         echo "I am old enough to vote in the United States.";
    } else {
        echo "I am not old enough to vote in the United States.";
    }
    echo "</p>";

    // Calculate days based on age
    $days = $age * 365;
    echo "<p>I have been alive for approximately $days days.</p>";
    } else {
        echo "<p>Please provide your age as a parameter.</p>";
    }
    } else {
        echo "<p>Please provide both first name and last name as parameters.</p>";
    }

    // Output current date
    echo "<p>Today's date is " . date("Y-m-d") . ".</p>";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Get Parameter Assignment</title>
		<!-- Css style -->
		<style>
			html {
				font-family: Arial, sans-serif;
				background: linear-gradient(red, white, blue) no-repeat;
                height: 100%;
				padding: 20px;
			}
			.output {
				margin-top: 20px;
			}
		</style>
    </head>

	<body>
        <h1>Are you old enough to vote?</h1>
        <form> 
            <label for="first">First Name: </label>
            <input type="text" id="first" name="first" autocomplete="off"><br>
            <label for="last">Last Name: </label>
            <input type="text" id="last" name="last" autocomplete="off"><br>
            <label for="age">Age: </label>
            <input type="text" id="age" name="age" autocomplete="off"><br>
            <div>
            <button type="submit">Submit</button>
            <button type="submit" formmethod="post">Submit Using Post</button>
            <button type="reset">Reset</button>
            </div>
        </form>

	</body>
</html>