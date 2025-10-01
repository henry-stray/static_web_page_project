<?php
$pages = [
    [
        'filename' => 'index.html',
        'title' => 'homepage',
        'subtitle' => 'The homepage subtitle',
        'content' => 'This is the content for the homepage.'
    ],
    [
        'filename' => 'page1.html',
        'title' => 'page 1',
        'subtitle' => 'The page 1 subtitle',
        'content' => 'This is the content for page 1.'
    ],
    [
        'filename' => 'page2.html',
        'title' => 'page 2',
        'subtitle' => 'The page 2 subtitle',
        'content' => 'This is the content for page 2.'
    ],
    [
        'filename' => 'page3.html',
        'title' => 'page 3',
        'subtitle' => 'The page 3 subtitle',
        'content' => 'This is the content for page 3.'
    ]
    ];

// set up some variables
$total_pages = count($pages);

$current_page = 1;

// loop through each page and generate the static HTML file
foreach ($pages as $page) {
    // start buffering the output
    ob_start();

    // create the link to the next page
    if ($current_page ===$total_pages) {
        $current_page = 1;
        $next_page = '<a href="' . $pages[0]['filename'] . '">' . $pages[0]['title'] . '</a>';
    } else {
        $next_page = '<a href="' . $pages[$current_page]['filename'] . '">' . $pages[$current_page]['title'] . '</a>';
    }
    // include the template file
    include 'template.php';

    // save the buffered content
    $htmlContent = ob_get_clean();

    // save the content to the static HTML file
    file_put_contents($page['filename'], $htmlContent);
    
    echo "static file " . $page['filename'] . " generated!\r\n";

    //increment the current page number
    $current_page++;
}
?>