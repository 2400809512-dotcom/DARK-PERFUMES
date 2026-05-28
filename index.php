<?php
$xml = simplexml_load_file('perfume.xml');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Store - Fragrances for Every Occasion</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrap">
<h1>Perfume Store</h1>
<p class="tagline">Fragrances for every occasion</p>
<div class="intro">
<p>We sell quality perfumes for men and women. Each scent is picked to give you a lasting smell that fits your style. Browse our list below and find something you like.</p>
</div>
<h2>Our Perfumes</h2>

<?php foreach ($xml->perfume as $perf): ?>
<div class="product">
<h3>
    <?php echo htmlspecialchars($perf->name); ?>
</h3>
<p class="scent">
    <?php echo htmlspecialchars($perf->scent); ?>
</p>
<p class="price">UGX
     <?php echo number_format((float)$perf->price); ?>
</p>
<p class="desc">
    <?php echo htmlspecialchars($perf->description); ?>
</p>
</div>

<?php endforeach; ?>
<h2>Contact Us</h2>
<ul class="contact">
<li>Phone: +256 700 000 000</li>
<li>Email: info@perfumestore.ug</li>
<li>Location: Kampala, Uganda</li>
</ul>
<div class="footer">
<p>&copy; 
    <?php echo date('Y'); ?>
Perfume Store. All rights reserved.</p>
</div>

</div>
</body>
</html>