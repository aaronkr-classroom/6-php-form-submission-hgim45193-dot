<?php
// check-for-http-getTODO.php
include 'includes/header.php'; ?>

<?php
$submitted = $_GET['sent'] ?? '';
if ($submitted == 'search') {
    $term = $_GET['term'] ?? '';
    echo 'You search for ' . htmlspecialchars($term);
} else { ?>
    <form action="check-for-http-get.php" method="GET">
        Search for: <input type="search" name="term" />
        <inpur type="submit" name="sent" value="search" />
    </form>
<?php } ?>

?>

<?php include 'includes/footer.php'; ?> 