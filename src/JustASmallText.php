<?php

/**
 * @package    JustTextWidgets
 * @subpackage Core
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan heimes <stefan_heimes@hotmail.com>
 * @author     Andreas Isaak <andy.jared@googlemail.com>
 * @copyright  CyberSpectrum
 * @license    LGPL
 * @filesource
 */

/**
 * Display a hidden field with a fixed value in the backend and the option name next to it.
 * This is useful when you need predefined values in a MultiColumnWizard i.e.
 *
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  CyberSpectrum
 * @package    JustTextWidgets
 */
class JustASmallText extends \Widget
{
    /**
     * The name of the template.
     *
     * @var string
     */
    protected $strTemplate = 'be_widget_small';

    /**
     * Generate the widget and return it as string.
     *
     * @return string
     */
    public function generate()
    {
        return sprintf(
            '<input type="hidden" id="ctrl_%s" name="%s" value="%s" /><div%s>%s</div>',
            $this->strId,
            $this->strName,
            $this->label ? specialchars($this->label) : specialchars($this->varValue),
            $this->style ? ' style="' . $this->style . '"' : '',
            $this->label
        );
    }
}
