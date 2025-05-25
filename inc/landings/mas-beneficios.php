<section id="mas-beneficios" aria-labelledby="benefits-heading" itemscope itemtype="http://schema.org/ItemList">
    <h3 id="benefits-heading">
        Cuando sumas <u>TODOS</u> tus BENEFICIOS...
    </h3>

    <div class="back540">
        <meta itemprop="itemListOrder" content="Unordered">
        <meta itemprop="numberOfItems" content="<?= count($masBeneficios) ?>">

        <?php foreach ($masBeneficios as $index => $benefit): ?>
        <div itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <meta itemprop="position" content="<?= $index + 1 ?>">
            <p>
                <?= $benefit ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</section>