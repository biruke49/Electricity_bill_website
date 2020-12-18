
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="shortcut icon" type="image/x-icon" href="logo.jpg">
	<script src="https://kit.fontawesome.com/36dca2c339.js" crossorigin="anonymous"></script>
  <style type="text/css">
  
  </style>
</head>

<body> 
<h1>Welcome </h1>
<div id="firebaseui-auth-container"></div>
<div id="loader" class="loadd">Loading...</div> 



	<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.1.2/firebase-analytics.js"></script>

<script src="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.js"></script>
<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />


<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyB2GGAA-f1TadVXuVMXsT4ZcMnIU-YaI9Y",
    authDomain: "elpa2-46d16.firebaseapp.com",
    databaseURL: "https://elpa2-46d16-default-rtdb.firebaseio.com",
    projectId: "elpa2-46d16",
    storageBucket: "elpa2-46d16.appspot.com",
    messagingSenderId: "680254308610",
    appId: "1:680254308610:web:335bcdfc32490e3e8ec21b",
    measurementId: "G-8KPHWTQN4P"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="login.js"></script>

</body>
</html>