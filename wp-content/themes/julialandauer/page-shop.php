<?php
/**
 *
 * This is the template for the shop page. 
 *
 * @package julialandauer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="shop-page">
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>

					<div class="shop-page__wrapper">

							<div class="shop-page__shirt">
								<div id="product-component-f2018f12ef5"></div>
							</div>
					
                            
							<div class="shop-page__sunglasses">
								
									<div class="shop-page__sunglasses--description">
										<h3>JLR Bottle Opener Sunglasses</h3>
										<!-- Load the sunglasses text -->
										<h4>$10</h4>
										<p>
										<?php  echo get_post_meta($post->ID, 'sunglasses-text', true); ?>
										</p>
										
										<div id="product-component-e71a7b28af9"></div>

									</div>

									<img class="shop-page__sunglasses--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-sunglasses-2016.jpg">
							</div>

							<div class="shop-page__pen">
								
									<div class="shop-page__pen--description">
										<h3>JLR Pen</h3>
										<!-- Load the water bottle text -->
										<h4>$3</h4>
										<p>
										<?php  echo get_post_meta($post->ID, 'pen-text', true); ?>
										</p>
										
										<div id="product-component-b7e494adedc"></div>
										
									</div>



									<img class="shop-page__pen--image" src="<?php echo site_url(); ?>/wp-content/uploads/jlr-pen-2015.jpg">

									
							</div>

							<div class="shop-page__hero-card">
								<div  class="shop-page__hero-card--description">
									<h3>Hero Card</h3>
									<h4>$2.50</h4>
									<p>
										<!-- Load the hero card text -->
										<?php  echo get_post_meta($post->ID, 'hero-card-text', true); ?>
									</p>

									<?php // Hero card buy button ?>
									<div id="product-component-11c3edc68e3"></div>
									
								</div>

									<img src="<?php echo site_url(); ?>/wp-content/uploads/<?php  echo get_post_meta($post->ID, 'shop-page-hero-card-front', true); ?>" class="shop-page__hero-card--image" />

							</div>

					</div>				

				<?php endwhile; // end of the loop. ?>

			</div><!-- /shop-page -->

		</main><!-- #main -->
	</div><!-- #primary -->


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
          domain: 'julia-landauer-racing.myshopify.com',
          storefrontAccessToken: '66a43fa0eacc79dbe82ce5e67258bcd7',
        });

        ShopifyBuy.UI.onReady(client).then(function (ui) {
          ui.createComponent('product', {
            id: [2144472072290],
            node: document.getElementById('product-component-11c3edc68e3'),
            moneyFormat: '%24%7B%7Bamount%7D%7D',
            options: {
				"product": {
					"variantId": "all",
					"width": "240px",
					"contents": {
					"img": false,
					"imgWithCarousel": false,
					"title": false,
					"variantTitle": false,
					"price": false,
					"description": false,
					"buttonWithQuantity": false,
					"quantity": false
					},
					"text": {
					"button": "Add To Cart"
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
						"background-color": "#0060bc",
						"font-family": "Quantico, sans-serif",
						":hover": {
						"background-color": "#0056a9"
						},
						"border-radius": "90px",
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"variantTitle": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"title": {
						"font-family": "Quantico, sans-serif",
						"font-size": "26px"
					},
					"description": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"price": {
						"font-family": "Oxygen, sans-serif",
						"font-size": "18px",
						"font-weight": "bold"
					},
					"compareAt": {
						"font-size": "15px",
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					}
					},
					"googleFonts": [
					"Quantico",
					"Oxygen",
					"Quantico",
					"Oxygen",
					"Oxygen",
					"Oxygen"
					]
				},
				"cart": {
					"contents": {
					"button": true
					},
					"text": {
					"total": "Subtotal"
					},
					"styles": {
					"button": {
						"background-color": "#0060bc",
						"font-family": "Quantico, sans-serif",
						":hover": {
						"background-color": "#0056a9"
						},
						"border-radius": "90px",
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"footer": {
						"background-color": "#ffffff"
					}
					},
					"googleFonts": [
					"Quantico"
					]
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
						"background-color": "#0060bc",
						"font-family": "Quantico, sans-serif",
						":hover": {
						"background-color": "#0056a9"
						},
						"border-radius": "90px",
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"variantTitle": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"title": {
						"font-family": "Quantico, sans-serif"
					},
					"description": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"price": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"compareAt": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					}
					},
					"googleFonts": [
					"Quantico",
					"Oxygen",
					"Quantico",
					"Oxygen",
					"Oxygen",
					"Oxygen"
					]
				},
				"toggle": {
					"styles": {
					"toggle": {
						"font-family": "Quantico, sans-serif",
						"background-color": "#0060bc",
						":hover": {
						"background-color": "#0056a9"
						},
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"count": {
						"color": "#ffffff",
						":hover": {
						"color": "#ffffff"
						}
					},
					"iconPath": {
						"fill": "#ffffff"
					}
					},
					"googleFonts": [
					"Quantico"
					]
				},
				"option": {
					"styles": {
					"label": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"select": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					}
					},
					"googleFonts": [
					"Oxygen",
					"Oxygen"
					]
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

			ui.createComponent('product', {
				id: [2144471318626],
				node: document.getElementById('product-component-e71a7b28af9'),
				moneyFormat: '%24%7B%7Bamount%7D%7D',
				options: {
				"product": {
					"variantId": "all",
					"width": "240px",
					"contents": {
					"img": false,
					"imgWithCarousel": false,
					"title": false,
					"variantTitle": false,
					"price": false,
					"description": false,
					"buttonWithQuantity": false,
					"quantity": false
					},
					"text": {
					"button": "Add To Cart"
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
						"background-color": "#0060bc",
						"font-family": "Quantico, sans-serif",
						":hover": {
						"background-color": "#0056a9"
						},
						"border-radius": "90px",
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"variantTitle": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"title": {
						"font-family": "Quantico, sans-serif",
						"font-size": "26px"
					},
					"description": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"price": {
						"font-family": "Oxygen, sans-serif",
						"font-size": "18px",
						"font-weight": "bold"
					},
					"compareAt": {
						"font-size": "15px",
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					}
					},
					"googleFonts": [
					"Quantico",
					"Oxygen",
					"Quantico",
					"Oxygen",
					"Oxygen",
					"Oxygen"
					]
				},
				"cart": {
					"contents": {
					"button": true
					},
					"text": {
					"total": "Subtotal"
					},
					"styles": {
					"button": {
						"background-color": "#0060bc",
						"font-family": "Quantico, sans-serif",
						":hover": {
						"background-color": "#0056a9"
						},
						"border-radius": "90px",
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"footer": {
						"background-color": "#ffffff"
					}
					},
					"googleFonts": [
					"Quantico"
					]
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
						"background-color": "#0060bc",
						"font-family": "Quantico, sans-serif",
						":hover": {
						"background-color": "#0056a9"
						},
						"border-radius": "90px",
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"variantTitle": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"title": {
						"font-family": "Quantico, sans-serif"
					},
					"description": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"price": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"compareAt": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					}
					},
					"googleFonts": [
					"Quantico",
					"Oxygen",
					"Quantico",
					"Oxygen",
					"Oxygen",
					"Oxygen"
					]
				},
				"toggle": {
					"styles": {
					"toggle": {
						"font-family": "Quantico, sans-serif",
						"background-color": "#0060bc",
						":hover": {
						"background-color": "#0056a9"
						},
						":focus": {
						"background-color": "#0056a9"
						},
						"font-weight": "bold"
					},
					"count": {
						"color": "#ffffff",
						":hover": {
						"color": "#ffffff"
						}
					},
					"iconPath": {
						"fill": "#ffffff"
					}
					},
					"googleFonts": [
					"Quantico"
					]
				},
				"option": {
					"styles": {
					"label": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					},
					"select": {
						"font-family": "Oxygen, sans-serif",
						"font-weight": "bold"
					}
					},
					"googleFonts": [
					"Oxygen",
					"Oxygen"
					]
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
			ui.createComponent('product', {
				id: [2144471711842],
				node: document.getElementById('product-component-b7e494adedc'),
				moneyFormat: '%24%7B%7Bamount%7D%7D',
				options: {
					"product": {
						"variantId": "all",
						"width": "240px",
						"contents": {
						"img": false,
						"imgWithCarousel": false,
						"title": false,
						"variantTitle": false,
						"price": false,
						"description": false,
						"buttonWithQuantity": false,
						"quantity": false
						},
						"text": {
						"button": "Add To Cart"
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
							"background-color": "#0060bc",
							"font-family": "Quantico, sans-serif",
							":hover": {
							"background-color": "#0056a9"
							},
							"border-radius": "90px",
							":focus": {
							"background-color": "#0056a9"
							},
							"font-weight": "bold"
						},
						"variantTitle": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						},
						"title": {
							"font-family": "Quantico, sans-serif",
							"font-size": "26px"
						},
						"description": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						},
						"price": {
							"font-family": "Oxygen, sans-serif",
							"font-size": "18px",
							"font-weight": "bold"
						},
						"compareAt": {
							"font-size": "15px",
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						}
						},
						"googleFonts": [
						"Quantico",
						"Oxygen",
						"Quantico",
						"Oxygen",
						"Oxygen",
						"Oxygen"
						]
					},
					"cart": {
						"contents": {
						"button": true
						},
						"text": {
						"total": "Subtotal"
						},
						"styles": {
						"button": {
							"background-color": "#0060bc",
							"font-family": "Quantico, sans-serif",
							":hover": {
							"background-color": "#0056a9"
							},
							"border-radius": "90px",
							":focus": {
							"background-color": "#0056a9"
							},
							"font-weight": "bold"
						},
						"footer": {
							"background-color": "#ffffff"
						}
						},
						"googleFonts": [
						"Quantico"
						]
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
							"background-color": "#0060bc",
							"font-family": "Quantico, sans-serif",
							":hover": {
							"background-color": "#0056a9"
							},
							"border-radius": "90px",
							":focus": {
							"background-color": "#0056a9"
							},
							"font-weight": "bold"
						},
						"variantTitle": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						},
						"title": {
							"font-family": "Quantico, sans-serif"
						},
						"description": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						},
						"price": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						},
						"compareAt": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						}
						},
						"googleFonts": [
						"Quantico",
						"Oxygen",
						"Quantico",
						"Oxygen",
						"Oxygen",
						"Oxygen"
						]
					},
					"toggle": {
						"styles": {
						"toggle": {
							"font-family": "Quantico, sans-serif",
							"background-color": "#0060bc",
							":hover": {
							"background-color": "#0056a9"
							},
							":focus": {
							"background-color": "#0056a9"
							},
							"font-weight": "bold"
						},
						"count": {
							"color": "#ffffff",
							":hover": {
							"color": "#ffffff"
							}
						},
						"iconPath": {
							"fill": "#ffffff"
						}
						},
						"googleFonts": [
						"Quantico"
						]
					},
					"option": {
						"styles": {
						"label": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						},
						"select": {
							"font-family": "Oxygen, sans-serif",
							"font-weight": "bold"
						}
						},
						"googleFonts": [
						"Oxygen",
						"Oxygen"
						]
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
				ui.createComponent('product', {
					id: [2144473514082],
					node: document.getElementById('product-component-f2018f12ef5'),
					moneyFormat: '%24%7B%7Bamount%7D%7D',
					options: {
						"product": {
							"layout": "horizontal",
							"variantId": "all",
							"width": "100%",
							"contents": {
							"img": false,
							"imgWithCarousel": true,
							"variantTitle": false,
							"description": true,
							"buttonWithQuantity": false,
							"quantity": false
							},
							"text": {
							"button": "Add To Cart"
							},
							"styles": {
							"product": {
								"text-align": "left",
								"@media (min-width: 601px)": {
								"max-width": "100%",
								"margin-left": "0",
								"margin-bottom": "50px"
								}
							},
							"button": {
								"background-color": "#0060bc",
								"font-family": "Quantico, sans-serif",
								":hover": {
								"background-color": "#0056a9"
								},
								"border-radius": "90px",
								":focus": {
								"background-color": "#0056a9"
								},
								"font-weight": "bold"
							},
							"variantTitle": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							},
							"title": {
								"font-family": "Quantico, sans-serif",
								"font-size": "26px"
							},
							"description": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							},
							"price": {
								"font-family": "Oxygen, sans-serif",
								"font-size": "18px",
								"font-weight": "bold"
							},
							"compareAt": {
								"font-size": "15px",
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							}
							},
							"googleFonts": [
							"Quantico",
							"Oxygen",
							"Quantico",
							"Oxygen",
							"Oxygen",
							"Oxygen"
							]
						},
						"cart": {
							"contents": {
							"button": true
							},
							"text": {
							"total": "Subtotal"
							},
							"styles": {
							"button": {
								"background-color": "#0060bc",
								"font-family": "Quantico, sans-serif",
								":hover": {
								"background-color": "#0056a9"
								},
								"border-radius": "90px",
								":focus": {
								"background-color": "#0056a9"
								},
								"font-weight": "bold"
							},
							"footer": {
								"background-color": "#ffffff"
							}
							},
							"googleFonts": [
							"Quantico"
							]
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
								"background-color": "#0060bc",
								"font-family": "Quantico, sans-serif",
								":hover": {
								"background-color": "#0056a9"
								},
								"border-radius": "90px",
								":focus": {
								"background-color": "#0056a9"
								},
								"font-weight": "bold"
							},
							"variantTitle": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							},
							"title": {
								"font-family": "Quantico, sans-serif"
							},
							"description": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							},
							"price": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							},
							"compareAt": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							}
							},
							"googleFonts": [
							"Quantico",
							"Oxygen",
							"Quantico",
							"Oxygen",
							"Oxygen",
							"Oxygen"
							]
						},
						"toggle": {
							"styles": {
							"toggle": {
								"font-family": "Quantico, sans-serif",
								"background-color": "#0060bc",
								":hover": {
								"background-color": "#0056a9"
								},
								":focus": {
								"background-color": "#0056a9"
								},
								"font-weight": "bold"
							},
							"count": {
								"color": "#ffffff",
								":hover": {
								"color": "#ffffff"
								}
							},
							"iconPath": {
								"fill": "#ffffff"
							}
							},
							"googleFonts": [
							"Quantico"
							]
						},
						"option": {
							"styles": {
							"label": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							},
							"select": {
								"font-family": "Oxygen, sans-serif",
								"font-weight": "bold"
							}
							},
							"googleFonts": [
							"Oxygen",
							"Oxygen"
							]
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
<?php get_footer(); ?>

