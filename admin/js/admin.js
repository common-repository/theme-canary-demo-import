"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;

function redirectToKitPage(res) {
  window.location = "".concat(window.theme_canary.theme_canary_demo_import_page);
}

jQuery(function ($) {
  // Activate plugin.
  $(document).on('click', '.theme-canary-activate-plugin', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('theme-canary-importing-plugin');
    apiFetch({
      path: '/wp/v2/plugins/one-click-demo-import/one-click-demo-import',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    }).catch(function () {
      redirectToKitPage({});
    });
  });

  // Install plugin.
  $(document).on('click', '.theme-canary-install-plugin', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('theme-canary-importing-plugin');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "one-click-demo-import",
        "status": "active"
      }
    }).then(function (res) {
      redirectToKitPage(res);
    }).catch(function () {
      redirectToKitPage({});
    });
  });
});
