<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  {{-- load css file --}}
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&family=Rubik+Distressed&display=swap");

    body {
      font-family: "Poppins", sans-serif;
    }

    .navbar a {
      color: #e0e0e0;
      font-weight: 600;
    }

    .navbar a:hover {
      color: #fff;
    }

    /* Jumbotron */
    #home h1 {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 800;
      font-size: 56px;
      line-height: 66px;
      letter-spacing: 1.2px;
      text-transform: capitalize;
    }

    #home p {
      font-style: normal;
      font-weight: 400;
      font-size: 20px;
      line-height: 23px;
      letter-spacing: 0.2px;
    }

    #home .wrap {
      margin-top: 200px;
    }

    #home .img {
      width: 750px;
      height: 500px;
    }

    /* Add Page */
    #form {
      padding-top: 50px;
      padding-bottom: 50px;
    }

    #form .add {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 700;
      font-size: 32px;
      line-height: 38px;
    }

    #form .tambahp {
      font-family: "Poppins";
      font-style: normal;
      font-weight: 400;
      font-size: 16px;
      line-height: 19px;
      color: #757575;
    }

    #form form {
      margin-top: 50px;
    }

    #form label,
    input, select {
      display: block;
    }

    #form label {
      font-size: 20px;
      line-height: 24px;
      letter-spacing: 1.2px;
      margin-top: 30px;
    }


    #form input, select {
      width: 1000px;
      height: 50px;
      border: 1px solid #757575;
      border-radius: 8px;
      margin-top: 20px;
      padding-left: 10px;
      padding-right: 10px;
    }

    #form textarea {
      width: 1000px;
      border: 1px solid #757575;
      border-radius: 8px;
      padding: 20px;
      margin-top: 20px;
    }

    
  </style>
</head>

<body>
  @include('layouts.adminPage.navbar')

  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>
