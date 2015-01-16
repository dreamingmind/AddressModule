# AddressModule

## Elements ##
### Fieldset Elements ###
Presents a ```<fieldset>``` that contains the inputs necessary to create or edit one address record. Multiple addresses can be on the page at the same time by sending them with different **$alias** values.
- Send $alias to the views that include this element to set the ##Model## in the inputs
### Review Elements ###
- Send $alias to name the ##Model## for this address
- Pass address data in $address with the fields as first level indexes
### Dynamic Review Elements ###
- Send $alias to name the **Model** for this address
- Pass address data in $address with the fields as first level indexes

mysql
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
