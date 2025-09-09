<?php
/**
 * Template Name: Brewing Page
 * 
 * The template for displaying The About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Joimo_Kombucha
 */

get_header();
?>

<div class="brewing" style="margin-bottom: 30px;">

  <h2>Brewing.</h2>
  <h3>Select Your Tea</h3>
  
  <div class="bewing__custom-select dropdown-filter">
    <?php 
      // Модифікований запит для фільтрації по категорії "Brewing"
      $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'post_status'     => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'fields' => 'ids',
        'tax_query' => array(
          array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => 'brewing',
          ),
        ),
      );

      $product_ids = get_posts($args);
      $pID = !empty($product_ids) ? $product_ids[0] : 0;
      $first_product_title = $pID ? get_the_title($pID) : 'No products found';
    ?>
    
    <div class="dropdown-filter__current">
      <span data-original-text="<?php echo esc_attr($first_product_title); ?>"><?php echo esc_html($first_product_title); ?></span>
      <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14.8991 0.363637C14.9664 0.429753 15 0.495868 15 0.6281C15 0.727273 14.9664 0.826447 14.8991 0.892563L7.76906 7.90083C7.70179 7.96694 7.6009 8 7.5 8C7.36547 8 7.29821 7.96694 7.23094 7.90083L0.100897 0.892562C0.0336323 0.826446 -4.41034e-09 0.727273 0 0.628099C5.88046e-09 0.495868 0.0336323 0.429752 0.100897 0.363636L0.369955 0.0991735C0.43722 0.0330578 0.504484 -5.78002e-09 0.639013 0C0.73991 4.33501e-09 0.840807 0.0330579 0.941704 0.0991736L7.5 6.57851L14.0583 0.0991741C14.1256 0.0330584 14.2265 5.83782e-07 14.361 5.89562e-07C14.4619 5.93897e-07 14.5628 0.0330585 14.63 0.0991742L14.8991 0.363637Z" fill="#221E1F"/>
      </svg>
    </div>
    
    <ul class="dropdown-filter__list" id="brewing-select-products">
      <?php 
        foreach ($product_ids as $product_id):
          $product = wc_get_product($product_id);
          if ($product):
            $title = get_the_title($product_id);
            $price = $product->get_price();
      ?>
        <li class="dropdown-filter__item" 
            data-id="<?php echo esc_attr($product_id); ?>" 
            data-price="<?php echo esc_attr($price); ?>"
            data-original-text="<?php echo esc_attr($title); ?>">
            <?php echo esc_html($title); ?>
        </li>
      <?php 
          endif;
        endforeach; 
      ?>
    </ul>
  </div>

  <div class="left-img-with-text brewing__content-to-show" style="margin-top: 30px;" id="brewingShoing">
    <div class="row">

      <div class="col-sm-6 bg-img">
        <div class="farm-img">
          <style>
            .left-img-with-text .bg-img {
              background-image: url(https://joimoteacom.kinsta.cloud/wp-content/uploads/2021/07/Image_breawing.jpg);
            }
          </style>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="brewing-feature" id="brewing-inner">

          <?php
            if ($pID > 0) {
              $brewingObj = get_field('select_bewing', $pID);
              if ($brewingObj && isset($brewingObj->ID)) {
                $brewingPageId = $brewingObj->ID;
                $brewingRows = get_field('brewing_types', $brewingPageId);
                if ($brewingRows && is_array($brewingRows)) {
                  $brewingRowsCount = count($brewingRows);
                  foreach ($brewingRows as $key => $row):
                    if (!is_array($row)) continue;
                    
                    // Очистити дані від HTML тегів на стороні сервера
                    $title = !empty($row['title']) ? wp_strip_all_tags($row['title']) : '';
                    $tea = !empty($row['tea']) ? wp_strip_all_tags($row['tea']) : '';
                    $water = !empty($row['water']) ? wp_strip_all_tags($row['water']) : '';
                    $temp = !empty($row['temp']) ? wp_strip_all_tags($row['temp']) : '';
          ?>

            <div class="feature-size">
              <div class="header-title">
                <span>
                  <?php if (!empty($row['icon'])): ?>
                    <img id="brewing-icon" src="<?php echo esc_url($row['icon']); ?>">
                  <?php endif; ?>
                </span>
                <h3><?php echo $title; ?></h3>
              </div>

              <table class="<?php if ($key == $brewingRowsCount - 1) echo 'third-tbl'; ?>">
                <tbody>
                  <tr>
                    <th>Tea</th>
                    <th>Water</th>
                    <th>Temp</th>
                    <?php if ($key !== $brewingRowsCount - 1): ?>
                      <th>Steep</th>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <td><?php echo $tea; ?></td>
                    <td><?php echo $water; ?></td>
                    <td><?php echo $temp; ?></td>
                    <?php if ($key !== $brewingRowsCount - 1): ?>
                      <td>
                        <?php if (!empty($row['steep']) && is_array($row['steep'])):
                          foreach ($row['steep'] as $step_key => $step): 
                            if (is_array($step) && !empty($step['step'])): 
                              if ($step_key !== 0): echo '<br>'; endif;
                              echo wp_strip_all_tags($step['step']);
                            endif;
                          endforeach; 
                        endif; ?>
                      </td>
                    <?php endif; ?>
                  </tr>
                </tbody>
              </table>
              
              <?php if ($key == $brewingRowsCount - 1): ?>
                <table>
                  <tbody>
                    <tr>
                      <th>Steep</th>
                    </tr>
                      <?php if (!empty($row['steep']) && is_array($row['steep'])):
                        foreach ($row['steep'] as $step): 
                          if (is_array($step) && !empty($step['step'])): ?>
                        <tr>
                          <td><?php echo wp_strip_all_tags($step['step']); ?></td>
                        </tr>
                      <?php endif;
                        endforeach; 
                      endif; ?>
                  </tbody>
                </table>
              <?php endif; ?>
            </div>

          <?php 
                  endforeach;
                }
              }
            }
          ?>

        </div>
      </div>
    </div>

    <div class="brewing__preloader" style="display: none;">
      <img src="https://joimoteacom.kinsta.cloud/wp-content/uploads/2022/06/ezgif-1-33999a320e.gif">
    </div>
  </div>
  
  <?php if ($pID > 0): ?>
  <div class="page-template-page-custom-index">
    <a class="cta-btn btn-bg-green view-prod-btn" href="<?php echo get_permalink($pID); ?>">View Product</a>
  </div>
  <?php endif; ?>

</div>

<script>
// Функція для безпечного декодування HTML entities
function decodeHtmlEntities(str) {
    if (!str) return '';
    
    // Створюємо тимчасовий textarea для декодування
    const textarea = document.createElement('textarea');
    textarea.innerHTML = str;
    const decoded = textarea.value;
    
    // Додаткове очищення від HTML тегів
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = decoded;
    return tempDiv.textContent || tempDiv.innerText || decoded;
}

// Функція для виправлення всіх текстових елементів
function fixTextDisplay() {
    // Виправити dropdown current
    const currentSpan = document.querySelector('.dropdown-filter__current span');
    if (currentSpan) {
        const originalText = currentSpan.getAttribute('data-original-text') || currentSpan.textContent;
        currentSpan.textContent = decodeHtmlEntities(originalText);
    }
    
    // Виправити dropdown items
    const dropdownItems = document.querySelectorAll('.dropdown-filter__item');
    dropdownItems.forEach(item => {
        const originalText = item.getAttribute('data-original-text') || item.textContent;
        item.textContent = decodeHtmlEntities(originalText);
    });
    
    // Виправити всі інші текстові елементи з можливими HTML entities
    const textElements = document.querySelectorAll('#brewing-inner h3, #brewing-inner td, #brewing-inner th');
    textElements.forEach(element => {
        if (element.children.length === 0) { // Тільки текстові елементи без дочірніх елементів
            const originalText = element.textContent;
            if (originalText.includes('&') || originalText.includes('<') || originalText.includes('>')) {
                element.textContent = decodeHtmlEntities(originalText);
            }
        }
    });
}

// Виконати при завантаженні DOM
document.addEventListener('DOMContentLoaded', function() {
    // Затримка для того, щоб дати браузеру час відрендерити HTML
    setTimeout(fixTextDisplay, 100);
    
    // Додаткова перевірка через 500ms
    setTimeout(fixTextDisplay, 500);
});

// jQuery код
jQuery(document).ready(function($) {
    // Виправити відображення одразу
    setTimeout(fixTextDisplay, 50);
    
    // Ініціалізація dropdown
    $('.dropdown-filter__current').click(function() {
        $(this).next('.dropdown-filter__list').toggle();
    });
    
    // Обробка кліку на елемент dropdown
    $('.dropdown-filter__item').click(function() {
        const productId = $(this).data('id');
        const originalText = $(this).attr('data-original-text') || $(this).text();
        const cleanText = decodeHtmlEntities(originalText);
        
        // Оновити відображення поточного вибору без HTML entities
        $('.dropdown-filter__current span').text(cleanText);
        
        // Приховати dropdown
        $('.dropdown-filter__list').hide();
        
        // Завантажити новий контент через AJAX
        loadBrewingContent(productId);
    });
    
    // Закрити dropdown при кліку поза ним
    $(document).click(function(e) {
        if (!$(e.target).closest('.dropdown-filter').length) {
            $('.dropdown-filter__list').hide();
        }
    });
    
    // Обробити URL параметри для динамічного завантаження
    const urlParams = new URLSearchParams(window.location.search);
    const productId = urlParams.get('product_id');
    
    if (productId) {
        // Знайти відповідний продукт у dropdown і оновити відображення
        const selectedItem = $('.dropdown-filter__item[data-id="' + productId + '"]');
        if (selectedItem.length > 0) {
            const originalText = selectedItem.attr('data-original-text') || selectedItem.text();
            const cleanText = decodeHtmlEntities(originalText);
            $('.dropdown-filter__current span').text(cleanText);
        }
        
        // Оновити контент через AJAX
        loadBrewingContent(productId);
    }
    
    // Функція для завантаження brewing контенту
    function loadBrewingContent(productId) {
        $('.brewing__preloader').show();
        $('.brewing__content-to-show').css('opacity', '0.5');
        
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            data: {
                action: 'get_brewing_content',
                product_id: productId,
                nonce: '<?php echo wp_create_nonce('brewing_nonce'); ?>'
            },
            success: function(response) {
                if (response.success) {
                    // Вставити HTML без обробки браузером HTML entities
                    const tempContainer = $('<div>').html(response.data.html);
                    
                    // Очистити всі текстові елементи від HTML entities перед вставкою
                    tempContainer.find('*').each(function() {
                        const element = $(this);
                        if (element.children().length === 0 && element.text().trim()) {
                            const cleanText = decodeHtmlEntities(element.text());
                            element.text(cleanText);
                        }
                    });
                    
                    $('#brewing-inner').html(tempContainer.html());
                    $('.view-prod-btn').attr('href', response.data.product_url);
                } else {
                    console.error('Error loading content:', response.data);
                }
                
                $('.brewing__preloader').hide();
                $('.brewing__content-to-show').css('opacity', '1');
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', error);
                $('.brewing__preloader').hide();
                $('.brewing__content-to-show').css('opacity', '1');
            }
        });
    }
});

