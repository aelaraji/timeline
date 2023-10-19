<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <title><?= $title ?></title>
</head>
<body>

<header>
    <p>
        🧶 <a href="/">Timeline</a> for
        <a href="http://localhost:8000/?twts=http://darch.dk/twtxt.txt">sorenpeter</a>@darch.dk
        (<a href="http://localhost:8000/twtxt.txt">twtxt.txt</a>)
    </p> 
    <nav>
        <!-- TODO: make automatic via PHP and show avatar as well -->
        <ul class="secondary">
            <li><a href="/refresh?url=<?= $url ?>">Refresh</a></li>
            <li><a href="/following">Following <?php // echo count($twtFollowingList); ?></a></li>            
            <?php //if ($validSession) {  // TODO: Make login seqcure ?>
            <?php if( isset($_SESSION['password'])) { /*
                if($_SESSION['password']=="$password") {*/ // Hacky login ?>   
                <!-- <li><a href="/new">New post</a></li> -->
                <li><a href="/add">Add feed</a></li>
                <!-- <li><a href="/admin">Settings</a></li> -->
                <li><a href="/logout">Log Out</a></li>
            <?php /*}*/ } else { ?>
                <li><a href="/login">Log in</a></li>
            <?php }  ?>
                <!-- <li><?php //include 'partials/listSelect.php'; ?></li> -->

        </ul>
    </nav>
</header>

<main>