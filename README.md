# AddressModule

## Javascript ##
All javascript for the module is in **address_module.js**. Not every view and element in the module requires javascript but for safety, include the file on your base layout.
``` php
$this->Html->script('address_module');
```

## Elements ##
### Fieldset Elements ###
Presents a ```<fieldset>``` that contains the inputs necessary to create or edit one address record. Multiple addresses can be on the page at the same time by sending them with different **$alias** values.
- Send $alias to the views that include this element to set the **Model** in the inputs

The fieldset is not wrapped in a form.
``` php
echo $this->element('AddressModule.simple_address_fieldset', array('alias' => 'Shipping'));
echo $this->element('AddressModule.simple_address_fieldset', array('alias' => 'Billing'));
```

### Review Elements ###
- Send $alias to name the **Model** for this address
- Pass address data in $address with the fields as first level indexes
``` php
echo $this->element('AddressModule.simple_address_review', array('alias' => 'Shipping', 'address' => $this->request->data('Shipping')));
echo $this->element('AddressModule.simple_address_review', array('alias' => 'Billing', 'address' => $this->request->data('Billing')));
```

### Dynamic Review Elements ###
***Requires the javascript for full functionality***

**Dynamic Review Elements** combine the previous two element types. Assuming javascript is enabled, the view will display the formatted text of the address with an edit button. Clicking the button will hide this entire section and display and instead display the fieldset with populated inputs followed by a **Submit** and **Cancel** button. **Cancel** will revert the display. **Submit** will call the AddressModule to save the data and will display a flash message reporting the result and replacing the section with new data on success.

Same variable requirements as **Dynamic Review Elements**
- Send $alias to name the **Model** for this address
- Pass address data in **$address** with the fields as first level indexes

The fieldset is not wrapped in a form.

## mysql ##
``` sql
CREATE TABLE `addresses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `attention` varchar(100) DEFAULT NULL,
  `name1` varchar(100) DEFAULT NULL,
  `name2` varchar(100) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `country` varchar(10) DEFAULT 'US',
  `foreign_key` int(11) DEFAULT NULL,
  `foreign_table` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=114 DEFAULT CHARSET=latin1;
```
