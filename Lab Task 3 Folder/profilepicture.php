<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
</head>
<body>

<h2>Profile Picture</h2>

<a target="_blank" href="myimage.jpg">
  <img src="myimage.jpg" alt="Forest" style="width:150px">
</a>
<tr>
	<br>
<input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"></br>
</tr>
<tr>
	<br>
<input type =  "submit" id = "btn" value = "Submit" /> </br></tr>

</body>
</html>