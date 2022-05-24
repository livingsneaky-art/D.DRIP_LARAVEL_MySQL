<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  display: flex;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  color: white;
  padding: 14px 20px;
  text-decoration: none;
  text-align: center;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 25%;
  background-color: #DC3644;
  padding: 20px;
  border: 1px solid black;
  color: white;
}

/* Main column */
.main {
  flex: 75%;
  background-color: #DC3644;
  padding: 20px;
  border-radius: 25px;
  border: 1px solid black;
}
.sectionColor1 {
    background-color: #aaa;
    border: 1px solid black;
    text-align: center;
    padding: 20px;
    
}

.sectionColor2 {
    background-color: white;
    border: 1px solid black;
    text-align: right;
    padding: 20px;
    

}
/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
  text-align: center;
  margin: 20,20,20,20;
}

.fakeimg1 {
  background-color: #aaa;
  width: auto;
  padding: 20px;
  text-align: center;
  border-radius: 25px;
  

  
}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 700px) {
  .row, .navbar {   
    flex-direction: column;
  }
}
</style>
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
   
    
    <!-- The flexible grid (content) -->
    <div class="row">
        <div class="side">
        <section class="sectionColor1">
            <a  href="#">D.DRIP</a>
            </section>
            <br>
            <div class="fakeimg1" style="height:60px;">Dashboard</div><br>
            <div class="fakeimg1" style="height:60px;">User Management</div><br>
            <div class="fakeimg1" style="height:60px;">Inventory</div>
        </div>
        <div class="main">
            <section class="sectionColor2" style="padding-right: 20px ">
            <input type="text" name="search" value="SEARCH">
            <a  href="#">D.DRIP</a>
            </section>
        
            <div class="fakeimg" style="background-color: white; height:750px;">
            @yield('body')
            Image</div>
            
        
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
    <h2>Footer</h2>
    </div>

</body>
</html>
