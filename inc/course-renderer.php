<?php
/**
 * Course Renderer System
 * Renders courses from JSON data based on configuration
 */

// Load course data
$courses_json = file_get_contents(__DIR__ . '/courses.json');
$courses_data = json_decode($courses_json, true);

/**
 * Render a single course card
 */
function renderCourse($course_key, $course_data, $instructor_key) {
    global $currency;
    
    // Build course URL
    $course_url = get_link("/$instructor_key/$course_key/");
    
    // Build categories classes
    $categories_class = implode(' ', $course_data['categories']);
    
    // Generate star rating HTML
    $full_stars = floor($course_data['rating']);
    $has_half_star = ($course_data['rating'] - $full_stars) >= 0.5;
    
    $stars_html = '';
    for ($i = 0; $i < $full_stars; $i++) {
        $stars_html .= '<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="svg-inline--fa fa-star fa-w-18 fontawesome-icon star-solid" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>';
    }
    
    if ($has_half_star) {
        $stars_html .= '<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path></svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star-half" class="svg-inline--fa fa-star-half fa-w-18 fontawesome-icon star-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M288 0c-11.4 0-22.8 5.9-28.7 17.8L194 150.2 47.9 171.4c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.1 23 46 46.4 33.7L288 439.6V0z"></path></svg></span>';
    }
    
    // Check if external course
    $is_external = isset($course_data['is_external']) && $course_data['is_external'];
    $target_blank = $is_external ? 'target="_blank"' : '';
    $final_url = $is_external ? $course_data['external_url'] : $course_url;
    
    // Determine offer class and ribbon
    $offer_class = '';
    $ribbon_html = '';
    if (isset($course_data['has_offer']) && $course_data['has_offer']) {
        $offer_class = 'oferta50';
        if (isset($course_data['ribbon'])) {
            $ribbon_html = '<div class="ribbons50off"><img src="' . $course_data['ribbon'] . '" /></div>';
        }
    }
    
    // Price display
    $price_html = '';
    if (isset($course_data['original_price']) && $course_data['original_price'] > $course_data['price']) {
        $price_html = '<span class="plan-price">' . $currency . ' ' . getPrecio($course_data['price']) . '</span>';
        $price_html .= '<span class="plan-price-discount">' . $currency . ' ' . getPrecio($course_data['original_price']) . '</span>';
    } else {
        $price_html = '<span class="plan-price">' . $currency . ' ' . getPrecio($course_data['price']) . '</span>';
    }
    
    echo '<div class="col-lg-6 col-sm-6 col-md-6 ' . $categories_class . '">';
    echo '<div class="isotope-item">';
    echo '<div class="adoption-thumb ' . $offer_class . '">';
    echo $ribbon_html;
    echo '<a href="' . $final_url . '" ' . $target_blank . ' title="' . htmlspecialchars($course_data['title'] . ' con ' . $course_data['instructor']) . '">';
    echo '<img class="img-responsive img-circle" src="' . $course_data['image'] . '" alt="' . htmlspecialchars($course_data['title'] . ' con ' . $course_data['instructor']) . '" title="' . htmlspecialchars($course_data['title'] . ' con ' . $course_data['instructor']) . '">';
    echo '</a>';
    echo '<div class="adopt-header">';
    echo '<h3><a href="' . $final_url . '" ' . $target_blank . '>' . htmlspecialchars($course_data['title']) . '</a></h3>';
    echo '<div class="rating-main-box-ratings-qty">';
    echo '<div class="rating rating--title colorText">' . $stars_html . '</div>';
    echo '<div class="blog-tags"><a>' . $course_data['rating'] . '</a></div>';
    echo '</div>';
    echo '<div class="post-info">';
    echo '<p><i class="fa fa-clock-o"></i>' . $course_data['lessons'] . ' Lecciones</p>';
    echo '<p><i class="fa fa-user"></i>Por ' . htmlspecialchars($course_data['instructor']) . '</p>';
    echo '<p><i class="fa fa-comment"></i>' . $course_data['reviews'] . ' Evaluaciones</p>';
    echo '</div>';
    echo '<div class="plan-cost">' . $price_html . '</div>';
    echo '<p>' . $course_data['description'] . '</p>';
    echo '<a class="btn" href="' . $final_url . '" ' . $target_blank . '>Ver más</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Process courses to show
if (isset($courses_to_show) && is_array($courses_to_show)) {
    foreach ($courses_to_show as $course_path) {
        $path_parts = explode('/', $course_path);
        if (count($path_parts) == 2) {
            $instructor_key = $path_parts[0];
            $course_key = $path_parts[1];
            
            if (isset($courses_data[$instructor_key][$course_key])) {
                $course_data = $courses_data[$instructor_key][$course_key];
                
                // Apply filters
                $should_render = true;
                
                // Filter by offers only if specified
                if (isset($filter_offers_only) && $filter_offers_only) {
                    $should_render = isset($course_data['has_offer']) && $course_data['has_offer'];
                }
                
                if ($should_render) {
                    renderCourse($course_key, $course_data, $instructor_key);
                }
            }
        }
    }
}
?>