
<?php 
function flamegroup_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js');
}
add_action( 'wp_enqueue_scripts', 'flamegroup_scripts' );


function services_register_post_type() {
    register_post_type('services', 
        array(
            'labels' => array(
                'name' => 'services',
                'singular_name' => 'services', // админ панель Добавить->Функцию
                'add_new' => 'Add services',
                'add_new_item' => 'Add new services', // заголовок тега <title>
                'edit_item' => 'Edit services',
                'new_item' => 'New services',
                'all_items' => 'All services',
                'view_item' => 'services on site',
                'menu_name' => 'Услуги' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'services_register_post_type' ); // Использовать функцию только внутри хука init
	

function render_services(){
  
    $params = array(
        'post_type' => 'services', // тип постов - записи
    );
    $query = new WP_Query($params);

    foreach( $query->posts as $post ){
		
        $fields = get_fields($post->ID);
			$html .= '	<div class="col-lg-4">';
			$html .= '		<p>'. $fields['title'].'</p>';
			$html .= '		<img src="'. $fields['img'][url].'" alt="">';
			$html .= '		<ul>';
			$html .= '			<li>'. $fields['item1'].'</li>';
			$html .= '			<li>'. $fields['item2'].'</li>';
			$html .= '			<li>'. $fields['item3'].'</li>';
			$html .= '			<li>'. $fields['item4'].'</li>';
			$html .= '			<li>'. $fields['item5'].'</li>';
			$html .= '			<li>'. $fields['item6'].'</li>';
			$html .= '			<li>'. $fields['item7'].'</li>';
			$html .= '			<li>'. $fields['item8'].'</li>';
			$html .= '			<li>'. $fields['item9'].'</li>';
			$html .= '			<li>'. $fields['item10'].'</li>';
			$html .= '		</ul>';
			$html .= '		<a href="#zayav">Заказать</a>';
			$html .= '	</div>';
			
    }
 

    wp_reset_postdata();

    echo $html;
}












function car_register_post_type() {
    register_post_type('car', 
        array(
            'labels' => array(
                'name' => 'car',
                'singular_name' => 'car', // админ панель Добавить->Функцию
                'add_new' => 'Add car',
                'add_new_item' => 'Add new car', // заголовок тега <title>
                'edit_item' => 'Edit car',
                'new_item' => 'New car',
                'all_items' => 'All car',
                'view_item' => 'car on site',
                'menu_name' => 'Авто в наличии' // ссылка в меню в админке
            ),
            'public' => true, // благодаря этому некоторые параметры можно пропустить
            'exclude_from_search' => true,
        
            'has_archive' => true,
            'supports' => array( 'title'),
        ));
}
add_action( 'init', 'car_register_post_type' ); // Использовать функцию только внутри хука init
	







?>



		