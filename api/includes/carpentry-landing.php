<?php
$h = static function ($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};
$home = $SITE_HOME ?? './';
$contact = $SITE_CONTACT ?? 'contact';
$assets = $SITE_ASSETS ?? 'assets/';
$prefix = $SITE_PREFIX ?? '';
$services = [
    ['href' => $prefix . 'finish-carpentry', 'img' => 'service-finish-carpentry.jpeg', 'alt' => 'Finish carpentry and interior wood details', 'icon' => 'fa-hammer', 'title' => 'Finish Carpentry', 'text' => 'Crown molding, casings, baseboards, and built-ins installed after the rough work is done.'],
    ['href' => $prefix . 'trim-work', 'img' => 'service-trim-work.jpeg', 'alt' => 'Trim and millwork installation', 'icon' => 'fa-ruler-combined', 'title' => 'Trim & Millwork', 'text' => 'Clean lines, tight miters, and wood profiles that tie rooms together.'],
    ['href' => $prefix . 'custom-closets', 'img' => 'service-custom-closets.jpeg', 'alt' => 'Custom wood closet system', 'icon' => 'fa-door-open', 'title' => 'Custom Wood Closets', 'text' => 'Closet systems built around your storage, with wood finishes that match the home.'],
    ['href' => $prefix . 'stair-renovation', 'img' => 'service-stair-renovation.jpeg', 'alt' => 'Wood stair renovation', 'icon' => 'fa-stairs', 'title' => 'Wood Stairs', 'text' => 'Treads, risers, and railings refinished or rebuilt so the staircase feels solid and finished.'],
    ['href' => $prefix . 'cabinet-installation', 'img' => 'service-cabinet-installation.jpeg', 'alt' => 'Cabinet installation', 'icon' => 'fa-boxes-stacked', 'title' => 'Cabinet Installation', 'text' => 'Kitchen and bath cabinets leveled, scribed, and aligned for a factory-quality fit.'],
    ['href' => $prefix . 'flooring', 'img' => 'service-flooring.jpeg', 'alt' => 'Wood flooring installation', 'icon' => 'fa-border-all', 'title' => 'Wood Flooring', 'text' => 'Hardwood and related flooring installed to meet the trim and stairs without awkward transitions.'],
];
?>
<section class="sobre-hero">
    <div class="container">
        <nav class="breadcrumb__nav" aria-label="Breadcrumb">
            <ol class="breadcrumb__list">
                <li class="breadcrumb__item">
                    <a href="<?php echo $h($home); ?>" class="breadcrumb__link">Home</a>
                </li>
                <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">Carpentry &amp; Woodwork</li>
            </ol>
        </nav>
        <div class="sobre-hero__content">
            <div class="section__header">
                <h1 class="section__title">Carpentry &amp; <span class="section__title--golden">Woodwork</span></h1>
                <div class="section__divider"></div>
                <p class="section__subtitle">Custom carpentry and woodwork for homes that need precise trim, built-ins, stairs, closets, and cabinets.</p>
                <div class="hero-cta-holding">
                    <a href="<?php echo $h($contact); ?>" class="btn btn--primary">Get a Carpentry Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="woodwork-lead">
    <div class="container">
        <p class="woodwork-lead__text">
            Malta Construction LLC focuses on the woodwork you see and touch every day. If you are looking for a finish carpenter for crown molding, a crew for custom woodwork, or a single team to handle trim, stairs, and cabinets together, this is the work we do. We measure on site, confirm profiles before we cut, and leave joints that stay tight.
        </p>
    </div>
</section>

