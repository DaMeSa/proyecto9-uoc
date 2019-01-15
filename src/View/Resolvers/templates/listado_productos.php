<div class="container">
    <?php
        if($contexto['productos'] == null){
           ?>
            <div>
                <p>No existen productos!</p>   
            </div>              
            <?php 
        }else{
            $productos = $contexto["productos"];

            foreach($producto as $productos){
            ?>
                <h2><?php echo $producto->getNombre();?></h2>
                <h3><?php echo $producto->getSubtitulo();?></h3>
                <p><?php echo $producto->getTexto(); ?></p>
            <?php
            }
        }
    ?>
</div>


