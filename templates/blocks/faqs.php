<div class="container-fluid faqs_block <?= \SuperBuilder\Frontend\FlexibleContentBlock::blockClasses();?>">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 block-content">
            
            <?php \SuperBuilder\Helpers\Helper::echoIfExists(get_sub_field('title'), 'h3'); ?>           
            
            <div class="row faqs">
				<?php 
                $i = 0;
                foreach(get_sub_field('questions_answers') as $faq) { ?>
                    <div class="col col-12 faq <?=  ($i == 0) ? 'active' : ''; ?>">
                        <div class="block-wrapper">
                            <div class="question">
                                <div class="open-close">
                                    <div class="line"></div>
                                    <div class="line"></div>
                                </div>
                                <?= $faq['question'];?>
                            </div>
                            <div class="answer"><?= $faq['answer'];?></div>
                        </div>
                    </div>
                <?php $i++; } ?>
            </div>
            
        </div>
        <div class="col-1"></div>
    </div>
</div>