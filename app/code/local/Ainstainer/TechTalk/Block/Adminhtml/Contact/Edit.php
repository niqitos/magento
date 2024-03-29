<?php

/**
 * Created by PhpStorm.
 * User: Nik
 * Date: 11/8/16
 * Time: 11:56
 */
class Ainstainer_TechTalk_Block_Adminhtml_Contact_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'request_id';
        $this->_blockGroup = 'techtalk';
        $this->_controller = 'adminhtml_contact';
        $this->_mode = 'edit';

        parent::__construct();

        $this->_updateButton('save', 'label', Mage::helper('techtalk')->__('Save Request'));
        $this->_updateButton('delete', 'label', Mage::helper('techtalk')->__('Delete Request'));

        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    /**
     * Get edit form container header text
     *
     * @return string
     */
    public function getHeaderText()
    {
        if (Mage::registry('contact_request')->getId()) {
            return Mage::helper('techtalk')->__("Edit Request # %s", $this->escapeHtml(Mage::registry('contact_request')->getId()));
        }
        else {
            return Mage::helper('techtalk')->__('New Request');
        }
    }

}