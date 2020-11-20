<?php /* Smarty version 2.6.31, created on 2020-11-09 06:07:58
         compiled from modules/Emails/include/ComposeView/ComposeViewToolbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_button', 'modules/Emails/include/ComposeView/ComposeViewToolbar.tpl', 8, false),)), $this); ?>
<div class="panel panel-default panel-email-compose">
    <div class="panel-body">
        {*<input title="Save" accesskey="a" class="button primary" onclick="" type="submit" name="button" value="Save" id="SAVE">*}
        {*<input title="Cancel [Alt+l]" accesskey="l" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&amp;module=FP_events&amp;record=cb676657-b74f-c928-9967-58c146121ee9'); return false;" name="button" value="Cancel" type="button" id="CANCEL">*}
         <?php if (! empty ( $this->_tpl_vars['form'] ) && ! empty ( $this->_tpl_vars['form']['buttons'] )): ?>
            <div class="custom-buttons">
                 <?php $_from = $this->_tpl_vars['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val'] => $this->_tpl_vars['button']):
?>
                    <?php echo smarty_function_sugar_button(array('module' => ($this->_tpl_vars['module']),'id' => ($this->_tpl_vars['button']),'form_id' => ($this->_tpl_vars['form_id']),'view' => ($this->_tpl_vars['view'])), $this);?>

                 <?php endforeach; endif; unset($_from); ?>
            </div>
         <?php endif; ?>
    </div>
</div>