<section class="solucoes" id="woodwork-services">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Woodwork We <span class="section__title--golden">Build</span></h2>
            <div class="section__divider"></div>
            <p class="section__subtitle">Every service below stays inside carpentry and woodwork, from the first piece of trim to the last cabinet door.</p>
        </div>
        <div class="solucoes__grid">
            <?php foreach ($services as $item) : ?>
            <article class="solucoes__card">
                <div class="solucoes__image">
                    <img src="<?php echo $h($assets . 'img/' . $item['img']); ?>" alt="<?php echo $h($item['alt']); ?>" width="400" height="280" loading="lazy" decoding="async">
                </div>
                <div class="solucoes__icon">
                    <i class="fas <?php echo $h($item['icon']); ?>"></i>
                </div>
                <div class="solucoes__card-content">
                    <h3 class="solucoes__card-title"><?php echo $h($item['title']); ?></h3>
                    <p class="solucoes__card-text"><?php echo $h($item['text']); ?></p>
                    <a href="<?php echo $h($item['href']); ?>" class="solucoes__card-link">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="holding-porque">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Why Homeowners Hire Malta for <span class="section__title--golden">Carpentry</span></h2>
            <div class="section__divider"></div>
        </div>
        <div class="holding-porque__grid">
            <article class="holding-porque__card">
                <div class="holding-porque__icon"><i class="fas fa-drafting-compass"></i></div>
                <h3 class="holding-porque__title">Measured on Site</h3>
                <p class="holding-porque__text">Walls are rarely square. We layout from the room itself so moldings, stairs, and cabinets meet the house you have.</p>
            </article>
            <article class="holding-porque__card">
                <div class="holding-porque__icon"><i class="fas fa-tree"></i></div>
                <h3 class="holding-porque__title">Woodwork, Not a Side Job</h3>
                <p class="holding-porque__text">This page is only about carpentry. Trim, built-ins, closets, stairs, cabinets, and wood floors are the craft we show up to do.</p>
            </article>
            <article class="holding-porque__card">
                <div class="holding-porque__icon"><i class="fas fa-comments"></i></div>
                <h3 class="holding-porque__title">One Clear Scope</h3>
                <p class="holding-porque__text">You see the profiles, materials, and timeline before we cut. Changes are talked through, not discovered at the end.</p>
            </article>
        </div>
    </div>
</section>

<?php include __DIR__ . '/reviews.php'; ?>

<section class="faq-section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Carpentry <span class="section__title--golden">Questions</span></h2>
            <div class="section__divider"></div>
            <p class="section__subtitle">What people ask before hiring a carpenter for woodwork</p>
        </div>
        <div class="faq-section__list">
            <div class="faq-section__item">
                <div class="faq-section__question">
                    <h3 class="faq-section__question-text">What does a finish carpenter do?</h3>
                    <span class="faq-section__icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-section__answer">
                    <p class="faq-section__answer-text">Finish carpentry is the visible woodwork: baseboards, door and window casings, crown molding, wainscoting, built-in shelves, and other details installed after drywall. It is the work that makes a room look finished.</p>
                </div>
            </div>
            <div class="faq-section__item">
                <div class="faq-section__question">
                    <h3 class="faq-section__question-text">Do you handle custom woodwork, or only stock trim?</h3>
                    <span class="faq-section__icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-section__answer">
                    <p class="faq-section__answer-text">Both. We install standard molding profiles and we build custom pieces such as closet systems, stair parts, and built-ins when the room needs something made to fit.</p>
                </div>
            </div>
            <div class="faq-section__item">
                <div class="faq-section__question">
                    <h3 class="faq-section__question-text">Can one crew do trim, stairs, and cabinets?</h3>
                    <span class="faq-section__icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-section__answer">
                    <p class="faq-section__answer-text">Yes. Keeping carpentry with one team helps the wood profiles, stains, and transitions match from room to room instead of looking like separate jobs.</p>
                </div>
            </div>
            <div class="faq-section__item">
                <div class="faq-section__question">
                    <h3 class="faq-section__question-text">How do I get a quote for carpentry?</h3>
                    <span class="faq-section__icon"><i class="fas fa-plus"></i></span>
                </div>
                <div class="faq-section__answer">
                    <p class="faq-section__answer-text">Send photos and a short description of the rooms, or schedule a walkthrough. We confirm the scope and send a quote before any wood is cut. Estimates are free.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="cta-section__content">
            <h2 class="cta-section__title">Ready to Start Your Woodwork?</h2>
            <p class="cta-section__text">Tell us which rooms need carpentry. We will walk the space and quote the woodwork on its own.</p>
            <div class="cta-section__buttons">
                <a href="<?php echo $h($contact); ?>" class="btn btn--primary">Get a Quote</a>
                <a href="tel:+18436021986" class="btn btn--secondary">Call Us Now</a>
            </div>
        </div>
    </div>
</section>
