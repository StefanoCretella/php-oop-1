<main>
    <ul>
        <?php foreach ($movies as $movie): ?>
            <li>
                <?php echo $movie->getMovieInfo(); ?>
                <?php if ($movie->title === "Inception"): ?>
                    <br>
                    <img src="img/inception.jpg" alt="Inception" width="200" height="200">
                <?php elseif ($movie->title === "Pulp Fiction"): ?>
                    <br>
                    <img src="img/pulp fiction.jpg" alt="Pulp Fiction" width="200" height="200">
                <?php elseif ($movie->title === "The Godfather"): ?>
                    <br>
                    <img src="img/the godfather.jpg" alt="The Godfather" width="200" height="200">
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</main>

