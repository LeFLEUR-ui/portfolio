<?php

$siteTitle = "Marvin Fabricante — Java Developer & .NET Developer";
$description = "Self-taught full-stack developer with a focus on backend development using Java EE,
 Spring Framework, and .NET. Skilled in building scalable, maintainable applications through clean architecture,
  microservices, and design patterns to deliver exceptional results.";
  

?>

<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="http://localhost/dashboard/images/xampp-logo.svg" type="image/gif" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <title><?php echo $siteTitle; ?></title>
  </head>
  <body>
    <main>
      <section class="navbar">
        <?php include 'components/navbar.php'; ?>
      </section>

        <section class="main-container">
            <?php include 'components/aboutMe.php'; ?>
        </section>

        <section class="marquee-1">
            <?php include 'components/marquee1.php'; ?>
        </section>
    
        <section class="services">
            <?php include 'components/services.php'; ?>
        </section>

        <section class="marquee-2">
            <?php include 'components/marquee2.php'; ?>
        </section>

        <section class="educational-background">
            <?php include 'components/education.php'; ?>
        </section>

        <section class="marquee-3">
            <?php include 'components/marquee3.php'; ?>
        </section>
    </main>
    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </body>
</html>
