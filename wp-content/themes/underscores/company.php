<?php

    //   $url = '/wordpress_0408/?page_id=11';
    // $content = file_get_contents($url);
    // echo $content;

    // WordPress の投稿を取得するためのクエリを構築
    $query = new WP_Query(array('page_id' => 11));

    // ループ内でページのコンテンツを表示
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            the_content();
        }
    }

    wp_reset_postdata(); // ポストデータをリセット

		?>

    <!-- [company_php file='company_php'] -->


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Document</title>
	<link href="./wp-content/themes/twentytwentyone/reset.css" rel="stylesheet">
	<link href="./wp-content/themes/twentytwentyone/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">

</head>
<body>
	<?php get_header(); ?>




	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
	<script src="./wp-content/themes/twentytwentyone/main.js"></script>
</body>
</html>

<?php
get_sidebar();
get_footer();
?>
