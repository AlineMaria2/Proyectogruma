<?php $carrito = $this->session->userdata('carrito'); if (!$carrito) $carrito = []; $total_general = 0; ?>

<div class="container" style="margin-top: 150px; margin-bottom: 80px; padding: 0 40px;">

    <h2 style="color: #007A3D; margin-bottom: 30px; font-size: 26px;">
        <i class="fa-solid fa-cart-shopping"></i> Mi Carrito
    </h2>

    <?php if (!empty($carrito)): ?>

    <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">

        <!-- PRODUCTOS -->
        <div style="flex: 1; min-width: 300px;">

            <div style="background: white; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); padding: 25px;">
                <h3 style="color: #007A3D; margin-bottom: 20px; font-size: 16px;">Productos</h3>

                <?php foreach ($carrito as $item): 
                    $subtotal = $item['precio'] * $item['cantidad'];
                    $total_general += $subtotal;
                ?>
                <div style="display: flex; align-items: center; gap: 15px; padding: 15px 0; border-bottom: 1px solid #f0f0f0;">

                    <input type="checkbox" checked style="width: 18px; height: 18px; accent-color: #007A3D;">

                    <img src="<?= base_url('assets/img/productos/'.$item['imagen']) ?>" 
                         style="width: 80px; height: 80px; object-fit: contain; border-radius: 8px; background: #f9f9f9; padding: 5px;">

                    <div style="flex: 1;">
                        <p style="font-weight: 600; color: #1a1a1a; margin: 0 0 5px;"><?= $item['nombre'] ?></p>
                        <p style="color: #007A3D; font-size: 20px; font-weight: bold; margin: 0;">
                            $<?= number_format($item['precio'], 2) ?>
                        </p>
                        <p style="color: #888; font-size: 13px; margin: 4px 0 0;">
                            Cantidad: <?= $item['cantidad'] ?>
                        </p>
                    </div>

                    <form method="POST" action="<?= base_url('productos/eliminar_carrito') ?>">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <button type="submit" style="background: none; border: none; cursor: pointer; color: #aaa; font-size: 18px;">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </div>
                <?php endforeach; ?>

            </div>

            <div style="background: white; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); padding: 20px; margin-top: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span style="font-weight: 600; color: #333;">Envío</span>
                    <span style="color: #007A3D; font-weight: bold;">Gratis</span>
                </div>
            </div>

        </div>

        <!-- RESUMEN -->
        <div style="width: 280px;">
            <div style="background: white; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); padding: 25px; position: sticky; top: 120px;">

                <h3 style="color: #333; margin-bottom: 20px; font-size: 16px;">Resumen de compra</h3>

                <div style="display: flex; justify-content: space-between; margin-bottom: 12px; font-size: 14px; color: #555;">
                    <span>Productos (<?= count($carrito) ?>)</span>
                    <span>$<?= number_format($total_general, 2) ?></span>
                </div>

                <div style="display: flex; justify-content: space-between; margin-bottom: 20px; font-size: 14px; color: #555;">
                    <span>Envío</span>
                    <span style="color: #007A3D; font-weight: bold;">Gratis</span>
                </div>

                <div style="display: flex; justify-content: space-between; font-size: 17px; font-weight: bold; color: #1a1a1a; border-top: 1px solid #f0f0f0; padding-top: 15px; margin-bottom: 20px;">
                    <span>Total</span>
                    <span>$<?= number_format($total_general, 2) ?></span>
                </div>

                <button style="width: 100%; padding: 13px; background: #007A3D; color: white; border: none; border-radius: 8px; font-size: 15px; font-weight: bold; cursor: pointer;">
                    Continuar (<?= count($carrito) ?>)
                </button>

            </div>
        </div>

    </div>

    <?php else: ?>

    <div style="text-align: center; padding: 80px 20px; background: white; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08);">
        <i class="fa-solid fa-cart-shopping" style="font-size: 60px; color: #ddd; margin-bottom: 20px;"></i>
        <h3 style="color: #aaa; margin-bottom: 10px;">Tu carrito está vacío</h3>
        <a href="<?= base_url('productos') ?>" style="display: inline-block; margin-top: 15px; padding: 12px 30px; background: #007A3D; color: white; border-radius: 8px; text-decoration: none; font-weight: bold;">
            Ver Productos
        </a>
    </div>

    <?php endif; ?>

</div>