// Додатковий обробник для IE та старих браузерів
if (window.addEventListener) {
    window.addEventListener('load', function() {
        setTimeout(fixTextDisplay, 200);
    });
} else if (window.attachEvent) {
    window.attachEvent('onload', function() {
        setTimeout(fixTextDisplay, 200);
    });
}
</script>

<?php 
// Додати AJAX handler тільки якщо його ще немає
if (!has_action('wp_ajax_get_brewing_content')) {
    add_action('wp_ajax_get_brewing_content', 'get_brewing_content_ajax_handler');
    add_action('wp_ajax_nopriv_get_brewing_content', 'get_brewing_content_ajax_handler');
}

function get_brewing_content_ajax_handler() {
    // Перевірка nonce
    if (!wp_verify_nonce($_POST['nonce'], 'brewing_nonce')) {
        wp_die('Security check failed');
    }
    
    $product_id = intval($_POST['product_id']);
    
    if (!$product_id) {
        wp_send_json_error('Invalid product ID');
    }
    
    $product = wc_get_product($product_id);
    
    if (!$product) {
        wp_send_json_error('Product not found');
    }
    
    // Генерація HTML контенту з додатковою обробкою
    ob_start();
    
    $brewingObj = get_field('select_bewing', $product_id);
    if ($brewingObj && isset($brewingObj->ID)) {
        $brewingPageId = $brewingObj->ID;
        $brewingRows = get_field('brewing_types', $brewingPageId);
        
        if ($brewingRows && is_array($brewingRows)) {
            $brewingRowsCount = count($brewingRows);
            foreach ($brewingRows as $key => $row):
                if (!is_array($row)) continue;
                
                // Передобробка даних для уникнення HTML entities
                $title = !empty($row['title']) ? wp_strip_all_tags($row['title']) : '';
                $tea = !empty($row['tea']) ? wp_strip_all_tags($row['tea']) : '';
                $water = !empty($row['water']) ? wp_strip_all_tags($row['water']) : '';
                $temp = !empty($row['temp']) ? wp_strip_all_tags($row['temp']) : '';
                ?>
                <div class="feature-size">
                    <div class="header-title">
                        <span>
                            <?php if (!empty($row['icon'])): ?>
                                <img id="brewing-icon" src="<?php echo esc_url($row['icon']); ?>">
                            <?php endif; ?>
                        </span>
                        <h3><?php echo $title; ?></h3>
                    </div>

                    <table class="<?php if ($key == $brewingRowsCount - 1) echo 'third-tbl'; ?>">
                        <tbody>
                            <tr>
                                <th>Tea</th>
                                <th>Water</th>
                                <th>Temp</th>
                                <?php if ($key !== $brewingRowsCount - 1): ?>
                                    <th>Steep</th>
                                <?php endif; ?>
                            </tr>
                            <tr>
                                <td><?php echo $tea; ?></td>
                                <td><?php echo $water; ?></td>
                                <td><?php echo $temp; ?></td>
                                <?php if ($key !== $brewingRowsCount - 1): ?>
                                    <td>
                                        <?php if (!empty($row['steep']) && is_array($row['steep'])):
                                            foreach ($row['steep'] as $step_key => $step): 
                                                if (is_array($step) && !empty($step['step'])): 
                                                    if ($step_key !== 0): echo '<br>'; endif;
                                                    echo wp_strip_all_tags($step['step']);
                                                endif;
                                            endforeach; 
                                        endif; ?>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        </tbody>
                    </table>
                    
                    <?php if ($key == $brewingRowsCount - 1): ?>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Steep</th>
                                </tr>
                                <?php if (!empty($row['steep']) && is_array($row['steep'])):
                                    foreach ($row['steep'] as $step): 
                                        if (is_array($step) && !empty($step['step'])): ?>
                                            <tr>
                                                <td><?php echo wp_strip_all_tags($step['step']); ?></td>
                                            </tr>
                                        <?php endif;
                                    endforeach; 
                                endif; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
                <?php
            endforeach;
        }
    }
    
    $html = ob_get_clean();
    
    wp_send_json_success(array(
        'html' => $html,
        'product_url' => get_permalink($product_id)
    ));
}

get_footer(); ?>