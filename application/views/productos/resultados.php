<div class="container" style="margin-top: 150px;">
    <h2>Resultados para: "<?= $busqueda ?>"</h2>

    <?php if (!empty($resultados_historia)): ?>
        <div style="margin-top: 30px;">
            <h3 style="color: #002d72;">Encontrado en Historia</h3>
            <?php foreach ($resultados_historia as $h): ?>
                <div style="border-left: 5px solid #ffda00; padding: 15px; background: #f9f9f9; margin-bottom: 15px;">
                    <h4><?= $h->titulo ?></h4>
                    <a href="<?= base_url('productos/conocenos#seccion-'.$h->id) ?>" style="color: #00833e; font-weight: bold;">
                        Ir a este momento de la historia →
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if (empty($resultados_historia) && empty($resultados_productos)): ?>
        <p>No se encontraron coincidencias. Intenta con otra palabra.</p>
    <?php endif; ?>
</div>