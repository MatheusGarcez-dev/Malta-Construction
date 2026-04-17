<?php
require_once __DIR__ . '/includes/services-definitions.php';
$SERVICE = malta_service('flooring');
$page_title = $SERVICE['page_title'];
$page_description = $SERVICE['page_description'];
$SITE_HOME = '/';
$SITE_CONTACT = '/contact';
$SITE_ASSETS = '/assets/';
$SITE_SERVICES = '/#services';
include __DIR__ . '/includes/head.php';
?>
<main>
<?php include __DIR__ . '/includes/service-page-template.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
