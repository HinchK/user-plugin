<div class="scoreboard-item title-value">
    <h4><?= __("User") ?></h4>
    <?php if ($formModel->name): ?>
        <p><?= e($formModel->name) ?></p>
    <?php else: ?>
        <p><em><?= e(trans('rainlab.user::lang.user.name_empty')) ?></em></p>
    <?php endif ?>
    <p class="description">
        <a href="mailto:<?= e($formModel->email) ?>">
            <?= e($formModel->email) ?>
        </a>
    </p>
</div>
<?php if ($formModel->created_at): ?>
    <div class="scoreboard-item title-value">
        <h4><?= e(trans('rainlab.user::lang.user.joined')) ?></h4>
        <p title="<?= $formModel->created_at->diffForHumans() ?>">
            <?= $formModel->created_at->toFormattedDateString() ?>
        </p>
        <p class="description">
            <?= e(trans('rainlab.user::lang.user.status_label')) ?>:
            <?php if ($formModel->is_guest): ?>
                <?= e(trans('rainlab.user::lang.user.status_guest')) ?>
            <?php elseif ($formModel->is_activated): ?>
                <?= e(trans('rainlab.user::lang.user.status_activated')) ?>
            <?php else: ?>
                <?= e(trans('rainlab.user::lang.user.status_registered')) ?>
            <?php endif ?>
        </p>
    </div>
<?php endif ?>
<?php if ($formModel->last_seen): ?>
    <div class="scoreboard-item title-value">
        <h4><?= __("Last seen") ?></h4>
        <p><?= $formModel->last_seen->diffForHumans() ?></p>
        <p class="description">
            <?= $formModel->isOnline() ? e(trans('rainlab.user::lang.user.is_online')) : e(trans('rainlab.user::lang.user.is_offline')) ?>
        </p>
    </div>
<?php endif ?>
