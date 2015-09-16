###ImportX

ImportX is a utility addon designed to allow users
to import comma seperated values (CSV) into the MODX
system as new resources.

It expects a heading line, which is the first line of
the CSV values and consists of MODX resource field
names, or TV IDs. An example of a valid heading line
could be:

    pagetitle;menutitle;alias;tv2;content

It will use the heading throughout the rest of the CSV
values to make sure the references are correct. If it
is not, it will throw an error.

TVs need to be specified by the prefix "tv" and the ID
of the TV it needs to be added to, like "tv2" in the
example heading above.

CSV can be imported from manual input (copy/paste) or
from file upload.

ImportX has been developed with funding by Working Party,
a Sydney based Digital Agency.

---

##Wordpress XML File Documentation

####Working Features:

1. **Default MODX Template ID Config Setting**

 Set all Imported resources to a MODX Template ID before the script runs features 2 & 3

2. **WP XML Template Name Mapping to MODX Template ID**

 Mapping Config Setting: default:2

 XML value: 
 ```
 <wp:meta_key>_wp_page_template</wp:meta_key>
 <wp:meta_value><![CDATA[default]]></wp:meta_value>
 ```

 This will map the Resource to MODX Template 2

3. **Automatic Template Name Matching**

 Like the values above. if you have a MODX template named "default" it will be automatically assigned to the resource.

