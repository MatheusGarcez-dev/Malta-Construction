<?php
/**
 * Shared service landing page body. Expects:
 * $SERVICE (array): slug, breadcrumb, h1_main, h1_golden, subtitle, image, image_alt,
 *   why_heading, why_cards[icon,title,text] x3, benefits_heading, benefits[title,text] x3,
 *   plan_heading, plan_text[string, string], cta_title, cta_text, faq_subtitle, faqs[q,a] x3+
 */
if (!isset($SERVICE) || !is_array($SERVICE)) {
    return;
}
$h = static function ($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
};
$home = $SITE_HOME ?? './';
$contact = $SITE_CONTACT ?? 'contact';
$assets = $SITE_ASSETS ?? 'assets/';
$services = $SITE_SERVICES ?? './#services';
$s = $SERVICE;
?>
    <section class="sobre-hero">
        <div class="container">
            <nav class="breadcrumb__nav" aria-label="Breadcrumb">
                <ol class="breadcrumb__list">
                    <li class="breadcrumb__item">
                        <a href="<?php echo $h($home); ?>" class="breadcrumb__link">Home</a>
                    </li>
                    <li class="breadcrumb__item">
                        <a href="<?php echo $h($services); ?>" class="breadcrumb__link">Services</a>
                    </li>
                    <li class="breadcrumb__item breadcrumb__item--active" aria-current="page">
                        <?php echo $h($s['breadcrumb']); ?>
                    </li>
                </ol>
            </nav>

            <div class="sobre-hero__content">
                <div class="section__header">
                    <h1 class="section__title"><?php echo $h($s['h1_main']); ?> <span class="section__title--golden"><?php echo $h($s['h1_golden']); ?></span></h1>
                    <div class="section__divider"></div>
                    <p class="section__subtitle"><?php echo $h($s['subtitle']); ?></p>
                    <div class="hero-cta-holding">
                        <a href="<?php echo $h($contact); ?>" class="btn btn--primary">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="holding-porque">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title"><?php echo $h($s['why_heading']); ?></h2>
                <div class="section__divider"></div>
            </div>
            <div class="holding-porque__grid">
                <?php foreach ($s['why_cards'] as $card) : ?>
                <div class="holding-porque__card">
                    <div class="holding-porque__icon">
                        <i class="fas <?php echo $h($card['icon']); ?>"></i>
                    </div>
                    <h3 class="holding-porque__title"><?php echo $h($card['title']); ?></h3>
                    <p class="holding-porque__text"><?php echo $h($card['text']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="holding-beneficios">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title"><?php echo $h($s['benefits_heading']); ?></h2>
                <div class="section__divider"></div>
            </div>
            <div class="holding-beneficios__grid">
                <?php $n = 1; foreach ($s['benefits'] as $b) : ?>
                <div class="holding-beneficios__item">
                    <div class="holding-beneficios__number"><?php echo $n++; ?></div>
                    <div class="holding-beneficios__content">
                        <h3 class="holding-beneficios__title"><?php echo $h($b['title']); ?></h3>
                        <p class="holding-beneficios__text"><?php echo $h($b['text']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="holding-planeje">
        <div class="container">
            <div class="holding-planeje__header">
                <h2 class="section__title"><?php echo $h($s['plan_heading']); ?></h2>
                <div class="section__divider"></div>
            </div>
            <div class="holding-planeje__content">
                <div class="holding-planeje__text">
                    <?php foreach ($s['plan_text'] as $para) : ?>
                    <p class="holding-planeje__description"><?php echo $h($para); ?></p>
                    <?php endforeach; ?>
                    <div class="holding-planeje__button">
                        <a href="<?php echo $h($contact); ?>" class="btn btn--primary">Speak with an Expert</a>
                    </div>
                </div>
                <div class="holding-planeje__image">
                    <img src="<?php echo $h($assets . 'img/' . $s['image']); ?>" alt="<?php echo $h($s['image_alt']); ?>" width="600" height="400" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section" id="contato">
        <div class="container">
            <div class="cta-section__content">
                <h2 class="cta-section__title"><?php echo $h($s['cta_title']); ?></h2>
                <p class="cta-section__text"><?php echo $h($s['cta_text']); ?></p>
                <div class="cta-section__buttons">
                    <a href="<?php echo $h($contact); ?>" class="btn btn--primary">Get a Quote</a>
                    <a href="tel:+18436021986" class="btn btn--secondary">Call Us Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="container">
            <div class="section__header">
                <h2 class="section__title">Frequently Asked <span class="section__title--golden">Questions</span></h2>
                <div class="section__divider"></div>
                <p class="section__subtitle"><?php echo $h($s['faq_subtitle']); ?></p>
            </div>
            <div class="faq-section__list">
                <?php foreach ($s['faqs'] as $faq) : ?>
                <div class="faq-section__item">
                    <div class="faq-section__question">
                        <h3 class="faq-section__question-text"><?php echo $h($faq['q']); ?></h3>
                        <span class="faq-section__icon"><i class="fas fa-plus"></i></span>
                    </div>
                    <div class="faq-section__answer">
                        <p class="faq-section__answer-text"><?php echo $h($faq['a']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
