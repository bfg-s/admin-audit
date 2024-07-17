<?php

namespace Admin\Extend\AdminAudit;

use Admin\ExtendProvider;
use Admin\Core\ConfigExtensionProvider;
use Admin\Extend\AdminAudit\Extension\Config;
use Admin\Extend\AdminAudit\Extension\Install;
use Admin\Extend\AdminAudit\Extension\Navigator;
use Admin\Extend\AdminAudit\Extension\Uninstall;
use Admin\Extend\AdminAudit\Extension\Permissions;

/**
 * Class ServiceProvider
 * @package Admin\Extend\AdminAudit
 */
class ServiceProvider extends ExtendProvider
{
    /**
     * Extension ID name
     * @var string
     */
    public static string $name = "bfg/admin-audit";

    /**
     * Extension call slug
     * @var string
     */
    static string $slug = "bfg_admin_audit";

    /**
     * Extension description
     * @var string
     */
    public static string $description = "The auditing viewer for bfg admin";

    /**
     * @var string
     */
    protected string $navigator = Navigator::class;

    /**
     * @var string
     */
    protected string $install = Install::class;

    /**
     * @var string
     */
    protected string $uninstall = Uninstall::class;

    /**
     * @var ConfigExtensionProvider|string
     */
    protected string|ConfigExtensionProvider $config = Config::class;
}

