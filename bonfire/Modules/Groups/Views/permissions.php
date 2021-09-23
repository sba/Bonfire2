<?php $this->extend('master') ?>

<?php $this->section('main') ?>
<x-page-head>
    <a href="/<?= ADMIN_AREA ?>/settings/groups" class="back">&larr; Groups</a>
    <h2>Edit Groups &amp; Permissions</h2>
</x-page-head>

<x-admin-box>
    <form action="<?= current_url() ?>" method="post">
        <?= csrf_field() ?>

        <fieldset>
            <legend><?= $group['title'] ?></legend>

            <p>Select the permissions this group should have access to.</p>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Description</th>
                        <th class="text-center"># Users</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($groups) && count($groups)) : ?>
                    <?php foreach($groups as $alias => $group) : ?>
                        <tr>
                            <td>
                                <a href="/<?= ADMIN_AREA ?>/settings/groups/<?= $alias ?>">
                                    <?= esc($group['title']) ?>
                                </a>
                            </td>
                            <td><?= esc($group['description']) ?></td>
                            <td class="text-center"><?= esc(number_format($group['user_count'])) ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
                </tbody>
            </table>

        </fieldset>

        <div class="text-end">
            <input type="submit" class="btn btn-primary" value="Save Permissions">
        </div>

    </form>

</x-admin-box>

<?php $this->endSection() ?>