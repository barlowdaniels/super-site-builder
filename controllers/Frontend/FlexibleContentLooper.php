<?php

namespace SuperBuilder\Frontend;

use SuperBuilder\Helpers\Helper;

class FlexibleContentLooper
{
    private $sectionIndex;

    public function __construct($postID) {
        return $this->getPageSections($postID);
    }

    private function getPageSections($postID) {
        if( have_rows('sections', $postID) == false ) return;
        while ( have_rows('sections', $postID) ) : the_row();
            $this->sectionIndex = get_row_index();
            echo '<section id="' . Helper::slugify(get_sub_field('section_name')) . '" data-section="' . get_row_index() . '">';
            $this->getFlexibleContent($postID, $this->sectionIndex);
            echo '</section>';
        endwhile;
    }

    private function getFlexibleContent($postID, $sectionIndex) {
        if( have_rows('flexible_content', $postID) == false ) return;
        while ( have_rows('flexible_content', $postID) ) : the_row();
            // include the template for that module
            $templatePath = $this->getTemplateFile( get_row_layout() );
            $data = ['sectionIndex' => $sectionIndex];
            $this->checkAndInclude( $templatePath , $data );
        endwhile;
    }

    private function checkAndInclude($filename, $data) {
        if (file_exists($filename) === false) {
            throw new Exception($filename . ' was not found.');
        }
        $data = is_array($data) ? $data : [];
        extract($data);
        // or return it if found
        return include $filename;
    }
    
    //TODO: Rework this function for inclusion of templates from the theme by default - the commented lines below don't work to achieve this
    private function getTemplateFile($filename) {
//        $themeTemplate = get_stylesheet_directory() . '/super-site/templates/blocks/' . $filename . '.php';
//        if(!file_exists($themeTemplate)) {
            return BASE_DIR . 'templates/blocks/' . $filename . '.php'; 
//        }
//        return $themeTemplate;
    }

}