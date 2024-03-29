<!DOCTYPE html>
<html lang="en">

/* The `<head>` section in HTML is used to define metadata about the HTML document. In this specific
code snippet, the `<head>` section includes the following elements: */

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

/* The code snippet is defining the navigation bar (`<nav>`) for the webpage. */

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                /* The code snippet you provided is creating a navigation bar for a webpage. */
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./studentlisting" >Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./modulelisting">Modules</a>
                    </li>
                </ul>
            </div>
        </div>
   /* The code snippet you provided is defining the content of the webpage after the navigation bar. */
    </nav>
    <h1>Final Year Module Selector</h1>
    <p><a href="./studentlisting">Student List</a></p>
    <p><a href="./modulelisting">Module List</a></p>
</body>

</html>