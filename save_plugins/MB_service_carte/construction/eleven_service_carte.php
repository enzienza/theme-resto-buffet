<?php
/*
Name: Construction - MB_eleven_service_carte
Pluggin Parent: Service à la carte
Description: Construction de la Metabox : eleven_service_carte | Solution Provisoir
Author: Enza Lombardo
Author URI: www.enzalombardo.be
Copyright: 2019 © Enza Lombardo
Version: 1.5.1
*/



function MB_eleven_service_carte($POST){
    wp_nonce_field(basename(__FILE__), 'MB_eleven_service_carte_nonce');
    $SC11_titre    = get_post_meta($POST->ID, 'SC11_titre', true);

    /* --- ligne 1 --- */
    $SC11_L1_numb    = get_post_meta($POST->ID, 'SC11_L1_numb', true);
    $SC11_L1_nom     = get_post_meta($POST->ID, 'SC11_L1_nom', true);
    $SC11_L1_price   = get_post_meta($POST->ID, 'SC11_L1_price', true);

    /* --- ligne 2 --- */
    $SC11_L2_numb    = get_post_meta($POST->ID, 'SC11_L2_numb', true);
    $SC11_L2_nom     = get_post_meta($POST->ID, 'SC11_L2_nom', true);
    $SC11_L2_price   = get_post_meta($POST->ID, 'SC11_L2_price', true);

    /* --- ligne 3 --- */
    $SC11_L3_numb    = get_post_meta($POST->ID, 'SC11_L3_numb', true);
    $SC11_L3_nom     = get_post_meta($POST->ID, 'SC11_L3_nom', true);
    $SC11_L3_price   = get_post_meta($POST->ID, 'SC11_L3_price', true);

    /* --- ligne 4 --- */
    $SC11_L4_numb    = get_post_meta($POST->ID, 'SC11_L4_numb', true);
    $SC11_L4_nom     = get_post_meta($POST->ID, 'SC11_L4_nom', true);
    $SC11_L4_price   = get_post_meta($POST->ID, 'SC11_L4_price', true);

    /* --- ligne 5 --- */
    $SC11_L5_numb    = get_post_meta($POST->ID, 'SC11_L5_numb', true);
    $SC11_L5_nom     = get_post_meta($POST->ID, 'SC11_L5_nom', true);
    $SC11_L5_price   = get_post_meta($POST->ID, 'SC11_L5_price', true);

    /* --- ligne 6 --- */
    $SC11_L6_numb    = get_post_meta($POST->ID, 'SC11_L6_numb', true);
    $SC11_L6_nom     = get_post_meta($POST->ID, 'SC11_L6_nom', true);
    $SC11_L6_price   = get_post_meta($POST->ID, 'SC11_L6_price', true);

    /* --- ligne 7 --- */
    $SC11_L7_numb    = get_post_meta($POST->ID, 'SC11_L7_numb', true);
    $SC11_L7_nom     = get_post_meta($POST->ID, 'SC11_L7_nom', true);
    $SC11_L7_price   = get_post_meta($POST->ID, 'SC11_L7_price', true);

    /* --- ligne 8 --- */
    $SC11_L8_numb    = get_post_meta($POST->ID, 'SC11_L8_numb', true);
    $SC11_L8_nom     = get_post_meta($POST->ID, 'SC11_L8_nom', true);
    $SC11_L8_price   = get_post_meta($POST->ID, 'SC11_L8_price', true);

    /* --- ligne 9 --- */
    $SC11_L9_numb    = get_post_meta($POST->ID, 'SC11_L9_numb', true);
    $SC11_L9_nom     = get_post_meta($POST->ID, 'SC11_L9_nom', true);
    $SC11_L9_price   = get_post_meta($POST->ID, 'SC11_L9_price', true);

    /* --- ligne 10 --- */
    $SC11_L10_numb    = get_post_meta($POST->ID, 'SC11_L10_numb', true);
    $SC11_L10_nom     = get_post_meta($POST->ID, 'SC11_L10_nom', true);
    $SC11_L10_price   = get_post_meta($POST->ID, 'SC11_L10_price', true);


    ?>
    <div class="" style="margin-bottom: 2rem;">
        <label for="SC11_titre">Titre</label>
        <input class="widefat" type="text" id="SC11_titre" name="SC11_titre" value="<?php echo $SC11_titre; ?>">
    </div>

    <table class="table-service" width="100%">
        <thead>
            <tr>
                <th width="15%">Num.</th>
                <th width="60%">Nom</th>
                <th width="15%">Prix</th>
            </tr>
        </thead>

        <tbody>
            <!-- ligne 1 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L1_numb" name="SC11_L1_numb" value="<?php echo $SC11_L1_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L1_nom" name="SC11_L1_nom" value="<?php echo $SC11_L1_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L1_price" name="SC11_L1_price" value="<?php echo $SC11_L1_price; ?>"></td>
            </tr>

            <!-- ligne 2 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L2_numb" name="SC11_L2_numb" value="<?php echo $SC11_L2_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L2_nom" name="SC11_L2_nom" value="<?php echo $SC11_L2_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L2_price" name="SC11_L2_price" value="<?php echo $SC11_L2_price; ?>"></td>
            </tr>

            <!-- ligne 3 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L3_numb" name="SC11_L3_numb" value="<?php echo $SC11_L3_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L3_nom" name="SC11_L3_nom" value="<?php echo $SC11_L3_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L3_price" name="SC11_L3_price" value="<?php echo $SC11_L3_price; ?>"></td>
            </tr>

            <!-- ligne 4 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L4_numb" name="SC11_L4_numb" value="<?php echo $SC11_L4_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L4_nom" name="SC11_L4_nom" value="<?php echo $SC11_L4_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L4_price" name="SC11_L4_price" value="<?php echo $SC11_L4_price; ?>"></td>
            </tr>

            <!-- ligne 5 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L5_numb" name="SC11_L5_numb" value="<?php echo $SC11_L5_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L5_nom" name="SC11_L5_nom" value="<?php echo $SC11_L5_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L5_price" name="SC11_L5_price" value="<?php echo $SC11_L5_price; ?>"></td>
            </tr>

            <!-- ligne 6 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L6_numb" name="SC11_L6_numb" value="<?php echo $SC11_L6_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L6_nom" name="SC11_L6_nom" value="<?php echo $SC11_L6_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L6_price" name="SC11_L6_price" value="<?php echo $SC11_L6_price; ?>"></td>
            </tr>

            <!-- ligne 7 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L7_numb" name="SC11_L7_numb" value="<?php echo $SC11_L7_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L7_nom" name="SC11_L7_nom" value="<?php echo $SC11_L7_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L7_price" name="SC11_L7_price" value="<?php echo $SC11_L7_price; ?>"></td>
            </tr>

            <!-- ligne 8 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L8_numb" name="SC11_L8_numb" value="<?php echo $SC11_L8_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L8_nom" name="SC11_L8_nom" value="<?php echo $SC11_L8_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L8_price" name="SC11_L8_price" value="<?php echo $SC11_L8_price; ?>"></td>
            </tr>

            <!-- ligne 9 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L9_numb" name="SC11_L9_numb" value="<?php echo $SC11_L9_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L9_nom" name="SC11_L9_nom" value="<?php echo $SC11_L9_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L9_price" name="SC11_L9_price" value="<?php echo $SC11_L9_price; ?>"></td>
            </tr>

            <!-- ligne 10 -->
            <tr>
                <td><input class="widefat" type="text" id="SC11_L10_numb" name="SC11_L10_numb" value="<?php echo $SC11_L10_numb; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L10_nom" name="SC11_L10_nom" value="<?php echo $SC11_L10_nom; ?>"></td>
                <td><input class="widefat" type="text" id="SC11_L10_price" name="SC11_L10_price" value="<?php echo $SC11_L10_price; ?>"></td>
            </tr>


        </tbody>
    </table>

    <?php

} // END => MB_type_cartes
