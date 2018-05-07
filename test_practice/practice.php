<!doctype html>
<head>
<meta charset=utf-8>
<title>Meeting Rooms Everywhere</title>
</head>

<body>

<h1>Meeting Rooms Everywhere</h1>
<p>Welcome to the Meeting Rooms Everywhere, please specify your meeting room needs to make a reservation.</p>

<form method="post" action="reservation.php">
    <p>
    <fieldset>
        <legend>Contact Information</legend>
            <label for="name" accesskey="n">Name</label>
        	<!-- name is for PHP / id is for JavaScript and CSS -->
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="lastname" accesskey="l">Lastname</label>
            <input type="text" name="lastname" id="lastname" required>
    </fieldset>
    </p>
    <p>
    <fieldset>
        <legend>Reservation Options</legend>
        
        Rates
        <table>
		<tr>
			<td>Room Size</td>
			<td>Cost per hour</td>
		</tr>
        <tr>
			<td>Small</td>
			<td>$100.00</td>
		</tr>
        <tr>
			<td>Medium</td>
			<td>$75.00</td>
		</tr>
        <tr>
			<td>Large</td>
			<td>$100.00</td>
		</tr>
		</table>
        
        <br>
        <label for="city" accesskey="c">Select your meeting room location</label>
        <!-- DROPDOWN use when only 1 out of more than 3 values need to be selected -->
        <select name="city" id="city" required>
            <optgroup label="USA">
                <option value="New York City">New York City
                <option value="Los Angeles">Los Angeles
                <option value="Houston">Houston
            </optgroup>
    
            <optgroup label="Canada">
                <option value="Toronto">Toronto
                <option value="Vancouver">Vancouver
                <option value="Calgary">Calgary
                <option value="Edmonton">Edmonton
            </optgroup>
            
            <optgroup label="Mexico">
                <option value="Mexico City">Mexico City
                <option value="Guadalajara">Guadalajara
                <option value="Monterrey">Monterrey
            </optgroup>
        </select>
        <br>
        <br>
        <label for="size" accesskey="s">Select meetig room size</label>
        <select name="size" id="size" required>
        	<option value="Small">Small
            <option value="Medium">Medium
            <option value="Large">Large
        </select>
        <br><br>
        <!-- DATE -->
        <label for="date" accesskey="d">Select a reservation date</label>
        <input type="date" name="date" id="date" required>
        <br><br>
        <!-- TIME make it increase in 0.5 hrs -->
        <label for="time" accesskey="t">Select time of the day</label>
        <select name="time" id="time" required>
        	<option value="Morning">Morning
        	<option value="Afternoon">Afternoon
        	<option value="Evening">Evening
        </select>
        <br><br> 
        <label for="hours" accesskey="h">How many hours</label>
        <input type="number" name="hours" id="hours" min="0.5" max="12" step="0.5" value="0.5" required>
        
    </fieldset>
    </p>
    <!-- SUBMIT BUTTON  -->
    <input type="submit" value="Reserve">
</form>



</body>
</html>