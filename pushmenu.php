<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
  position: absolute;
  left: -80px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 20px;
  background-color: #4CAF50;
}

#blog {
  top: 80px;
  background-color: #2196F3;
}

#projects {
  top: 140px;
  background-color: #f44336;
}

#contact {
  top: 200px;
  background-color: #555
}

h2{
	margin-bottom: 90px;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="#" id="about">Users</a>
  <a href="#" id="blog">Restaurants</a>
  <a href="#" id="projects">Offers</a>
  <a href="#" id="contact">Settings</a>
</div>

<div style="margin-left:80px;">
  <h2>Menu</h2>
</div>
   
</body>
</html> 
