<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<div class="container-background-my-account">
  <div class="container h-100 d-flex flex-column justify-content-end">
    <div class="row">
      <div class="col-md-6 col-user text-white">
        <h1>
          <?php
            $current_user = wp_get_current_user();
            echo $current_user->display_name;
          ?>
        </h1>
      </div>
      <div class="col-md-6 col-logout d-flex align-items-center justify-content-end">
        <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Wyloguj</a>
      </div>
    </div>
  </div>
</div>
<div class="container container-my-account">
  <div class="row pt-5 pb-5">
    <div class="col-md-3 col-nav pb-3">
      <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profil</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Zamówienia</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Adresy</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Płatności</button>
      </div>
    </div>
    <div class="col-md-9 col-my-account-content">
      <div class="tab-content ps-md-4" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <?php require get_template_directory() . '/woocommerce/myaccount/form-edit-account.php';  ?>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <?php require get_template_directory() . '/woocommerce/myaccount/orders.php';  ?>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <?php require get_template_directory() . '/woocommerce/myaccount/my-address.php';  ?>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <?php require get_template_directory() . '/woocommerce/myaccount/payment-methods.php';  ?>
        </div>
      </div>
    </div>
  </div>
<div class="d-flex align-items-start">

</div>



<?php do_action( 'woocommerce_after_account_navigation' ); ?>
