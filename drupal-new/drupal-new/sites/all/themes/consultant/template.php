<?php

function consultant_form_alter(&$form, &$form_state, $form_id) {
  if ($form['#id'] == 'user-login-form') {
    //dpm($form);
    $form['name']['#title'] = t("Log In:");
    $form['pass']['#title'] = t("Password:");
    $form['actions']['submit']['#value'] = t("Login");
  }
}
?>