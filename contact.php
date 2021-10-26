<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");?>
    <div id="primary" class="content-area column full">
        <main id="main" class="site-main">
            <article id="post-39" class="post-39 page type-page status-publish hentry">
                <header class="entry-header">
                    <h1 class="entry-title">Contact</h1>
                </header>
                <!-- .entry-header -->
                <div class="entry-content">
                        
                    <!-- BEGIN MAP -->
                    <?php $APPLICATION->IncludeComponent(
                        'bitrix:map.google.view', 
                        '.default', 
                        array(
                            'API_KEY' => '',
                            'CONTROLS' => array(
                                0 => 'SMALL_ZOOM_CONTROL',
                                1 => 'TYPECONTROL',
                            ),
                            'INIT_MAP_TYPE' => 'TERRAIN',
                            'MAP_DATA' => 'a:3:{s:10:\'google_lat\';s:7:\'55.7383\';s:10:\'google_lon\';s:7:\'37.5946\';s:12:\'google_scale\';i:13;}',
                            'MAP_HEIGHT' => '380',
                            'MAP_ID' => '',
                            'MAP_WIDTH' => 'auto',
                            'OPTIONS' => array(
                                0 => 'ENABLE_SCROLL_ZOOM',
                                1 => 'ENABLE_DBLCLICK_ZOOM',
                                2 => 'ENABLE_DRAGGING',
                                3 => 'ENABLE_KEYBOARD',
                            ),
                            'COMPONENT_TEMPLATE' => '.default'
                        ),
                        false
                    );?>
                    <!-- END MAP -->
                        
                    <div class="wpcmsdev-columns">
                        <div class="column column-width-one-half">
                            <h4>Quick Contact</h4>						
                            
                            <?php $APPLICATION->IncludeComponent(
                                'bitrix:main.feedback', 
                                'quick_contact_form', 
                                array(
                                    'EMAIL_TO' => 'gusevandrey1988@gmail.com',
                                    'EVENT_MESSAGE_ID' => array(
                                    ),
                                    'OK_TEXT' => 'Your message has been sent. Thank you!',
                                    'REQUIRED_FIELDS' => array(
                                        0 => 'NAME',
                                        1 => 'EMAIL',
                                        2 => 'MESSAGE',
                                    ),
                                    'USE_CAPTCHA' => 'Y',
                                    'COMPONENT_TEMPLATE' => 'quick_contact_form'
                                ),
                                false
                            );?>
                            
                        </div>
                        <div class="column column-width-one-half">
                            <h4>Find Us: (888) 252 389 3571</h4>
                            <p>
                                If you want to hire me or have any feedback or questions about our service in general, please send us a message by completing our enquiry form. It’s best to call though, someone we’ll always be there for you.
                            </p>
                            <p>
                                Monday – Friday: 9am to 5pm<br>
                                Saturday: 10am to 2pm<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>
                <!-- .entry-content -->
            </article>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
<?php require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>