<?php

/**
 * This file is part of discordier/justtextwidgets.
 *
 * (c) 2012-2015 CyberSpectrum
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    JustTextWidgets
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Andreas Isaak <andy.jared@googlemail.com>
 * @copyright  2012-2017 CyberSpectrum
 * @license    https://github.com/discordier/justtextwidgets/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace Discordier\JustTextWidgets;

use Contao\Widget;

/**
 * Display a hidden field with a fixed value in the backend and the option name next to it.
 * This is useful when you need predefined values in a MultiColumnWizard i.e.
 */
class JustAText extends Widget
{
    /**
     * The name of the template.
     *
     * @var string
     */
    protected $strTemplate = 'be_widget';

    /**
     * Generate the widget and return it as string.
     *
     * @return string
     */
    public function generate()
    {
        return sprintf(
            '<input type="hidden" id="ctrl_%s" name="%s" value="%s" /><span>%s</span>',
            $this->strId,
            $this->strName,
            specialchars($this->varValue),
            $this->label
        );
    }
}
