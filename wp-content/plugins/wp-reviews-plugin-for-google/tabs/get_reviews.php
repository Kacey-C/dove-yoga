<div class="ti-box">
<div class="ti-header"><?php echo TrustindexPlugin::___('Want more %s reviews?', [ 'Google' ]); ?></div>
<?php if($trustindex_pm_google->shortname == "google"): ?>
<p><?php echo TrustindexPlugin::___("Get 100+ REAL Google reviews, with only 3 minutes of work, without developer knowledge..."); ?></p>
<a href="https://wordpress.trustindex.io/collect-google-reviews/?source=wpcs-google" target="_blank" class="btn-text"><?php echo TrustindexPlugin::___("DOWNLOAD OUR FREE GUIDE"); ?></a>
<?php else: ?>
<p><?php echo TrustindexPlugin::___("Get 100+ REAL Customer reviews, with only 3 minutes of work, without developer knowledge..."); ?></p>
<a href="https://wordpress.trustindex.io/collect-reviews/?source=wpcs-google" target="_blank" class="btn-text"><?php echo TrustindexPlugin::___("DOWNLOAD OUR FREE GUIDE"); ?></a>
<?php endif; ?>
</div>