<div id='product-component-1427f62cb71'></div>
<script type="text/javascript">
/*<![CDATA[*/

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }

  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'neriumskincare-jp.myshopify.com',
      apiKey: 'a8fcda28a0b70b31bbea1f51003e2dd9',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [8032888203],
        node: document.getElementById('product-component-1427f62cb71'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "variantId": "all",
    "width": "240px",
    "contents": {
      "imgWithCarousel": false,
      "variantTitle": false,
      "description": false,
      "buttonWithQuantity": false,
      "quantity": false
    },
    "text": {
      "button": "カートに入れる ( ADD TO CART )"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#a1d2e6",
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px",
        "padding-left": "14px",
        "padding-right": "14px",
        ":hover": {
          "background-color": "#91bdcf"
        },
        ":focus": {
          "background-color": "#91bdcf"
        }
      },
      "quantityInput": {
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px"
      },
      "compareAt": {
        "font-size": "12px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "text": {
      "title": "カート ( Cart )",
      "total": "合計 ( SUBTOTAL )",
      "notice": "送料と割引コードはお会計時に加算されます。(Shipping and discount codes are added at checkout.)",
      "button": "お会計 ( CHECKOUT )",
      "empty": "カートは空です。( Your cart is empty )"
    },
    "styles": {
      "button": {
        "background-color": "#a1d2e6",
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px",
        ":hover": {
          "background-color": "#91bdcf"
        },
        ":focus": {
          "background-color": "#91bdcf"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#a1d2e6",
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px",
        "padding-left": "14px",
        "padding-right": "14px",
        ":hover": {
          "background-color": "#91bdcf"
        },
        ":focus": {
          "background-color": "#91bdcf"
        }
      },
      "quantityInput": {
        "font-size": "15px",
        "padding-top": "15.5px",
        "padding-bottom": "15.5px"
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#a1d2e6",
        ":hover": {
          "background-color": "#91bdcf"
        },
        ":focus": {
          "background-color": "#91bdcf"
        }
      },
      "count": {
        "font-size": "15px"
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }
})();
/*]]>*/
</script>
    
