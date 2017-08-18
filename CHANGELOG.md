# Changelog

## 1.2.1 - 2017-08-18

* Fixed illegal use of object context in ied_plugin_textpacks tag.

## 1.2.0 - 2017-06-29

* Added ability to install the plugin composer via Composer :-\ (thanks, philwareham).
* Adopted semver versioning model.

## 1.1.1 - 2016-11-14

* Fixed multi-edit widget functionality.
* Fixed multiple constants in plugin templates (thanks, testdeputy).
* Fixed saving of checkbox values during meta_save.
* Added owner for Textpack strings, taken from the designated plugin prefix.

## 1.1.0 - 2016-09-10

* For Txp 4.6.x+ only.
* Added Textpack string counter.
* Added Save Meta button.
* Permitted constants in plugin template declarations.
* Fixed bogus javascript code output.
* Removed resize handler.
* Restructured internals for performance.
* Layout and workflow improvements.

## 1.0.6 - 2014-07-25

* Added @escape@ attribute to ied_plugin_download_link tag.

## 1.0.5 - 2013-10-21

* More sensible default for lang export from ied_plugin_download_link tag.

## 1.0.4 - 2013-10-15

* Fixed bug preventing help being packaged in downloaded plugin from public side.

## 1.0.3 - 2013-09-28

* Added public tags ied_plugin_download, ied_plugin_download_link.

## 1.0.2 - 2013-09-27

* Added public tags ied_plugin_list (from DB only for now), ied_plugin_info, ied_plugin_download, ied_plugin_download_link, ied_plugin_textpacks.

## 1.0.1 - 2013-09-25

* Fixed textpack display string bug on admin side.

## 1.0.0 - 2013-05-09

* Added Textpack support and management.
* Permitted more installation / creation options.
* Retooled the UI for Txp 4.5.x.
* Added dedicated `Save Code` button with syntax check for faster saving via AJAX.
* Made 'distribution' and 'style' blocks optional to speed up full saves.
* Added support for firing lifecycle events.
* Supports the two new AJAX plugin types introduced in Txp 4.5.0.
* More options for multi edit changestatus.

## 0.9.3 - 2010-11-23

* Fixed setup screen 'undefined' bug (thanks MarcoK).

## 0.9.2 - 2010-11-03

* Fixed Options link for plugins from cache dir and fixed escaping of exported php files (both thanks maniqui).
* Fixed escaping when importing from PHP file.
* Cosmetic tweaks (plugin_cache_dir section only displayed if there are valid PHP files, and View Help link adjusted).
* Fixed jQuery on setup panel. Extended resizer cookie to one year expiry.

## 0.9.1 - 2010-02-11

* Added Jump To Line capability, in most browsers (thanks thebombsite).

## 0.9.0 - 2009-08-29

* Requires Txp 4.2.0+.
* Added support for plugin prefs/lifecycle and larger plugin code.
* Fixed CSS delimiter for backwards compatibility.
* New plugin template details used.

## 0.8.3 - 2009-04-11

* Fixed help file CSS output so it validates.
* Uses @$prefs@ instead of @$GLOBALS@ internally.
* Checks if plugin_cache_dir exists before trying to use it on the list panel.

## 0.8.2 - 2009-02-23

* Can now create new template files on the fly (thanks azw).
* Fixed Textile limit on large help files.
* Fixed database calls for MySQL strict mode (thanks Gocom / azw).

## 0.8.1 - 2009-01-03

* Added textile cacheing to improve performance with large help files.
* Profiled code and improved speed in various functions.

## 0.8.0 - 2008-11-03

* Added support for recommended plugin load order.
* Added Admin-only plugin type.
* Added ability to override filename format on export.
* Added restore point/rollback (thanks maverick).
* Added character count (thanks pepebe).
* Rationalised the list and edit panels.
* Sped up export/save routines.
* Fixed a few corner case bugs (e.g. empty plugin name, missing quotes in template options).

## 0.7.5 - 2008-05-28

* Added 'modified' to the Version column (thanks uli).
* Added ability to rename files in the plugin cache dir when the version changes.

## 0.7.4 - 2008-03-28

* Fixed empty plugin code if Style block left blank.
* Fixed strip/slash/encoding errors (thanks the_ghost/ruud).
* Fixed crlf newlines in code block (thanks hakjoon/ruud).

## 0.7.3 - 2008-01-11

* Added support for _reading_ an optional revision from the template parser and appending it to the version (thanks net-carver).
* More gTxt() strings converted.

## 0.7.2 - 2008-01-10

* Fixed bug if plugin has no help.
* Style section no longer stored/exported if it's not in use (thanks the_ghost / iblastoff).

## 0.7.1 - 2008-01-09

* Textarea width can now be controlled from prefs, and height from a drag bar.
* Default width increased to 110 chars.
* Publish plugins from the list panel.
* Install button removed when prefs all correctly installed (all thanks variaas / iblastoff).

## 0.7.0 - 2008-01-08

* Re-importing plugins now retains style block.
* Added 'admin side plugin with public-side type' warning.
* Changed button styling and positions (all three thanks net-carver).
* gTxt() pref labels and 'intelligent' prefs (go jQuery go!).
* Cached plugins now also have direct export from Edit panel.
* 'don't textile HTML' check.
* Minor bugfixes.

## 0.6.0 - 2008-01-07

Built-in help viewer (thanks net-carver). Support for Edit Area & CodePress(ish) (thanks variaas). Help block/Code block position switchable on export. Added Setup prefs page. Line break/style bugfixes.

## 0.5.0 - 2008-01-04

* Full support for standard template.
* Compressed plugins.
* Library plugins.
* Textile help and styling.
* Integration with net-carver's Plugin Help Viewer.

## 0.4.0 - 2006-04-10

* Added support for plugin_cache_dir.

## 0.3.0 - 2006-03-17

* Added 'save as php'.

## 0.2.0 - 2006-02-25

* Added 'save as' option.

## 0.1.0 - 2006-02-25

* Initial release
