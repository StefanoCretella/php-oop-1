<main>
    <ul>
        <?php foreach ($movies as $movie): ?>
            <li style="list-style-type: none; margin-bottom: 20px;">
                <div>
                    <?php if ($movie->title === "Inception"): ?>
                        <img src="img/inception.jpg" alt="Inception" width="200" height="200" style="margin-bottom: 10px;">
                    <?php elseif ($movie->title === "Pulp Fiction"): ?>
                        <img src="img/pulp fiction.jpg" alt="Pulp Fiction" width="200" height="200" style="margin-bottom: 10px;">
                    <?php elseif ($movie->title === "The Godfather"): ?>
                        <img src="img/the godfather.jpg" alt="The Godfather" width="200" height="200" style="margin-bottom: 10px;">
                    <?php endif; ?>
                    <h2><?php echo $movie->title; ?></h2>
                    <p><strong>Regista:</strong> <?php echo $movie->director; ?></p>
                    <p><strong>Anno:</strong> <?php echo $movie->year; ?></p>
                    <p><strong>Generi:</strong> <?php echo implode(", ", $movie->genres ?? []); ?></p>
                    <p><strong>Attori:</strong> <?php echo implode(", ", array_map(fn($actor) => $actor->getFullName(), $movie->actors ?? [])); ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
