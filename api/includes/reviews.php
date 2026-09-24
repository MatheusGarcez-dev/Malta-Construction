<?php
$reviews = [
    [
        'initials' => 'MR',
        'name' => 'Michael R.',
        'meta' => 'Finish carpentry · whole-home trim',
        'quote' => 'Malta Construction replaced our baseboards, casings, and crown molding. The joints are tight, the lines are straight, and they left the house cleaner than they found it. We finally have the finish we pictured.',
    ],
    [
        'initials' => 'SL',
        'name' => 'Sarah L.',
        'meta' => 'Custom closet · primary bedroom',
        'quote' => 'They designed the closet around how we actually get ready in the morning. Every shelf and rod landed exactly where we needed it, and the install was done in two days without drama.',
    ],
    [
        'initials' => 'DJ',
        'name' => 'David J.',
        'meta' => 'Stair renovation',
        'quote' => 'Our staircase was worn and uneven. Malta rebuilt the treads and railing so it feels solid and looks like it belongs in the house. Communication was clear from the first walkthrough to the last nail.',
    ],
    [
        'initials' => 'AK',
        'name' => 'Amanda K.',
        'meta' => 'Kitchen cabinets and woodwork',
        'quote' => 'The cabinets are level, the doors line up, and the wood details match the rest of the trim. It is the kind of careful carpentry you notice every time you walk into the kitchen.',
    ],
];
?>
<section class="reviews" id="reviews">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title">Client <span class="section__title--golden">Reviews</span></h2>
            <div class="section__divider"></div>
            <p class="section__subtitle">Feedback from homeowners who hired Malta Construction for carpentry and woodwork</p>
        </div>
        <div class="reviews__grid">
            <?php foreach ($reviews as $review) : ?>
            <article class="reviews__card">
                <div class="reviews__stars" aria-label="5 out of 5 stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p class="reviews__quote">“<?php echo htmlspecialchars($review['quote'], ENT_QUOTES, 'UTF-8'); ?>”</p>
                <div class="reviews__person">
                    <div class="reviews__avatar" aria-hidden="true"><?php echo htmlspecialchars($review['initials'], ENT_QUOTES, 'UTF-8'); ?></div>
                    <div>
                        <div class="reviews__name"><?php echo htmlspecialchars($review['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                        <div class="reviews__meta"><?php echo htmlspecialchars($review['meta'], ENT_QUOTES, 'UTF-8'); ?></div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
