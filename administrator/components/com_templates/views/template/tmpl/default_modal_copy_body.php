<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_templates
 *
 * @copyright   (C) 2016 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div id="template-manager-copy" class="container-fluid">
	<div class="row-fluid">
		<div class="form-horizontal">
			<div class="control-group">
				<div class="control-label">
					<label for="new_name" class="modalTooltip" title="<?php echo JHtml::_('tooltipText', 'COM_TEMPLATES_TEMPLATE_NEW_NAME_LABEL', 'COM_TEMPLATES_TEMPLATE_NEW_NAME_DESC'); ?>">
						<?php echo JText::_('COM_TEMPLATES_TEMPLATE_NEW_NAME_LABEL'); ?>
					</label>
				</div>
				<div class="controls">
					<input class="input-xlarge" type="text" id="new_name" name="new_name"  />
				</div>
			</div>
		</div>
	</div>
</div>
