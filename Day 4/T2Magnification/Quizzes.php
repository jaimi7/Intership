<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
    <title>Jaimi Knowlage School</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php
        include 'Header.php';
        include 'Menu.php';
    ?>
    <div id="intro"><div id="intro2"><div id="intro3">
                <h2>IT Quizzesx</h2>
                <ul>
                    <li>HTML Quizzes</li>
                    <li style="left: 20px;">CSS Quizzes</li>
                    <li style="left: 40px;">Javascript Quizzes</li>
                    <li style="left: 60px;">PHP Quizzes</li>
                </ul>
                <div id="button"> <a href="#">Find Out More</a> </div>
    </div></div></div>    
    <div id="main">	             	                      
        <?php
            include 'Content.php';
            include 'Sidebar.php';
            include 'Overview.php';
        ?>    
    </div>
    <?php
        include 'Footer.php';
    ?>
</body>
</html>