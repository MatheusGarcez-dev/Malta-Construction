<?php
$recentAssets = $RECENT_ASSETS ?? 'assets/';
$recentSlides = [
    ['file' => '01-hallway-wainscoting.jpeg', 'label' => 'Hallway wainscoting'],
    ['file' => '02-lighted-built-in.jpeg', 'label' => 'Lighted built-in'],
    ['file' => '03-built-in-desk.jpeg', 'label' => 'Built-in desk'],
    ['file' => '04-kitchen-cabinets.jpeg', 'label' => 'Kitchen cabinets'],
    ['file' => '05-display-shelving.jpeg', 'label' => 'Display shelving'],
    ['file' => '06-mudroom-lockers.jpeg', 'label' => 'Mudroom lockers'],
    ['file' => '07-closet-shelves.jpeg', 'label' => 'Closet shelving'],
    ['file' => '08-window-trim.jpeg', 'label' => 'Window trim'],
    ['file' => '09-marble-built-in.jpeg', 'label' => 'Built-in with stone top'],
    ['file' => '10-open-shelving.jpeg', 'label' => 'Open shelving'],
    ['file' => '11-sunroom-windows.jpeg', 'label' => 'Sunroom trim'],
    ['file' => '12-sunroom-ceiling.jpeg', 'label' => 'Beadboard ceiling'],
    ['file' => '13-custom-closet.jpeg', 'label' => 'Custom closet'],
];
$renderSlides = static function (array $slides, string $assets, bool $hidden) {
    $hiddenAttr = $hidden ? ' aria-hidden="true"' : '';
    echo '<div class="recent__group"' . $hiddenAttr . '>';
    foreach ($slides as $slide) {
        $src = htmlspecialchars($assets . 'img/recent/' . $slide['file'], ENT_QUOTES, 'UTF-8');
        $label = htmlspecialchars($slide['label'], ENT_QUOTES, 'UTF-8');
        echo '<figure class="recent__slide">';
        echo '<img src="' . $src . '" alt="' . ($hidden ? '' : $label) . '" width="720" height="960" loading="eager" decoding="async" draggable="false">';
        echo '<figcaption class="recent__caption">' . $label . '</figcaption>';
        echo '</figure>';
    }
    echo '</div>';
};
?>
<section class="recent" id="recent-work" aria-labelledby="recent-title">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title" id="recent-title">Recent <span class="section__title--golden">Services</span></h2>
            <div class="section__divider"></div>
            <p class="section__subtitle">A look at carpentry and woodwork we just finished: trim, built-ins, closets, and cabinets.</p>
        </div>
    </div>
    <div class="recent__viewport">
        <div class="recent__track">
            <?php $renderSlides($recentSlides, $recentAssets, false); ?>
            <?php $renderSlides($recentSlides, $recentAssets, true); ?>
        </div>
    </div>
</section>
