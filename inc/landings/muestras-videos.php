<div id="muestras-videos-carousel" class="owl-carousel" role="region" aria-label="Carrusel de videos informativos de <?= $autor ?> del curso <?= $nombredelcurso ?>">
    <?php for ($i = 0; $i < count($videos); $i++) { ?>
        <lite-vimeo videoid="<?= $videos[$i] ?>" title="Tip <?= $i+1 ?> de <?= $autor ?>" aria-label="Tip <?= $i + 1 ?> de <?= $autor ?>" itemscope itemtype="https://schema.org/VideoObject">
            <meta itemprop="name" content="Tip <?= $i + 1 ?> de <?= $autor ?>">
            <meta itemprop="description" content="Píldora informativa <?= $i + 1 ?> de <?= $autor ?> del curso <?= $nombredelcurso ?>">
            <meta itemprop="thumbnailUrl" content="https://vumbnail.com/<?= $videos[$i] ?>.jpg">
            <meta itemprop="contentUrl" content="https://vimeo.com/<?= $videos[$i] ?>">
        </lite-vimeo>
    <?php } ?>
</div>