<?php

namespace SDSS;

class Helpers
{

    public static function isDev($userName = 'daniel') {
        $current_user = wp_get_current_user();
        if ($current_user->user_login === $userName) {
            return true;
        }
        return false;
    }

    public static function dd($input) {
        echo '<pre>';
        var_dump($input);
        echo '</pre>';
        die();
    }

    public static function newTabCheck($field) {
        if ($field !== true) {
            return;
        }
        return 'target="_blank"';
    }

    public static function slugify($string) {
        // Convert to lowercase and replace spaces with hyphens
        $slug = preg_replace('/\s+/', '-', strtolower($string));
        // Remove non-alphanumeric characters except hyphens and underscores
        $slug = preg_replace('/[^a-z0-9\-_]/', '', $slug);
        // Remove leading and trailing hyphens
        $slug = trim($slug, '-');
        return $slug;
    }

    // Echo an ACF field if it exists, options for tag/class
    public static function echoIfExists($field, string $tag = null, $class = null)
    {
        if ($field == null || $field == '') {
            return '';
        }
        if ($tag == null) {
            echo $field;
        }
        if ($tag !== null) {
            $string = '<' . $tag;
            if ($class !== null) {
                $string .= ' class="' . $class . '"';
            }
            $string .= '>' . $field . '</' . $tag . '>';
            echo $string;
        }
    }

    public static function getAsset($img) {
        return file_get_contents(BASE_DIR . '/assets/img/' . $img);
    }

    public static function superPagination($queryVar) {
        return paginate_links(array(
            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
            'total' => $queryVar->max_num_pages ?? $queryVar['max_num_pages'],
            'current' => max(1, get_query_var('paged')),
            'format' => '?paged=%#%',
            'show_all' => false,
            'type' => 'plain',
            'end_size' => 2,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => sprintf('<i></i> %1$s', __('⏴', 'text-domain')),
            'next_text' => sprintf('%1$s <i></i>', __('⏵', 'text-domain')),
            'add_args' => false,
            'add_fragment' => '',
        ));
    }
    
}