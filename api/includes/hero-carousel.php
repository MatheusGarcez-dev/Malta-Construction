<?php
$heroAssets = $HERO_ASSETS ?? 'assets/';
$heroSlides = [
    ['file' => '01-hallway-wainscoting.jpeg', 'alt' => 'Hallway with white wainscoting and hardwood floors'],
    ['file' => '02-lighted-built-in.jpeg', 'alt' => 'Lighted built-in shelving and cabinets'],
    ['file' => '03-built-in-desk.jpeg', 'alt' => 'Built-in desk with wood countertop'],
    ['file' => '04-kitchen-cabinets.jpeg', 'alt' => 'White kitchen cabinets and trim'],
    ['file' => '05-display-shelving.jpeg', 'alt' => 'Illuminated display shelving'],
    ['file' => '06-mudroom-lockers.jpeg', 'alt' => 'Mudroom lockers and bench'],
    ['file' => '08-window-trim.jpeg', 'alt' => 'Window casing and wall paneling'],
    ['file' => '09-marble-built-in.jpeg', 'alt' => 'Built-in with stone countertop'],
    ['file' => '11-sunroom-windows.jpeg', 'alt' => 'Sunroom window trim'],
    ['file' => '13-custom-closet.jpeg', 'alt' => 'Custom closet with hanging rods'],
];
?>
<div class="hero__slides" aria-roledescription="carousel" aria-label="Recent Malta Construction projects">
    <?php foreach ($heroSlides as $index => $slide) : ?>
    <img
        src="<?php echo htmlspecialchars($heroAssets . 'img/recent/' . $slide['file'], ENT_QUOTES, 'UTF-8'); ?>"
        alt="<?php echo $index === 0 ? htmlspecialchars($slide['alt'], ENT_QUOTES, 'UTF-8') : ''; ?>"
        width="840"
        height="840"
        loading="eager"
        decoding="async"
        <?php echo $index === 0 ? 'class="is-active"' : 'aria-hidden="true"'; ?>
    >
    <?php endforeach; ?>
</div>
