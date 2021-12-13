<?php

/**
 * This file is part of Bonfire.
 *
 * (c) Lonnie Ezell <lonnieje@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bonfire\Modules\Widgets\Config;

use CodeIgniter\Config\BaseConfig;

class DoughnutChart extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Enable the chart animation
     * --------------------------------------------------------------------------
     */
    public bool $doughnut_enableAnimation = true;

    /**
     * --------------------------------------------------------------------------
     * Show the chart title
     * --------------------------------------------------------------------------
     */
    public bool $doughnut_showTitle = true;

    /**
     * --------------------------------------------------------------------------
     * Show the chart legend
     * --------------------------------------------------------------------------
     */
    public bool $doughnut_showLegend = true;

    /**
     * --------------------------------------------------------------------------
     * Set the legend position
     *
     * possible value are:
     * top
     * left
     * bottom
     * right
     * --------------------------------------------------------------------------
     */
    public string $doughnut_legendPosition = 'bottom';
}
