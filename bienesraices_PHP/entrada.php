

<?php 
    require 'include/funciones.php';

   
    incluirTemplete('header');
    ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Casa con Piscina</h1>
       
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
        </picture> 
        <p class="informacion-meta">Escrito el <span>5/2/2023</span> por <span>Alejandro</span> </p>
        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra, risus vitae auctor maximus, lacus
                elit mollis tortor, eget volutpat erat est efficitur leo. Quisque ac tellus faucibus, tincidunt lacus a,
                aliquet massa. Vestibulum tortor nulla, egestas vel ultricies ut, cursus vel magna. Duis tempus ligula
                orci, a maximus felis pretium tempus. Ut eget ipsum arcu. Praesent at eros nunc. Vestibulum pretium
                auctor turpis quis hendrerit.

                Suspendisse sed malesuada nibh. Proin mollis, dolor sodales viverra pharetra, metus neque porttitor
                lorem, sit amet elementum lectus tellus eget ex. Mauris turpis justo, congue placerat fringilla eu,
                imperdiet a libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Vivamus pellentesque efficitur dolor, ut vestibulum nibh imperdiet id. In ante ante, vestibulum at
                rutrum ac, eleifend sit amet ipsum. In at velit vel sapien mattis convallis vel nec lectus.

                Sed pharetra tellus sed lacus semper, et rutrum tortor tempus. Duis et eros felis. Donec lobortis ex nec
                auctor placerat. Phasellus in nunc at nisi faucibus egestas. Fusce justo odio, ornare sit amet
                condimentum et, suscipit eget mi. Etiam a semper odio. Proin pharetra quam id posuere lacinia. Sed
                facilisis orci eget volutpat placerat. Aliquam arcu ipsum, feugiat et vulputate sed, mattis et lectus.
                Nullam tincidunt mauris nec imperdiet varius. Donec condimentum orci vel congue maximus. Fusce arcu
                lacus, rutrum id sapien quis, cursus viverra elit. Vestibulum in cursus velit, sit amet malesuada eros.
                Donec laoreet efficitur sapien, sed hendrerit nulla fringilla in.

                Sed nec dictum ligula, eget venenatis tortor. Aliquam erat volutpat. Nunc eget fringilla dui, iaculis
                tincidunt mauris. Nullam varius malesuada mi venenatis sodales. In pulvinar nisl vel rhoncus bibendum.
                Nunc bibendum rutrum nulla ut venenatis. Vivamus ultricies, ante eget efficitur maximus, nisl ipsum
                ultricies nibh, at pretium est lacus sit amet urna. Quisque a maximus sapien. Donec aliquam urna non
                metus lacinia convallis. Quisque bibendum viverra lorem, interdum pellentesque erat aliquam quis.
                Suspendisse nisl justo, luctus in euismod nec, congue in sem.</p>
        </div>

    </main>
    <?php 
    incluirTemplete('footer');
    ?>