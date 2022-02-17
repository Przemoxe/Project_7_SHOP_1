<?php
        /*
        Template name: ajax
         */


//          Z Archive page wyjebac wszystko oprocz container
//         robisz partials produkt column i tam html jednego malego produkciku
//         w javascript ustawiasz urla ajax-get-products?product-per-page=zmienna1
//         w ajax.php pobierasz getem jak ponizej xd, zmienna1 i odfiltrowywujesz produkty do ilosci wyswietlanych postow, 
//         ustawiasz na scrolla funckje 

//      js
//         funckja wez12prod();
  //baseurl + ?action=products&perpage=12

// onscroll wez12prod();

// wez12prod{
  //?action=products&perpage=12
	
// }

      $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
            );
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();
                wc_get_template_part( 'content', 'product' );
            endwhile;
        } else {
            echo __( 'No products found' );
        }

        ?>

        <script>
xhttp.open("POST", urlPost, true);
        xhttp.setRequestHeader(
            "X-CSRF-TOKEN",
            document.querySelector("#csrftoken").value
        );
        xhttp.setRequestHeader("Content-type", "application/json");

        xhttp.send(JSON.stringify(data));
        </script>